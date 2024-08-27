<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpesaController extends Controller
{
    // This method generates an access token
    private function generateAccessToken()
    {
        $consumerKey = env('MPESA_CONSUMER_KEY');
        $consumerSecret = env('MPESA_CONSUMER_SECRET');
    
        $credentials = base64_encode($consumerKey . ':' . $consumerSecret);
    
        $url = env('MPESA_ENV') === 'live' ?
            'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials' :
            'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . $credentials, 'Content-Type: application/json']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $curl_error = curl_error($curl);
        curl_close($curl);
    
        if ($curl_response === false) {
            \Log::error('CURL Error: ' . $curl_error);
            return null;
        }
    
        $response = json_decode($curl_response);
        \Log::info('Access Token Response: ' . json_encode($response));
    
        return isset($response->access_token) ? $response->access_token : null;
    }
    

    // Method to handle the form submission and initiate the STK Push
    public function submitPayment(Request $request)
{
    $amount = $request->input('total-amount');
    $phone = $request->input('phone');

    // Generate an access token
    $accessToken = $this->generateAccessToken();

    if ($accessToken === null) {
        return back()->with('error', 'Failed to generate access token. Please try again.');
    }

    $url = env('MPESA_ENV') === 'live' ?
        'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest' :
        'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    
    $timestamp = now()->format('YmdHis');
    $password = base64_encode(env('MPESA_SHORTCODE') . env('MPESA_PASSKEY') . $timestamp);

    $curl_post_data = [
        'BusinessShortCode' => env('MPESA_SHORTCODE'),
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $amount,
        'PartyA' => $phone,
        'PartyB' => env('MPESA_SHORTCODE'),
        'PhoneNumber' => $phone,
        'CallBackURL' => env('MPESA_CALLBACK_URL'),
        'AccountReference' => 'GaragePayment',
        'TransactionDesc' => 'Payment for garage services',
    ];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $accessToken, 'Content-Type: application/json']);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($curl_post_data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);
    $curl_error = curl_error($curl);
    curl_close($curl);

    if ($curl_response === false) {
        \Log::error('CURL Error: ' . $curl_error);
        return back()->with('error', 'Network error: ' . $curl_error);
    }

    // Decode and log the response
    $response = json_decode($curl_response);
    \Log::info('M-Pesa STK Push Response: ' . json_encode($response));

    // Check if the response has a ResponseCode
    if (isset($response->ResponseCode)) {
        if ($response->ResponseCode == '0') {
            return back()->with('success', 'Payment initiated successfully. Please check your phone.');
        } else {
            return back()->with('error', 'Failed to initiate payment. Response Code: ' . $response->ResponseCode);
        }
    } else {
        // Log the response to understand the issue
        \Log::error('Unexpected response structure: ' . json_encode($response));
        return back()->with('error', 'Unexpected response from M-Pesa API. Please try again.');
    }
}
}
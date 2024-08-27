<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
  #nav-bar {
    list-style-type: none;
    display: flex;
    padding: 20px;
    margin: 0 auto;
    justify-content: center;
    text-align: center;
    margin-right: 30%;
    float: right;
  }
  
  #nav-bar li a {
    text-decoration: none;
    color: aliceblue;
    padding: 20px;
    width: 180px;
    background-color: #CCCC 30%;
  }
  
  #nav-bar li a:hover {
    background-color: #454141;
    border-radius: 40px;
  }

  #logincss {
    margin-right: 10px;
    color: aliceblue;
    padding: 20px;
    width: 180px;
    background-color: #CCCC 30%;
  }

  .nav-item {
    text-decoration: none;
    color: aliceblue;
    /* padding: 20px; */
    width: 180px;
    margin-right: 10px;
    height: 20px;
    
    background-color: #CCCC 30%;
  }
  
  @media screen and (max-width: 500px) {
    #nav-bar li a {
      float: none;
      display: block;
      width: 100%;
      text-align: left;
    }
  }
      </style>
</head>
<body>
  <nav id="nav-bar" >
    <li><a href="/home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="/maintenance">Account</a></li>
    <li><a href="/booking" >Booking</a></li>
    <li><a href="/contacts">Contact Us</a></li>
    <li><a href="/newpayment">Payment</a></li>

    @if (Route::has('login'))

      @auth
      <form method="POST" action="{{ route('logout') }}">
          @csrf

          <input type="submit" value="Logout">

      </form>
      @else
      <li class="nav-item">
        <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
      </li>

      <li class="nav-item">
        <a class="btn btn-success" href="{{ route('register') }}">Register</a>
      </li>
      @endauth

    @endif
    
   </nav>
    <!-- @yield('content') -->
</body>
</html>
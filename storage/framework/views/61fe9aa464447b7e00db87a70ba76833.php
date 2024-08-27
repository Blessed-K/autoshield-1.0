<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Payment Form</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/payment.css')); ?>">
    <script src="<?php echo e(asset('js/payment.js')); ?>"></script>
</head>
<body>
    <div class="container">
        <h2>Pay Now!</h2>
        <form action="/submit-payment" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="customer-name">Customer Name</label>
                <input type="text" id="customer_name" name="customer_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="vehicle-info">Vehicle Information</label>
                <input type="text" id="vehicle_info" name="vehicle_info" required>
            </div>
            <div class="form-group">
                <label for="parts">Parts Cost</label>
                <input type="text" id="parts_cost" name="parts_cost" maxlength="7" required>
            </div>
            <div class="form-group">
                <label for="services">Services Cost</label>
                <input type="text" id="services_cost" name="services_cost" maxlength="7" required>
            </div>
            <div class="form-group">
                <label for="total">Total Cost</label>
                <p id="total"></p>
                <input type="hidden" id="total_amount" name="total_amount">
                <div>
                    <button type="button" id="total-btn" onclick="totalCost()" >Total Cost</button>
                    
                </div>
            </div>
            <button id="pay-btn" type="submit" onclick="paymentSuccessful()"><b>Pay Now</b></button>
        </form>
    </div>
    <script src="<?php echo e(asset('js/payment.js')); ?>"></script>
</body>
</html>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\USER\OneDrive\Desktop\AUTOSHIELD 1.0\AUTOSHIELD 1.0\AutoShield\resources\views/payment.blade.php ENDPATH**/ ?>
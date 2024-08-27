<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .icon {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-wallet icon"></i>New Payment</h2>
        <form action="<?php echo e(route('newpayment.process')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required value="254">
            </div>
            <button type="submit"><i class="fas fa-check icon"></i>Pay Now</button>
        </form>
        <?php if(session('success')): ?>
        <script>
            window.onload = function() {
                alert("Success: <?php echo e(session('success')); ?>");
            };
        </script>
    <?php elseif(session('error')): ?>
        <script>
            window.onload = function() {
                alert("Error: <?php echo e(session('error')); ?>");
            };
        </script>
 <?php endif; ?>
</div>
</body>
</html><?php /**PATH C:\Users\Admin\Desktop\AUTOSHIELD 1.0\AutoShield\resources\views/newpayment.blade.php ENDPATH**/ ?>
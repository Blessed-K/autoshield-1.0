<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
       #nav-bar {
    list-style-type: none;
    display: flex;
    padding: 20px;
    margin-left: 40%;
    /* float: right; */
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
  <nav id="nav-bar">
    <li><a href="/home">Home</a></li>
    <li><a href="<?php echo e(url('/booking')); ?>">About</a></li>
    <li><a href="/services">Services</a></li>
    <li><a href="/booking" target="_blank">Booking</a></li>
    <li><a href="/contacts">Contact Us</a></li>
    <li><a href="/payment">Payment</a></li>
   </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\Users\Admin\Desktop\AUTOSHIELD\AutoShield\autoshield\resources\views/layout.blade.php ENDPATH**/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
  <link href="home/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
  
  
  <style>
   a,
   button,
   input,
   select,
   h1,
   h2,
   h3,
   h4,
   h5,
   * {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
       border: none;
       text-decoration: none;
       background: none;
   
       -webkit-font-smoothing: antialiased;
   }
   
   menu, ol, ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
   }
   </style>
  <title>Home</title>
</head>
<body>
  <div class="home-page" style="background: url(/images/home-page.png) center;background-size: cover;background-repeat: no-repeat;">
      <!-- <img class="garage-1" src="/images/Garage.png" /> -->
       <div id="background">
       <?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="autoshield-garage">AUTOSHIELD GARAGE</div>
            <button><a href="/booking"><div class="inquire-button"></div></a></button>
            <button><a href="/booking"><div class="inquire-now">Inquire Now! </div></a></button>
          <img
            class="which-brake-line-wrench-is-right-for-my-vehicle"
            src="/images/which-brake-line-wrench-is-right-for-my-vehicle0.png" />
          
            <!-- <?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
            
          
        </div>
    <div class="repairing-is-caring" id="about" >REPAIRING IS CARING</div>
    <div class="at-auto-shield-we-pride-ourselves-on-delivering-top-tier-automotive-services-our-expert-mechanics-ensure-that-every-vehicle-receives-meticulous-attention-and-high-quality-repairs-we-combine-state-of-the-art-technology-with-years-of-experience-to-keep-your-car-running-smoothly-and-reliably-trust-us-to-provide-exceptional-care-precision-and-dedication-for-all-your-automotive-needs">
      At AutoShield we pride ourselves on delivering top-tier automotive services.
      Our expert mechanics ensure that every vehicle receives meticulous attention
      and high-quality repairs. We combine state-of-the-art technology with years
      of experience to keep your car running smoothly and reliably. Trust us to
      provide exceptional care, precision, and dedication for all your automotive
      needs.
    </div>

      <!-- SERVICES OFFERED -->
       <?php echo $__env->make('services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <!-- services end -->
      
    <img class="garage-2-1" src="/images/garage-2-10.png" />
    <!-- <button><a href="/home"> <div class="rectangle-2"></div></a><button>
      <button><a href="/home"><div class="home">Home</div></a><button>
       <button><a href="#about"><div class="rectangle-3"></div></a></button>
         <button><a href="#about"><div class="about">About</div></a></button>
           <button><a href="/booking"><div class="rectangle-4"></div></a><button>
             <button><a href="/booking"><div class="booking">Booking</div></a><button>
          <button><a href="#services"><div class="rectangle-5"></div></a><button>
       <button><a href="#services"><div class="services">Services</div></a><button>
    <button><a href="#contact"><div class="rectangle-6"></div></a></button>
    <button><a href="#contact"> <div class="contact">Contact</div></a></button> -->

    
    <!-- <img
      class="free-vector-auto-repair-logos-1"
      src="/images/free-vector-auto-repair-logos-10.png"
    /> -->
    <div class="rectangle-8"></div>
   <a href="#"> <div class="notification">notification</div></a>
    <a href="/home"><div class="dahboard">dahboard</div></a>
    <a href="/booking"><div class="booking2">booking</div></a>
   <a href="#services"> <div class="services2">services</div></a>
   <a href="#about"> <div class="about-us">about us</div></a>
    <a href="#"><div class="company">company</div></a>
    <a href="</a>"><div class="privacy">Privacy</div></a>
   <a href="#"> <div class="security">security</div></a>
   <a href="#"><div class="terms-of-service">Terms of service</div></a>
    <div class="copyright-2024-all-rights-reserved">
      @copyright 2024 all rights reserved
    </div>
    <img class="mail" src="/images/mail0.png" />
    <a href="https://mail.google.com/mail/u/0/#inbox" target="blank"><div class="autoshied-gmail-com">autoshied@gmail.com</div></a>
    <img class="phone" src="/images/phone0.png" />
    <div class="_254723456789">+254723456789</div>
    <img class="location" src="/images/location0.png" />
    <div class="nairobi-kenya">Nairobi,Kenya</div>
    <a href="https://www.instagram.com/accounts/login/?hl=en" target="blank"><img class="instagram" src="/images/instagram0.png" /></a>
    <a href="https://www.tiktok.com/explore" target="blank"><img class="tiktok" src="/images/tiktok0.png" /></a> 
    <a href="https://web.whatsapp.com/" target="blank"><img class="whatsapp" src="/images/whatsapp0.png" /></a>
    <a href="https://x.com/?lang-en&mx=2" target="blank"><img class="x" src="/images/x0.png" /></a>
    <div class="contact-us">contact us</div>
  </div>
  
</body>
</html><?php /**PATH C:\Users\USER\OneDrive\Desktop\DENG\autoShield_final\AutoShield\resources\views/home.blade.php ENDPATH**/ ?>
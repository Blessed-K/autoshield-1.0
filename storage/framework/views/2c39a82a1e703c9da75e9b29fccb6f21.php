

<?php $__env->startSection('title'); ?>
    Booking
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<head>
  <link rel="stylesheet" href="/css/booking.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    
<body>


  <form action="<?php echo e(route('booking.store')); ?>" id="book" method="POST">
    <div>
      <h1>Book a slot with us!</h1>
      <div id="left">
        <?php echo csrf_field(); ?>
        <input type="text" id="name" name="c_name" placeholder="Your name *" required>
        <input type="email" id="email" name="email" placeholder="Your email *" required>
        <input type="tel" id="phone" name="phone" placeholder="Your phonenumber *" required>
      </div>
      <div id="right">
        <!-- <input type="date" id="date" " required> -->
        <input placeholder="Preferred date of appointment *" type="text" name="date_of_appointment" onfocus="(this.type='date')" id="date"  min="2024-06-20" max="2024-12-31" required> 
        <!-- <input type="time" id="time" placeholder="Preferred time of appointment *" required> -->
        <select onfocus="" placeholder="Preferred time of appointment *" name="time_of_appointment" id="time" required>
          <option value="">Preferred time of appointment *</option>
          <option value="08:00 AM">08:00 AM</option>
          <option value="09:00 AM">09:00 AM</option>
          <option value="10:00 AM">10:00 AM</option>
          <option value="11:00 AM">11:00 AM</option>
          <option value="12:00 PM">12:00 PM</option>
          <option value="01:00 PM">01:00 PM</option>
          <option value="02:00 PM">02:00 PM</option>
          <option value="03:00 PM">03:00 PM</option>
          <option value="04:00 PM">04:00 PM</option>
          <option value="05:00 PM">05:00 PM</option>
        </select>
 
        <input type="text" name="service" id="service" placeholder="Type of service" required>
      </div>
    </div>

    <div class="btn-container">
      <button type="submit">SUBMIT</button>
    </div>
  </form>

</body>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Desktop\AUTOSHIELD 1.0\AUTOSHIELD 1.0\AutoShield\resources\views/booking.blade.php ENDPATH**/ ?>
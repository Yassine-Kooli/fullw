<?php 
$title = 'Login';
require_once 'includes/header.php';
?>
<h1 class="text-center text-success">You have been Registered</h1>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$speciality = $_POST['speciality'];
$email = $_POST['email1'];
$phone = $_POST['phone'];


echo '<h1 class="text-center">Welcome '.$firstname.' </h1>';
?>
<!-- USER CARD-->

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $firstname." ".$lastname?></h5>
    <p class="card-text"><?php echo $speciality?></p>
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item">Email: <?php echo $email?></li>
    <li class="list-group-item">Date Of Birth: <?php echo $dob?></li>
    <li class="list-group-item">Contact: <?php echo $phone?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
     <div id="footer">
     <?php echo "© ".date('Y')." Copyright All Rights Reserved" ;?>
     </div>
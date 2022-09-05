<?php 
$title = 'Login';
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  
  if (isset($_POST['submit'])) {
    //extract Values and declaire varriables
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $dob = $_POST['dob'];
      $speciality = $_POST['speciality'];
      $email = $_POST['email'];
      $phone = $_POST['phone'] ;
      $isSuccess = $crud-> insert($firstname,$lastname,$dob,$speciality,$email,$phone);
      if ($isSuccess) {
        //echo '<h1 class="text-center text-success">You have been Registered</h1>';
        include "includes/successMessage.php";
      }else {
        //echo '<h1 class="text-center text-danger">There was an error</h1>';
        include "includes/errorMessage.php";
      }
  
  }
  echo '<h1 class="display-5 text-center pt-xxl-2">Welcome '.$firstname.' </h1>';
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

    <!--<div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>-->

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
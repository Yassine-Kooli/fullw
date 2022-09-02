<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';
?>
<h1 class="text-center">Registration Form </h1>
<form method="post" action="login.php">
<div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname">
</div>
<div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname">
</div>
<div class="form-group">
       <label for="dob">Date Of Birth</label>
       <input type="text" class="form-control" id="dob" name="dob">
</div>
<div class="form-group">
        <label for="speciality">Speciality</label>
           <select multiple class="form-control" id="speciality" name="speciality">
            <option value="1">Database Admin</option>
            <option value="2">Software Developer</option>
            <option>Web Developer</option>
            <option>Others...</option>
        </select>
<div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text"  id="phone" name="phone">
</div>
<br>
<button type="submit" name="submit" class="btn btn-outline-primary btn-lg col-12">Submit</button>
</form>
<br>
<?php require_once 'includes/footer.php'; ?>


   
<?php 
         $title = 'Index';

        require_once 'includes/header.php';
        require_once 'db/conn.php';

        $results = $crud->getSpecialities();
?>
<section>
        <div class="container">
                <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                                <!--div of this image to be able to put it in the midle-->
                <div class="wrap d-md-flex">
                                        <div class="img" style="background-image: url(images/space-2.jpg);">     
                                        </div>
                               
                                <!--div of this image to be able to put it in the midle-->
                                <div class="login-wrap p-4 p-md-5">
                                        <div class="d-flex">
                                                <div class="w-100">
                                                        <h3 class="mb-4">Sign up</h3>
                                                </div>
                                        </div>
                                        <form method="post" action="login.php">
                                                <div class="form-group">
                                                        <label for="firstname">First Name</label>
                                                        <input required type="text" class="form-control" id="firstname" name="firstname">
                                                </div>
                                                <div class="form-group">
                                                        <label for="lastname">Last Name</label>
                                                        <input required type="text" class="form-control" id="lastname" name="lastname">
                                                </div>
                                                <div class="form-group">
                                                        <label for="dob">Date Of Birth</label>
                                                        <input type="text" class="form-control" id="dob" name="dob">
                                                </div>
                                                <div class="form-group">        
                                                        <label for="speciality">Speciality</label>
                                                        <select class="form-select" aria-label="Default select example" id="speciality" name="speciality">
                                                        <option selected>Choose your speciality</option>
                                                                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                                                                        <option value="<?php echo $r['speciality_id']?>"><?php echo $r['name']?></option><?php }?>
                                                                        
                                                        </select>
                                                                <div class="form-group">
                                                                        <label for="email">Email address</label>
                                                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                                </div>
                                                                <div class="custom-file">
                                                                        <input type="file" accept="image/*"  class="custom-file-input" id="avatar" name="avatar">
                                                                        <label class="custom-file-label">Chose your picture</label>
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="form-group">
                                                                        <label for="phone">Contact Number :</label>
                                                                        <input required type="text"  id="phone" name="phone" class="form-control">
                                                                        <small id="contactHelp" class="form-text text-muted">We'll never share your phone number with anyone.</small>

                                                                </div>
                                                                <br>
                                                                <button type="submit" name="submit" class="btn btn-outline-success btn-lg col-12">Register Now!</button>
                                        </form>

                                </div>
                </div>
        </div>
</div>
</section>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
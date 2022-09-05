<?php 
         $title = 'Edit Form';

        require_once 'includes/header.php';
        require_once 'db/conn.php';

        $results = $crud->getSpecialities();

        if (!isset($_GET['id'])) {
            //echo "<h1>ERROR!</h1>";
            include "includes/errorMessage.php";
            header("location: viewrecords.php");

        }else {
            $id = $_GET['id'];
            $attendee = $crud->getFormDetails($id);
        
?>



<h1 class="text-center">Edit Form</h1>
<form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['userid'];?>"/>
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $attendee['firstname'];?>">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $attendee['lastname'];?>">
    </div>
    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $attendee['dateofbirth'];?>">
    </div>
    <div class="form-group">
        <label for="speciality">Area Of expertise </label>
        <select multiple class="form-control" id="speciality" name="speciality">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['speciality_id']?>">
                <?php echo $r['name']?>
            </option>
            <?php }?>
        </select>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $attendee['email'];?>">
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text"  id="phone" name="phone" value="<?php echo $attendee['contact'];?>">
        </div>
        <br>
        <a href="viewrecords.php" class="btn btn-default">Back To List</a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>

<?php }?>








<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
<?php 
 require_once 'db/conn.php';

if (isset($_POST['submit'])) {

//extract Values and declaire varriables
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$speciality = $_POST['speciality'];
$email = $_POST['email'];
$phone = $_POST['phone'] ;
    //calling the crud function
    $result = $crud->editForm($id,$firstname,$lastname,$dob,$speciality,$email,$phone);
    //redirect to index.php
    if ($result) {
            header("location: viewrecords.php");
    }
    else{
        echo "error";
    }

}else {
    "error";
}

?>





<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
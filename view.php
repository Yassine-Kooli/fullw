<?php 
    $title = 'Records';

    require_once 'includes/header.php';
    require_once 'db/conn.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $crud->getFormDetails($id);
    }else {
        echo "<h1>please check details and try again</h1>";
    }
 
?>
<div class="d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname']." ".$result['lastname']; ?></h5>
            <p class="card-text"><?php echo $result['speciality_id']?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Email: <?php echo $result['email']?></li>
            <li class="list-group-item">Date Of Birth: <?php echo $result['dateofbirth']?></li>
            <li class="list-group-item">Contact: <?php echo $result['contact']?></li>
        </ul>
    </div>
</div>
<br>
<div class="d-flex justify-content-center">
    <div>
        <a href="viewrecords.php" class="btn btn-info">Back To List</a>
        <a href="edit.php?id=<?php echo $result['userid'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['userid'] ?>" class="btn btn-danger">Delete</a>
    </div>
</  div>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

<?php 
    $title = 'All Records';

    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
?>

<html>
    <div>
<a href="viewrecords.php" class="btn btn-info">Back To List</a>
</div>
<h1><b><echo><?= $data ?></echo></b></h1>
</html>

  


<br>
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
<br>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

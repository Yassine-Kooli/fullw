<?php 
    $title = 'Records';

    require_once 'includes/header.php';
    require_once 'db/conn.php';
//result from get specialities funcion in CRUD class
    $results = $crud->getForms();  
?>
<table class ="table table-hover">
        <tr>
            <th>#ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Speciality</th>
            <th>Action</th>
        </tr>

    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $r['userid'] ?></td>
                <td><?php echo $r['firstname']?></td>
                <td><?php echo $r['lastname']?></td>
                <td><?php echo $r['name']?></td>
                    <td>
                        <a href="view.php?id=<?php echo $r['userid'] ?>" class="btn btn-info">View</a>
                        <a href="edit.php?id=<?php echo $r['userid'] ?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['userid'] ?>" class="btn btn-danger">Delete</a>
                    
                    </td>
            </tr>
            
    <?php }?>  
</table>
<div class="mx-auto">
<a href="viewAllRecords.php" class="btn btn-success">View All Records</a>
<a onclick="return confirm('Are you sure you want to delete all your records?');" href="#" class="btn btn-danger">Delete All</a>                     
</div>

<br>
<br>
<?php require_once 'includes/footer.php'; ?>
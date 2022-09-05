<?php 
    $title = 'Records';

    require_once 'includes/header.php';
    require_once 'db/conn.php';
//result from get specialities funcion in CRUD class
    $results = $crud->getForms();  
?>


<table class ="table">
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
                        <a href="view.php?id=<?php echo $r['userid'] ?>" class="btn btn-primary">View</a>
                        <a href="edit.php?id=<?php echo $r['userid'] ?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['userid'] ?>" class="btn btn-danger">Delete</a>
                        

                    </td>

            </tr>
            
    <?php }?>  
</table>














<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
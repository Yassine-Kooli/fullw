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
            <th>Dte Oh birth</th>
            <th>Speciality</th>
            <th>Email Address</th>
            <th>Phone Number</th>
        </tr>

    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $r['userid'] ?></td>
                <td><?php echo $r['firstname']?></td>
                <td><?php echo $r['lastname']?></td>
                <td><?php echo $r['dateofbirth']?></td>
                <td><?php echo $r['name']?></td>
                <td><?php echo $r['email']?></td>
                <td><?php echo $r['contact']?></td>
            </tr>
            
            <?php }?>  
</table>














<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
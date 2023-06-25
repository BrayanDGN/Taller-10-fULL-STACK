<?php
    include "./controller/userController.php";
?>

<table class ="table__container">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cédula</th>
    </tr>

    <?php 
        $users = getUsers ();
        foreach ( $users as $eachOne ){ ?>
        <tr>
            <td><?php echo $eachOne -> getId ();?> </td>
            <td><?php echo $eachOne -> getName ();?>  </td>
            <td><?php echo $eachOne -> getLastName (); ?> </td>
            <td><?php echo $eachOne -> getIdNumber (); ?> </td>
        </tr>
    <?php }?>
</table>
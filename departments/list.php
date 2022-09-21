<?php
include '../genral/env.php';
include '../genral/functions.php';
include '../shared/header.php';
include '../shared/nav.php';
$select = "SELECT * FROM `department`";
$s = mysqli_query($connication,  $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM department WHERE id =$id ";
    mysqli_query($connication, $delete);
    header("location:/task-1/departments/list.php");
}
?>
<h1 class="text-center text-info mt-5"> list Dempartments</h1>
<div class="container">
        <div>
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <th> id </th>
                        <th> Name </th>
                        <th>actions</th>
                    </tr>
                    <?php foreach ($s as $data) { ?>
                        <tr id="return">
                            <td><?= $data['id'] ?> </td>
                            <td><?= $data['name'] ?> </td>
                            <td>
                                <a class="btn btn-warning" href="/task-1/departments/update.php?edit=<?= $data['id'] ?>"> Update </a>
                                <a onclick="return confirm('are u sure !!')" class="btn btn-danger" href="/task-1/departments/list.php?delete=<?= $data['id'] ?>"> Delete </a> 
                            </td>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>

    </div>


<?php

include '../shared/footer.php'
?>
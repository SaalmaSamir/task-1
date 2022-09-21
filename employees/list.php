<?php
include '../genral/env.php';
include '../genral/functions.php';
include '../shared/header.php';
include '../shared/nav.php';
$select = "SELECT * FROM `joindata2`";
$s = mysqli_query($connication,  $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE  FROM `employees` WHERE id=$id ";
    mysqli_query($connication, $delete);
    header("location:/task-1/employees/list.php");
}
?>
<h1 class="text-center text-info mt-5"> list Employees</h1>
<div class="container">
        <div>
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <th> id </th>
                        <th> Name </th>
                        <th> Salary </th>
                        <th> Phone </th>
                        <th> Dempartment </th>
                        <TH> action</TH>
                    </tr>
                    <?php foreach ($s as $data) { ?>
                        <tr id="return">
                            <td><?= $data['emp_id'] ?> </td>
                            <td><?= $data['emp_name'] ?> </td>
                            <td><?= $data['salary'] ?> </td>
                            <td><?= $data['city'] ?> </td>
                            <td><?= $data['dep_name'] ?> </td>
                            <td>
                                <a class="btn btn-warning" href="/task-1/employees/update.php?edit=<?= $data['emp_id'] ?>"> Update </a>
                                <a onclick="return confirm('are u sure !!')" class="btn btn-danger" href="/task-1/employees/list.php?delete=<?= $data['emp_id'] ?>"> Delete </a> 
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
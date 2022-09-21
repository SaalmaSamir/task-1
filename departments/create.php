<?php
include '../genral/env.php';
include '../genral/functions.php';
include '../shared/header.php';
include '../shared/nav.php';

if (isset($_POST['send'])) {
    $name = $_POST["depName"];
    $insert = "INSERT INTO `department` values(null,'$name')";
    $insertEmployeeCheck =  mysqli_query($connication, $insert);
    header("location:/task-1/departments/list.php");
}
?>

<h1 class="text-center fw-light mt-4 text-info"> Add New Departmentnt </h1>
<div class="container col-6">
    <div class="card m-4">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Department Name</label>
                    <input class="form-control" type="text" name="depName">
                </div>
                <button name="send" class="btn btn-info"> Send </button>
            </form>
        </div>
    </div>
</div>

<?php

include '../shared/footer.php';
?>
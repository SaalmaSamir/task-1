<?php
include '../genral/env.php';
include '../genral/functions.php';
include '../shared/header.php';
include '../shared/nav.php';



if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $selectEmployee = "SELECT `name` FROM `department` where id =$id ";
    $employee =   mysqli_query($connication, $selectEmployee);
    $row = mysqli_fetch_assoc($employee);
    if (isset($_POST['update'])) {
        $name = $_POST["depName"];
        $update = "UPDATE `department` SET name ='$name' where id=$id";
        mysqli_query($connication, $update);
        header("location:/task-1/departments/list.php");
    }
}
?>

<h1 class="text-center text-light"> Update Departments </h1>
<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Department Name</label>
                    <input class="form-control" value="<?=  $row['name'] ?>" type="text" name="depName">
                </div>
                <button name="update" class="btn btn-info"> update </button>
            </form>
        </div>
    </div>
</div>
<?php

include '../shared/footer.php';
?>
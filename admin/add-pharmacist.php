<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/side.php";
include "../general/env.php";

$select = "SELECT * FROM `branches`";
$branch = mysqli_query($connect, $select);

if (isset($_POST['addPharmacist'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $branch_id = $_POST['branch_id'];
    $insert = "INSERT INTO `pharmacist` VALUES (NULL , '$name' , $phone , '$email' , '$password' , $branch_id )";
    $i = mysqli_query($connect, $insert);
}
if (isset($_SESSION['pharmacist'])) {
} else {
    header('location:/pharmacistPanel/pages-error-404.php');
}
?>

<h5 class="text-center display-3"> ADD PHARMACIST </h5>

<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label>Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Phone</label>
                    <input name="phone" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email address</label>
                    <input name="email" type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Branches : </label>
                    <select name="branch_id" class="form-control">
                        <?php foreach ($branch as $data) { ?>
                            <option value="<?php echo $data['branch_id']; ?>"> <?php echo $data['location']; ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-success" name="addPharmacist">Add Pharmacist</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
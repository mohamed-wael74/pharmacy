<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/side.php";
include "../general/env.php";

$select = "SELECT * FROM `admin`";
$admin = mysqli_query($connect, $select);

if (isset($_POST['addCategory'])) {
    $category_name = $_POST['category_name'];
    $admin_Id = $_POST['admin_Id'];
    $insert = "INSERT INTO `categories` VALUES (NULL , '$category_name' , $admin_Id)";
    $i = mysqli_query($connect, $insert);
}
?>
<p class="text-center display-6 "> ADD PAGE </p>
<div class="mt-5">
    <h5 class="text-center display-6 mt-5"> ADD GATEGORY </h5>
</div>



<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" name="category_name" class="form-control">
                    <div class="form-text">Set a category you need</div>
                </div>
                <div class="mb-3">
                    <label for=""> Admins : </label>
                    <select name="admin_Id" class="form-control">
                        <?php foreach ($admin as $data) { ?>
                            <option value="<?php echo $data['id']; ?>"> <?php echo $data['name']; ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-success" name="addCategory">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
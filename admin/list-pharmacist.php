<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/side.php";
include "../general/env.php";

$select = "SELECT * FROM `pharmacist`";
$s = mysqli_query($connect, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `pharmacist` WHERE id = $id";
    $d = mysqli_query($connect, $delete);
    header('location:/Pharmacy/pharmacistPanel/admin/list-pharmacist.php');
}
if (isset($_SESSION['pharmacist'])) {
} else {
    header('location:/Pharmacy/pharmacistPanel/pages-error-404.php');
}
?>
<h1 class="text-center display-3"> Pharmacists </h1>
<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <table class="table table-dark ">
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ACTION</th>
                </tr>
                <?php foreach ($s as $data) { ?>
                    <tr>
                        <td> <?php echo $data['name'] ?> </td>
                        <td> <?php echo $data['email'] ?></td>
                        <td> <?php echo $data['phone'] ?></td>
                        <td> <a onclick="return confirm('Are You Sure ?')" class="btn btn-danger" href="/Pharmacy/pharmacistPanel/admin/list-pharmacist.php?delete=<?php echo $data['id'] ?>  "> Delete </a> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/side.php";
include "../general/env.php";
?>
<p class="text-center display-3"> ORDERS </p>
<h1 class="text-center display-3"> ORDERS </h1>
<div class="container col-md-8">
    <div class="card">
        <div class="card-body">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
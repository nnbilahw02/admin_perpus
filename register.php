<?php
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Admin Perpustakaan SMPN 5 Banyuwangi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="code.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Confirmasi">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="registerbtnb " class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Datatable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-wight-bold text-primary"> Profil Admin Perpustakaan
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Admin Perpustakaan
                </button>
            </h6>
        </div>
    </div>

</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Asrih</td>
                    <td>********</td>
                    <td>******</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
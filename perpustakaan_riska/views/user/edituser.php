<?php 
    @$id = $_GET['id'];

    $sql    = "select * from tabel_user where id_user=$id";
    $show   = $db->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

  
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Pegawai</h4>
                        <br>
                        <form action="model/user/prosesupdateuser.php" method="POST">
                            <input type="hidden" name="id_user" id="id_user"
                                value="<?php echo $hasil['id_user']?>">
                            <table class="table">
                                <tr>
                                    <td>Id Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_pegawai" id="id_pegawai"
                                            value="<?php echo $hasil['id_pegawai']?>"></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="username" id="username"
                                            value="<?php echo $hasil['username']?>"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="password" id="password"
                                            value="<?php echo $hasil['password']?>"></td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="level" id="level"
                                            value="<?php echo $hasil['level']?>"></td>
                                </tr>
                                <tr>
                                    <td>Dibuat Pada</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="dibuatpada" id="dibuatpada"
                                            value="<?php echo $hasil['dibuatpada']?>"></td>
                                </tr>
                               
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-warning" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
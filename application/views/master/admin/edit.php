    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">edit data admin</h1>
        </div>
        <div class="card shadow mb-4">
           
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">
                    <br>
                    <?php foreach ($admin as $psn) { ?>

                        <form style="margin-bottom:25px;" action=" <?php echo base_url() . 'master/update_admin/' . $psn->id_admin; ?>" method="POST" class=" col-lg-12">
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text0" name="nama" class="form-control" value="<?php echo $psn->nama ?>">
                            </div>
                            <div class="form-group">
                                <label>usernamet</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $psn->username ?>">
                            </div>

                            <div class="form-group">
                                <label>no telepon</label>
                                <input type="text" name="no_telp" class="form-control" value="<?php echo $psn->no_telp ?>">
                            </div>
                            <button type="reset" class="btn btn-primary">reset</button>
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </form>
                    <?php  } ?>
                </div>

            </div>
        </div>




        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    
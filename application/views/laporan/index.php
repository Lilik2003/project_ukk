        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h3>Laporan Pengaduan</h3>

          <a style="background-color:background: rgb(38,225,233);
background: linear-gradient(270deg, rgba(38,225,233,1) 0%, rgba(0,0,0,1) 93%);" href="<?= base_url('laporan/add_laporan'); ?>" class="btn btn-primary"><i style="color:white;" class="fa fa-plus"></i> Tambah Laporan pengaduan</a>
          <?php if (empty($laporan)) : ?>
            <div class="alert alert-info mt-3">
              Belum Ada Laporan Yang Anda Kirim
            </div>
          <?php endif; ?>

          <div class="row">
            <?php foreach ($laporan as $l) : ?>
              <div class="col-lg-3">
                <div class="card shadow my-2">
                  <img src="<?= base_url('asset/upload/') . $l->foto; ?>">
                  <div class="card-body">
                    <p><?= $l->isi_laporan; ?></p>
                    <small class="text-muted"><?php date_default_timezone_set('Asia/Jakarta');
                                              echo date('D,d M Y H:i:s', $l->id_pengaduan); ?></small>
                    <div class="row justify-content-end mt-2 mr-1">
                      <a href="<?= base_url('laporan/detail/') . md5($l->id_pengaduan); ?>" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">


      
          <!-- notification -->
          <?php if ($this->session->userdata('level') == 1): ?>
            <li class="nav-item dropdown no-arrow mx-1">

              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">
                  <?= $this->db->get_where('tbl_pengaduan', ['status_notif' => 0])->num_rows(); ?>
                </span>
              </a>

              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  notifikasi
                </h6>
                <?php foreach ($notif as $n) { ?>
                  <?php if ($n->status_notif == 0): ?>
                    <a style="padding-right:40px;" id="status-btn" class="dropdown-item d-flex align-items-center"
                      href="<?= base_url('pengaduan/status_notif/') . md5($n->id_pengaduan); ?>">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <img src="<?= base_url('asset/upload/') . $n->foto; ?>" alt="" width="49" height="40"
                            class="d-inline-block align-text-top">

                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">
                          <?= $n->tgl_pengaduan; ?>
                        </div>
                        <span class="font-weight-bold">
                          <?= $n->isi_laporan; ?>
                        </span>

                      </div>
                    </a>
                  <?php endif; ?>
                <?php }
                ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('pengaduan') ?>">tampilkan
                  semua aduan</a>
              </div>
            </li>
          <?php endif; ?>
          <!-- end of notification -->
          <!-- notification -->
          <?php if ($this->session->userdata('level') == 2 ): ?>
            <li class="nav-item dropdown no-arrow mx-1">

              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">
                  <?= $this->db->get_where('tbl_pengaduan', ['status_notif' => 0])->num_rows(); ?>
                </span>
              </a>

              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  notifikasi
                </h6>
                <?php foreach ($notif as $n) { ?>
                  <?php if ($n->status_notif == 0): ?>
                    <a style="padding-right:40px;" id="status-btn" class="dropdown-item d-flex align-items-center"
                      href="<?= base_url('pengaduan/status_notif/') . md5($n->id_pengaduan); ?>">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <img src="<?= base_url('asset/upload/') . $n->foto; ?>" alt="" width="49" height="40"
                            class="d-inline-block align-text-top">

                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">
                          <?= $n->tgl_pengaduan; ?>
                        </div>
                        <span class="font-weight-bold">
                          <?= $n->isi_laporan; ?>
                        </span>

                      </div>
                    </a>
                  <?php endif; ?>
                <?php }
                ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('pengaduan') ?>">tampilkan
                  semua aduan</a>
              </div>
            </li>
          <?php endif; ?>
          <!-- end of notification -->

          <div class="topbar-divider d-none d-sm-block"></div>
       
          <li class="nav-item dropdown no-arrow">
          <?php if ($this->session->userdata('level') == 2): ?>
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">

  <span style="margin-right:10px;" class="text-gray-600">
                <?php if ($pengguna['level'] == 1): ?>
                  selamat datang admin
                <?php else: ?>
                <?php endif; ?>
                <?php if ($pengguna['level'] == 2): ?>
                  selamat datang petugas
                <?php else: ?>
                <?php endif; ?>
              </span>
  <img class="img-profile rounded-circle" src="<?= base_url('asset/img/images.png'); ?>">
</a>
<?php endif; ?>
          <?php if ($this->session->userdata('level') == 1): ?>
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">

  <span style="margin-right:10px;" class="text-gray-600">
                <?php if ($pengguna['level'] == 1): ?>
                  selamat datang admin
                <?php else: ?>
                <?php endif; ?>
                <?php if ($pengguna['level'] == 2): ?>
                  selamat datang petugas
                <?php else: ?>
                <?php endif; ?>
              </span>
  <img class="img-profile rounded-circle" src="<?= base_url('asset/img/images.png'); ?>">
</a>
<?php endif; ?>
<!-- Dropdown - User Information -->
<div style="background-color:black;" class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">


    <div  class="dropdown-divider"></div>
    <?php if ($this->session->userdata('level')): ?>
      <a class="dropdown-item" href="<?= base_url('admin/edit'); ?>">
      <?php elseif ($this->session->userdata('nik')): ?>
        <a class="dropdown-item" href="<?= base_url('user/edit'); ?>">
        <?php endif; ?>
        <i class="fas fa fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
        <span style="color:white;">Edit Profile</span></a>

      <div class="dropdown-divider"></div>



      <a style="color:white;" class="dropdown-item logout" href="<?= base_url('auth/logout'); ?>" data-toggle="modal"
        data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>

</div>

</li>


      </ul>

    </nav>
    <!-- End of Topbar -->
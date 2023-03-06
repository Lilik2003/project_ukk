<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h3>Management Data Masyarakat</h3>

	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-info">
				<strong>Note : </strong> Jika anda menghapus data masyarakat maka data pengaduan dan data tanggapan
				dengan NIK yang sama akan ikut terhapus.
			</div>
			<div class="card shadow">
				<div class="card-body">
					<table class="table table-striped table-bordered" id="myTable">
						<thead style="background: rgb(38,225,233);
background: linear-gradient(270deg, rgba(38,225,233,1) 0%, rgba(0,0,0,1) 93%);">
							<tr style="color:white;">
								<th>No</th>
								<th>Nama</th>
								<th>NIK</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($masyarakat as $m) { ?>
								<tr>
									<td>
										<?= $i++; ?>
									</td>
									<td>
										<?= $m->nama; ?>
									</td>
									<td>
										<?= $m->nik; ?>
									</td>
									<td>
										<?php if ($m->aktif == 1): ?>
											Aktif
										<?php else: ?>
											Nonaktif
										<?php endif; ?>
									</td>
									<td>
										<a href=" <?= base_url('master/del_masyarakat/') . $m->nik; ?>"
											class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
										<?php if ($m->aktif == 1): ?>
											<a href="<?= base_url('master/nonaktif_masyarakat/') . $m->nik; ?>"
												class="btn btn-secondary btn-sm"><i class="fa fa-power-off"></i></a>
										<?php else: ?>
											<a href="<?= base_url('master/aktif_masyarakat/') . $m->nik; ?>"
												class="btn btn-primary btn-sm"><i class="fa fa-power-off"></i></a>
										<?php endif; ?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
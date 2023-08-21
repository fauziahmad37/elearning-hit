

<section class="explore-section section-padding" id="section_2">
	<div class="container mt-5">
		<div class="col-12 text-center">
			<h4 class="mb-4">Profile Saya</h4>
		</div>



		<div class="col-12 mt-5 border rounded p-5">

			<div class="d-flex align-items-start">
				<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<button class="nav-link active" id="v-pills-info-dasar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-info-dasar" type="button" role="tab" aria-controls="v-pills-info-dasar" aria-selected="true">Informasi Dasar</button>
					<button class="nav-link" id="v-pills-wali-akun-tertaut-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wali-akun-tertaut" type="button" role="tab" aria-controls="v-pills-wali-akun-tertaut" aria-selected="false">Wali Akun Tertaut</button>
					<button class="nav-link" id="v-pills-change-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-change-password" type="button" role="tab" aria-controls="v-pills-change-password" aria-selected="false">Kata Sandi</button>
				</div>

				<div class="tab-content w-100 ps-5" id="v-pills-tabContent" style="border-left: 1px;">
					<div class="tab-pane fade show active ms-4" id="v-pills-info-dasar" role="tabpanel" aria-labelledby="v-pills-info-dasar-tab" tabindex="0">
						
						<div class="user-img mb-5">
							<a href="#" class="d-block"><img src="<?= isset($user['profile_img']) ? base_url('assets/images/user/'.$user['profile_img']) : base_url('assets/images/user.png') ?>" alt="" width="100"><br></a>
							<a href="#" class="btn btn-sm btn-secondary mt-2" id="change-avatar">Change Foto</a>
						</div>

						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="full_name" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" id="full_name" name="full_name" disabled>
						</div>

						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="nick_name" class="form-label">Nama Paggilan</label>
							<input type="text" class="form-control" id="nick_name" name="nick_name" disabled>
						</div>

						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email">
							<span>Ini adalah alamat email utama Anda dan akan digunakan untuk mengirim email pemberitahuan</span>
						</div>

						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="location" class="form-label">Lokasi</label>
							<input type="text" class="form-control" id="location" name="location" disabled>
						</div>

						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="school" class="form-label">Sekolah</label>
							<input type="text" class="form-control" id="school" name="school" disabled>
						</div>

						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="phone" class="form-label">Nomor Telepon</label>
							<input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon">
						</div>
				
					</div>

					<div class="tab-pane fade" id="v-pills-wali-akun-tertaut" role="tabpanel" aria-labelledby="v-pills-wali-akun-tertaut-tab" tabindex="0">
						
						<div class="container">
							<table class="table">
								<thead class="">
									<tr>
										<th>Wali</th>
										<th>Email</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Wali 12</td>
										<td>wali@gmail.com</td>
										<td><i class="fa fa-edit"></i></td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
					
					<div class="tab-pane fade" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-change-password-tab" tabindex="0">
							
						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="password" class="form-label">Kata Sandi</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Masukan sandi saat ini">
						</div>
							
						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="new-password" class="form-label">Kata Sandi Baru</label>
							<input type="password" class="form-control" id="new_password" name="new_password" placeholder="Masukan sandi baru">
						</div>

						<div class="mb-3 col-lg-6 col-md-10 col-sm-12 col-xs-12">
							<label for="confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
							<input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Masukan kembali sandi">
						</div>

						<div class="mb-3">
							<button class="btn btn-success">Simpan Perubahan</button>
						</div>
					
				</div>
			</div>

		</div>

	</div>
	


	
	
</section>
        
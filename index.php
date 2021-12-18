<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col">
			<h2>List Pelanggan</h2>
		</div>
	</div>

	<?php $this->load->view('layouts/_alert') ?>

	<div class="row mt-3">
		<div class="col">
			<table class="table table-light text-center">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($users as $user) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $user['name'] ?></td>
							<td><?= $user['email'] ?></td>
							<td>
								<a href="<?= base_url('user/delete/' . $user['id']) ?>" class="btn btn-danger btn-sm">
									<i class="fas fa-trash"></i>
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
				<a href="<?= base_url('home') ?>" class="btn btn-secondary btn-sm">
						<i class="fas fa-arrow-left"></i>
						Kembali
					</a></div>
		</div>
	</div>
</div>

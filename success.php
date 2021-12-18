<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Checkout Success</h5>	
				<div class="card-body">
					<h4><strong>Order Number : <?= $content['invoice'] ?></strong></h4>
					<p>Terimakasih Atas Pembeliannya.</p>
					<br>
					<p>Prosedur Pembayaran :</p>
					<ol>
						<li>Transefer Melaluli ACCOUNT <strong>BCA 0123456789</strong> An. OlipStore</li>
						<li>Masukkan " Order Number " anda <strong><?= $content['invoice'] ?></strong></li>
						<li>Total Pembayaran : <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>

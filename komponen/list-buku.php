<div class="tab-pane fade show active" id="buku" role="tabpanel" aria-labelledby="buku-tab">

	<!-- tambah -->
	<a href="form_buku.php" class="btn btn-info text-white add-data mb-2">Tambah</a>

	<!-- tabel -->
	<div class="col table-responsive">

		<table class="table table-striped table-bordered responsive-utilities text-center">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID&nbspBuku</th>
					<th scope="col" style="min-width: 250px;">Nama&nbspBuku</th>
					<th scope="col">Kategori</th>
					<th scope="col" style="min-width: 100px;">Harga</th>
					<th scope="col">Stok</th>
					<th scope="col" style="min-width: 200px;">Penerbit</th>
					<th scope="col">Opsi&nbspPengeditan</th>
				</tr>
			</thead>

			<tbody>
				<?php

				$query= "SELECT * FROM buku";
				$result=mysqli_query($db, $query);
										// foreach
				$i=1;
				foreach ($result as $buku) {
					$harga_database = $buku['harga'];
					$format_harga = number_format($harga_database,0,",",".")
					?>
					<tr>
						<th scope="row"><?=$i++?></th>
						<td><?=$buku['id_buku']?></td>
						<td><?=$buku['nama_buku']?></td>
						<td class="text-capitalize"><?=$buku['kategori']?></td>
						<td>Rp <?=$format_harga?></td>
						<td><?=$buku['stok']?></td>
						<td><?=$buku['penerbit']?></td>
						<td>
							<a class="card-text text-decoration-none text-info fs-6" href="edit_buku.php?id_buku=<?=$buku['id_buku']?>"><i class="fas fa-edit"></i>
							</a>&nbsp | &nbsp

							<a class="card-text text-decoration-none text-danger fs-6" href="delete_buku.php?id_buku=<?=$buku['id_buku']?>" onclick="return confirm_delete()">
								<i class="fa fa-trash-alt"></i>
							</a>

						</td>
					</tr>

				<? } ?>

			</tbody>
		</table>

	</div>

</div>
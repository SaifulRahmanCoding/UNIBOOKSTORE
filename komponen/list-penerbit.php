<div class="tab-pane fade" id="penerbit" role="tabpanel" aria-labelledby="penerbit-tab">

	<!-- tambah -->
	<a href="form_penerbit.php" class="btn btn-info text-white add-data mb-2">Tambah</a>

	<!-- tabel -->
	<div class="col table-responsive">

		<table class="table table-striped table-bordered responsive-utilities text-center">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID&nbspPenerbit</th>
					<th scope="col" style="min-width: 200px;">Nama</th>
					<th scope="col" style="min-width: 200px;">Alamat</th>
					<th scope="col">Kota</th>
					<th scope="col">Telepon</th>
					<th scope="col">Opsi&nbspPengeditan</th>
				</tr>
			</thead>

			<tbody>
				<?php

				$query= "SELECT * FROM penerbit ORDER BY id_penerbit ASC";
				$result=mysqli_query($db, $query);
										// foreach
				$i=1;
				foreach ($result as $penerbit) {
					?>
					<tr>
						<th scope="row"><?=$i++?></th>
						<td><?=$penerbit['id_penerbit']?></td>
						<td><?=$penerbit['nama']?></td>
						<td><?=$penerbit['alamat']?></td>
						<td><?=$penerbit['kota']?></td>
						<td><?=$penerbit['telepon']?></td>
						<td>
							<a class="card-text text-decoration-none text-info fs-6" href="edit_penerbit.php?id_penerbit=<?=$penerbit['id_penerbit']?>"><i class="fas fa-edit"></i>
							</a>&nbsp | &nbsp

							<a class="card-text text-decoration-none text-danger fs-6" href="delete_penerbit.php?id_penerbit=<?=$penerbit['id_penerbit']?>" onclick="return confirm_delete()">
								<i class="fa fa-trash-alt"></i>
							</a>

						</td>
					</tr>

				<? } ?>

			</tbody>
		</table>

	</div>

</div>
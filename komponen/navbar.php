<!-- top header -->
<div id="top-header" class="py-3 text-primary">
	<div class="container">
		<!-- navbar brand -->
		<h1 class="m-0">UNIBOOKSTORE</h1>
	</div>
</div>

<!-- navbar -->
<nav class="navbar sticky-top navbar-expand bg-white navbar-light">

	<div class="container">

		<ul class="navbar-nav">

			<li class="nav-item">
				<a class="nav-link <? if($halaman == 'home'){echo 'active';} ?>" aria-current="page"  href="index.php">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <? if($halaman == 'admin'){echo 'active';} ?>" aria-current="page"  href="admin.php">ADMIN</a>
			</li>
			<li class="nav-item  me-4">
				<a class="nav-link <? if($halaman == 'pengadaan'){echo 'active';} ?>" aria-current="page"  href="pengadaan.php">PENGADAAN</a>
			</li>
		</ul>

	</div>

</nav>
<?php
require_once "config/init.php";
$pg = isset($_GET['pg']) ? $_GET['pg'] : "";
?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="asset/dist/img/user-icon.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?= $_SESSION['fullname']; ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li <?= checkMenu("dashboard", $pg); ?>>
				<a href="?pg=dashboard">
					<i class="fa fa-th"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="treeview <?= checkParentMenu($pg, 'master'); ?>">
				<a href="#">
					<i class="fa fa-tags"></i>
					<span>Data Master</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li <?= checkMenu("master_buku", $pg); ?>><a href="?pg=master_buku"><i class="fa fa-circle-o fa-fw"></i> <span>Master Buku</span></a></li>
					<li <?= checkMenu("master_rak", $pg); ?>><a href="?pg=master_rak"><i class="fa fa-circle-o fa-fw"></i> <span>Master Rak</span></a></li>
					<li <?= checkMenu("master_penulis", $pg); ?>><a href="?pg=master_penulis"><i class="fa fa-circle-o fa-fw"></i> <span>Master Penulis</span></a></li>
					<li <?= checkMenu("master_penerbit", $pg); ?>><a href="?pg=master_penerbit"><i class="fa fa-circle-o fa-fw"></i> <span>Master Penerbit</span></a></li>
					<li <?= checkMenu("master_anggota", $pg); ?>><a href="?pg=master_anggota"><i class="fa fa-circle-o fa-fw"></i> <span>Master anggota</span></a></li>
					<li <?= checkMenu("master_admin", $pg); ?>><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Master Admin</span></a></li>
				</ul>
			</li>
			<li class="treeview <?= checkParentMenu($pg, 'transaksi'); ?>">
				<a href="#">

					<i class="fa fa-exchange"></i>
					<!-- <i class="fa fa-shopping-basket"></i>  -->
					<span>Transaksi Peminjaman</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li <?= checkMenu("peminjaman", $pg); ?>><a href="?pg=peminjaman"><i class="fa fa-circle-o fa-fw"></i> <span>Peminjaman </span></a></li>
					<li <?= checkMenu("pengembalian", $pg); ?>><a href="?pg=pengembalian"><i class="fa fa-circle-o fa-fw"></i> <span>Pengembalian</span></a></li>
					<li <?= checkMenu("barang_masuk", $pg); ?>><a href="?pg=barang_masuk"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Masuk</span></a></li>
					<li <?= checkMenu("barang_keluar", $pg); ?>><a href="?pg=barang_keluar"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Keluar</span></a></li>
				</ul>
			</li>
			<!-- <ul class="treeview-menu">
				<li <?= checkMenu("order_pembelian", $pg); ?>><a href="?pg=order_pembelian"><i class="fa fa-circle-o fa-fw"></i> <span>Peminjaman </span></a></li>
				<li <?= checkMenu("pembelian", $pg); ?>><a href="?pg=pembelian"><i class="fa fa-circle-o fa-fw"></i> <span>Pengembalian</span></a></li>
				<li <?= checkMenu("penerimaan_pembelian", $pg); ?>><a href="?pg=penerimaan_pembelian"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Masuk</span></a></li>
				<li <?= checkMenu("pembayaran_pembelian", $pg); ?>><a href="?pg=pembayaran_pembelian"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Keluar</span></a></li>
			</ul> -->

			<!-- <li class="treeview">
				<a href="#">
					<i class="fa fa-cube"></i> <span>Form Barang</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Pokok Masuk</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Pokok Keluar </span></a></li>
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Jadi Masuk </span></a></li>
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Barang Jadi Keluar </span></a></li>
				</ul>
			</li> -->
			<!-- <li class="treeview">
				<a href="#">
					<i class="fa fa-arrow-right"></i> 
					<span>Transfer Stok</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Gudang ke Toko</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Toko ke Gudang</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Toko ke Toko</span></a></li>
				</ul>
			</li> -->

			<!-- <li class="treeview <?= checkParentMenu($pg, 'penjualan'); ?>">
				<a href="#">
					<i class="fa fa-shopping-cart"></i> 
					<span>Transaksi Penjualan</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li <?= checkMenu("order_penjualan", $pg); ?>><a href="?pg=order_penjualan"><i class="fa fa-circle-o fa-fw"></i> <span>Order Penjualan </span></a></li>
					<li <?= checkMenu("penjualan", $pg); ?>><a href="?pg=penjualan"><i class="fa fa-circle-o fa-fw"></i> <span>Penjualan </span></a></li>
					<li <?= checkMenu("pembayaran_penjualan", $pg); ?>><a href="?pg=pembayaran_penjualan"><i class="fa fa-circle-o fa-fw"></i> <span>Pembayaran Penjualan</span></a></li>
					<li <?= checkMenu("return_penjualan", $pg); ?>><a href="?pg=return_penjualan"><i class="fa fa-circle-o fa-fw"></i> <span>Return Penjualan </span></a></li>
				</ul>
			</li> -->

			<!-- <li class="treeview">
				<a href="#">
					<i class="fa fa-archive"></i> 
					<span>Stok Opname</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Stok Opname Toko</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o fa-fw"></i> <span>Stok Opname Gudang</span></a></li>
				</ul>
			</li> -->
			<!-- <li>
				<a href="#">
					<i class="fa fa-calendar"></i> <span>Kas Harian</span>
				</a>
			</li> -->
			<li class="treeview <?= checkParentMenu($pg, 'laporan'); ?>">
				<a href="#">
					<i class="fa fa-calendar"></i> <span>Laporan Perpustakaan</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<!--  "laporan_buku",
            "laporan_anggota",
            "laporan_peminjaman",
            "laporan_pengembalian",
            "laporan_barang_masuk",
            "laporan_barang_keluar" -->
				<ul class="treeview-menu">
					<li <?= checkMenu("laporan_buku", $pg); ?>><a href="?pg=laporan_buku"><i class="fa fa-circle-o fa-fw"></i> <span>Laporan Buku </span></a></li>
					<li <?= checkMenu("laporan_anggota", $pg); ?>><a href="?pg=laporan_anggota"><i class="fa fa-circle-o fa-fw"></i> <span>Laporan Anggota</span></a></li>
					<li <?= checkMenu("laporan_peminjaman", $pg); ?>><a href="?pg=laporan_peminjaman"><i class="fa fa-circle-o fa-fw"></i> <span>Laporan Peminjaman</span></a></li>
					<li <?= checkMenu("laporan_pengembalian", $pg); ?>><a href="?pg=laporan_pengembalian"><i class="fa fa-circle-o fa-fw"></i> <span>Laporan Pengembalian</span></a></li>
					<li <?= checkMenu("laporan_barang_masuk", $pg); ?>><a href="?pg=laporan_barang_masuk"><i class="fa fa-circle-o fa-fw"></i> <span>Laporan Barang Masuk</span></a></li>
					<li <?= checkMenu("laporan_barang_keluar", $pg); ?>><a href="?pg=laporan_barang_keluar"><i class="fa fa-circle-o fa-fw"></i> <span>Laporan Barang Keluar</span></a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
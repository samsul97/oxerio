<?php 
				if (isset($_GET ['page'])) 
				{
					if ($_GET ['page']== "dashboard")
					{
						include 'konten/dashboard.php';
					}
					elseif ($_GET['page']=="read_pembeli")
					{
						include 'konten/pembeli/tampil.php';
					}
					elseif ($_GET ['page']=="read_barang")
					{
						include 'konten/barang/tampil.php';
					}
					elseif ($_GET ['page']=="insert_barang")
					{
						include 'konten/barang/tambah.php';
					}
					elseif ($_GET ['page']=="update_barang")
					{
						include 'konten/barang/ubah.php';
					}
					elseif ($_GET ['page']=="detail_barang")
					{
						include 'konten/barang/detail.php';
					}
					elseif ($_GET ['page']=="read_kategori")
					{
						include 'konten/kategori/tampil.php';
					}
					elseif ($_GET ['page']=="insert_kategori")
					{
						include 'konten/kategori/tambah.php';
					}
					elseif ($_GET ['page']=="update_kategori")
					{
						include 'konten/kategori/ubah.php';
					}
					elseif ($_GET ['page']=="read_keranjang")
					{
						include 'konten/keranjang/tampil.php';
					}
					elseif ($_GET ['page']=="read_transaksi")
					{
						include 'konten/transaksi/tampil.php';
					}
					elseif ($_GET ['page']=="update_transaksi")
					{
						include 'konten/transaksi/ubah.php';
					}
					elseif ($_GET ['page']=="detail_transaksi")
					{
						include 'konten/detail/tampil.php';
					}
					elseif ($_GET ['page']=="read_laporan")
					{
						include 'konten/laporan/tampil.php';
					}
					elseif ($_GET ['page']=="insert_laporan")
					{
						include 'konten/laporan/tambah.php';
					}
					elseif ($_GET ['page']=="update_laporan")
					{
						include 'konten/laporan/ubah.php';
					}
					elseif($_GET['page']=="logout")
					{
						include'../logout.php';
					}
				}
				else{
					include 'konten/dashboard.php';
				}
				?>
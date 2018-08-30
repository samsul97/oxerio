<?php
error_reporting(0);
session_start();
include "koneksi.php";


if($_GET['act']=='input_barang')
{
	if(!$_POST['nama']) 
	{
		print "<script>
		alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=insert_barang\";
		</script>";
	} 
	else if(!preg_match("/^[a-zA-Z .]*$/", $_POST['nama']))
	{
		print "<script>
		alert(\"Nama Barang hanya boleh menggunakan huruf dan titik (.)!\");
		location.href = \"home.php?page=insert_barang\";
		</script>";
	}
	else 
	{
		$tgl=date('dmyhims');
		$tipe_file   = $_FILES['image']['type'];
		$lokasi_file = $_FILES['image']['tmp_name'];
		$gambar  = $_FILES['image']['name'];
		$ekstensi  = explode(".",$_FILES['image']['name']);
		$nama_file = 'Hebat_Art_'. round($tgl) . '.' . end($ekstensi);
		$cekbarang = mysqli_query($koneksi , "SELECT * FROM barang WHERE nama= '$_POST[nama]'");
		
		if(mysqli_num_rows($cekbarang) > 0) 
		{
			echo "Nama Sudah Terdaftar...!!";
		} 	
		else 
		{
			if($lokasi_file !== '')
			{
				if($tipe_file != 'image/jpeg' and 
					$tipe_file != 'image/jpg' and 
					$tipe_file != 'image/png' and 
					$tipe_file != 'image/bmp' and 
					$tipe_file != 'image/gif')
				{
					print "<script>
					alert(\"Proses gagal! File bukan gambar\");
					location.href = \"home.php?page=insert_barang\";
					</script>";
				}
				else
				{
					$save_file =move_uploaded_file($lokasi_file,"images/barang/$nama_file");
					$submit = mysqli_query($koneksi, "INSERT INTO barang (nama, id_kategori, berat, ukuran, harga, deskripsi, image) VALUES('$_POST[nama]', '$_POST[id_kategori]', '$_POST[berat]', '$_POST[ukuran]', '$_POST[harga]',  '$_POST[deskripsi]', '$nama_file')");
					if($submit) 
					{
						print "<script>
						alert(\"Barang berhasil diinputkan!\");
						location.href = \"home.php?page=read_barang\";
						</script>";
					} 
					else 
					{
						print "<script>
						alert(\"Proses gagal!\");
						location.href = \"home.php?page=insert_barang\";
						</script>";
					}
				}
			}
		}
	}
}
else if ($_GET['act']=='ubah_barang')
{

	if (!$_POST['nama'])
	{
		print "<script> alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=update_barang\";
		<script>";
	}
	else
	{
		$cek = mysqli_query($koneksi, "SELECT * FROM barang WHERE image = '$image'");
		$r = mysqli_fetch_array($cek);
		$tipe_file   = $_FILES['image']['type'];
		$lokasi_file = $_FILES['image']['tmp_name'];
		$gambar  = $_FILES['image']['name'];
		$ekstensi  = explode(".",$_FILES['image']['name']);
		$nama_file = 'Hebat_Art_'. round($tgl) . '.' . end($ekstensi);
		
		if($lokasi_file !== '')
		{
			unlink("images/barang/$r[image]");
			$save_file =move_uploaded_file($lokasi_file,"images/barang/$nama_file");
			$submit = mysqli_query($koneksi, "UPDATE barang SET nama='$_POST[nama]', id_kategori='$_POST[id_kategori]', berat='$_POST[berat]', ukuran='$_POST[ukuran]', harga='$_POST[harga]', deskripsi='$_POST[deskripsi]' WHERE id='$_POST[id]'");
			if($submit) 
			{
				print "<script>
				alert(\"Data berhasil di simpan\");
				location.href = \"home.php?page=read_barang\";
				</script>";
			} 
			else 
			{
				print "<script>
				alert(\"Proses gagal!\");
				location.href = \"home.php?page=update_barang\";
				</script>";
			}
		// print $submit;
		// 	die;
			var_dump($submit);
		}
	}
}

else if ($_GET['act']=='hapus_barang')
{
	mysqli_query($koneksi, "DELETE FROM barang where id_barang='$_GET[id_barang]'");
	print "<script> alert (\"Data berhasil dihapus\")
	location.href=\"home.php?page=read_barang\"; </script>";
}

else if($_GET['act']=='input_kategori')
{ 
	if(!$_POST['nama']) 
	{
		print "<script>
		alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=insert_kategori\";
		</script>";
	}
	elseif(!preg_match("/^[a-zA-Z .]*$/", $_POST['nama']))
	{
		print "<script>
		alert(\"Nama Kategori hanya boleh menggunakan huruf dan titik (.)!\");
		location.href = \"home.php?page=insert_kategori\";
		</script>";
	}
	else 
	{
		$submit = mysqli_query($koneksi, "INSERT INTO kategori (nama) VALUES('$_POST[nama]')");
		if($submit) 
		{
			print "<script>
			alert(\"Data berhasil diinputkan\");
			location.href = \"home.php?page=read_kategori\";
			</script>";
		} 
		else 
		{
			print "<script>
			alert(\"Proses gagal!\");
			location.href = \"home.php?page=insert_kategori\";
			</script>";
		}
		var_dump($submit);
	}
}

else if ($_GET['act']=='ubah_kategori')
{

	if (!$_POST['nama'])
	{
		print "<script> alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=update_kategori\";
		<script>";
	}
	else
	{
		$submit = mysqli_query($koneksi, "UPDATE kategori SET nama='$_POST[nama]' WHERE id='$_POST[id]'");
		if($submit) 
		{
			print "<script>
			alert(\"Data berhasil di simpan\");
			location.href = \"home.php?page=read_kategori\";
			</script>";
		} 
		else 
		{
			print "<script>
			alert(\"Proses gagal!\");
			location.href = \"home.php?page=update_kategori\";
			</script>";
		}
	}
}

else if ($_GET['act'] == 'hapus_kategori')
{
	mysqli_query($koneksi, "DELETE FROM kategori where id='$_GET[id]'");
	print "<script> alert (\"Data berhasil dihapus\")
	location.href=\"home.php?page=read_kategori\"; </script>";
}



else if($_GET['act']=='input_petugas')
{ 
	if(!preg_match("/^[a-zA-Z .]*$/", $_POST['nama']))
	{
		print "<script>
		alert(\"Nama Petugas hanya boleh menggunakan huruf dan titik (.)!\");
		location.href = \"home.php?page=insert_petugas\";
		</script>";
	}
	else 
	{
		$cekemail = mysqli_query($koneksi , "SELECT * FROM petugas WHERE email= '$_POST[email]'");
		if(mysqli_num_rows($cekemail) > 0) 
		{
			print "<script>
			alert(\"Email sudah terdaftar !\");
			location.href = \"home.php?page=insert_petugas\";
			</script>";
		} 	
		else
		{
			$submit = mysqli_query($koneksi, "INSERT INTO petugas (nama, alamat, telepon, email) VALUES('$_POST[nama]', '$_POST[alamat]', '$_POST[telepon]', '$_POST[email]')");
			if($submit) 
			{
				print "<script>
				alert(\"Data berhasil diinputkan\");
				location.href = \"home.php?page=read_petugas\";
				</script>";
			} 
			else 
			{
				print "<script>
				alert(\"Proses gagal!\");
				location.href = \"home.php?page=insert_petugas\";
				</script>";
			}
		}
	}
}

else if ($_GET['act']=='ubah_petugas')
{

	if (!$_POST['nama'])
	{
		print "<script> alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=update_penerbit\";
		<script>";
	}
	else
	{
		$submit = mysqli_query($koneksi, "UPDATE petugas SET nama='$_POST[nama]', alamat='$_POST[alamat]', telepon='$_POST[telepon]', email='$_POST[email]' WHERE id='$_POST[id]'");
		if($submit) 
		{
			print "<script>
			alert(\"Data berhasil di simpan\");
			location.href = \"home.php?page=read_petugas\";
			</script>";
		} 
		else 
		{
			print "<script>
			alert(\"Proses gagal!\");
			location.href = \"home.php?page=update_petugas\";
			</script>";
		}
		// print $submit;
		// 	die;
		var_dump($submit);
	}
}

else if ($_GET['act'] == 'hapus_petugas')
{
	mysqli_query($koneksi, "DELETE FROM petugas where id='$_GET[id]'");
	print "<script> alert (\"Data berhasil dihapus\")
	location.href=\"home.php?page=read_petugas\"; </script>";
}


else if($_GET['act']=='input_kategori')
{ 
	if(!preg_match("/^[a-zA-Z .]*$/", $_POST['nama']))
	{
		print "<script>
		alert(\"Nama Petugas hanya boleh menggunakan huruf dan titik (.)!\");
		location.href = \"home.php?page=insert_kategori\";
		</script>";
	}
	else 
	{
		$ceknama = mysqli_query($koneksi , "SELECT * FROM kategori WHERE nama= '$_POST[nama]'");
		if(mysqli_num_rows($ceknama) > 0) 
		{
			print "<script>
			alert(\"Nama sudah terdaftar !\");
			location.href = \"home.php?page=insert_kategori\";
			</script>";
		} 	
		else
		{
			$submit = mysqli_query($koneksi, "INSERT INTO kategori (nama) VALUES('$_POST[nama]')");
			if($submit) 
			{
				print "<script>
				alert(\"Data berhasil diinputkan\");
				location.href = \"home.php?page=read_kategori\";
				</script>";
			} 
			else 
			{
				print "<script>
				alert(\"Proses gagal!\");
				location.href = \"home.php?page=insert_kategori\";
				</script>";
			}
		}
	}
}

else if ($_GET['act']=='ubah_kategori')
{
	if (!$_POST['nama'])
	{
		print "<script> alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=update_penerbit\";
		<script>";
	}
	else
	{
		$cekemail = mysqli_query($koneksi , "SELECT * FROM kategori WHERE nama= '$_POST[nama]'");
		if(mysqli_num_rows($cekemail) > 0) 
		{
			print "<script>
			alert(\"Nama sudah terdaftar !\");
			location.href = \"home.php?page=read_kategori\";
			</script>";
		}
		else
		{
			$submit = mysqli_query($koneksi, "UPDATE kategori SET nama='$_POST[nama]' WHERE id='$_POST[id]'");
			if($submit) 
			{
				print "<script>
				alert(\"Data berhasil di simpan\");
				location.href = \"home.php?page=read_kategori\";
				</script>";
			} 
			else 
			{
				print "<script>
				alert(\"Proses gagal!\");
				location.href = \"home.php?page=update_kategori\";
				</script>";
			}
		}
	}
}

else if ($_GET['act'] == 'hapus_kategori')
{
	mysqli_query($koneksi, "DELETE FROM kategori where id='$_GET[id]'");
	print "<script> alert (\"Data berhasil dihapus\")
	location.href=\"home.php?page=read_kategori\"; </script>";
}


else if($_GET['act']=='input_penulis')
{ 
	if(!preg_match("/^[a-zA-Z .]*$/", $_POST['nama']))
	{
		print "<script>
		alert(\"Nama Petugas hanya boleh menggunakan huruf dan titik (.)!\");
		location.href = \"home.php?page=insert_penulis\";
		</script>";
	}
	else 
	{
		$cekemail = mysqli_query($koneksi , "SELECT * FROM penulis WHERE email= '$_POST[email]'");
		if(mysqli_num_rows($cekemail) > 0) 
		{
			print "<script>
			alert(\"Email sudah terdaftar !\");
			location.href = \"home.php?page=insert_penulis\";
			</script>";
		} 	
		else
		{
			$submit = mysqli_query($koneksi, "INSERT INTO penulis (nama, alamat, telepon, email) VALUES('$_POST[nama]', '$_POST[alamat]', '$_POST[telepon]', '$_POST[email]')");
			if($submit) 
			{
				print "<script>
				alert(\"Data berhasil diinputkan\");
				location.href = \"home.php?page=read_penulis\";
				</script>";
			} 
			else 
			{
				print "<script>
				alert(\"Proses gagal!\");
				location.href = \"home.php?page=insert_penulis\";
				</script>";
			}
		}
	}
}

else if ($_GET['act']=='ubah_penulis')
{

	if (!$_POST['nama'])
	{
		print "<script> alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=update_penerbit\";
		<script>";
	}
	else
	{
		$submit = mysqli_query($koneksi, "UPDATE penulis SET nama='$_POST[nama]', alamat='$_POST[alamat]', telepon='$_POST[telepon]', email='$_POST[email]' WHERE id='$_POST[id]'");
		if($submit) 
		{
			print "<script>
			alert(\"Data berhasil di simpan\");
			location.href = \"home.php?page=read_penulis\";
			</script>";
		} 
		else 
		{
			print "<script>
			alert(\"Proses gagal!\");
			location.href = \"home.php?page=update_penulis\";
			</script>";
		}
		// print $submit;
		// 	die;
		var_dump($submit);
	}
}

else if ($_GET['act'] == 'hapus_penulis')
{
	mysqli_query($koneksi, "DELETE FROM penulis where id='$_GET[id]'");
	print "<script> alert (\"Data berhasil dihapus\")
	location.href=\"home.php?page=read_penulis\"; </script>";
}

else if($_GET['act']=='input_peminjaman')
{ 
	if(!$_POST['id_buku'] || !$_POST['id_anggota']) 
	{
		print "<script>
		alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=insert_peminjaman\";
		</script>";
	}	
	else
	{
		$submit = mysqli_query($koneksi, "INSERT INTO peminjaman (id_buku, id_anggota, tanggal_pinjam, tanggal_kembali) VALUES('$_POST[id_buku]', '$_POST[id_anggota]', '$_POST[tanggal_pinjam]', '$_POST[tanggal_kembali]')");
		if($submit) 
		{
			print "<script>
			alert(\"Data berhasil diinputkan\");
			location.href = \"home.php?page=read_peminjaman\";
			</script>";
		} 
		else 
		{
			print "<script>
			alert(\"Proses gagal!\");
			location.href = \"home.php?page=insert_peminjaman\";
			</script>";
		}
	}
}

else if ($_GET['act']=='ubah_peminjaman')
{

	if (!$_POST['id_anggota'] || !$_POST['id_buku'] || !$_POST['tanggal_pinjam'] || !$_POST['tanggal_kembali'])
	{
		print "<script> alert(\"Ada form yang belum terisi!\");
		location.href = \"home.php?page=update_penerbit\";
		<script>";
	}
	else
	{
		$submit = mysqli_query($koneksi, "UPDATE peminjaman SET id_buku='$_POST[id_buku]', id_anggota='$_POST[id_anggota]', tanggal_pinjam='$_POST[tanggal_pinjam]', tanggal_kembali='$_POST[tanggal_kembali]' WHERE id='$_POST[id]'");
		if($submit) 
		{
			// print $submit;
			// die;
			print "<script>
			alert(\"Data berhasil di simpan\");
			location.href = \"home.php?page=read_peminjaman\";
			</script>";
		} 
		else 
		{
			print "<script>
			alert(\"Proses gagal!\");
			location.href = \"home.php?page=update_peminjaman\";
			</script>";
		}
		// print $submit;
		// 	die;
		// var_dump($submit);
	}
}

else if ($_GET['act'] == 'hapus_peminjaman')
{
	mysqli_query($koneksi, "DELETE FROM peminjaman where id='$_GET[id]'");
	print "<script> alert (\"Data berhasil dihapus\")
	location.href=\"home.php?page=read_peminjaman\"; </script>";
}



?>
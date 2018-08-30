<?php
include "koneksi.php";

if($_GET['act']=='login')
{
	if(!$_POST['user_name'] || !$_POST['password']) 
	{
		// echo "samsul";
		print "<script>
		alert(\"Ada form yang belum terisi!\");
		location.href = \"index.php\";
		</script>";
	} 
	else if(!preg_match("/^[a-zA-Z 0-9 _]*$/", $_POST['user_name']))
	{
		// echo "string";
		print "<script>
		alert(\"Username hanya boleh menggunakan huruf, angka dan garis bawah ( _ )!\");
		location.href = \"index.php\";
		</script>";
	}
	else 
	{
		$login=mysqli_query($koneksi,"SELECT * FROM admin where user_name='".$_POST['user_name']."' and password='".($_POST['password'])."'");
		$row=mysqli_num_rows($login);
		$r=mysqli_fetch_array($login);
		
		// $name=$row['username'];
		// $word=$row['password'];
		// $gota=$row['id_anggota'];
		// $tugas=$row['id_petugas'];

		if($row > 0)
		{	
			if($r['user_name'] == 'hebat' && $r['password'] == 'hebat')
			{
				session_start();
				$_SESSION['namauser']=$r['user_name'];
				$_SESSION['password']=$r['password'];
				print "<script>
				alert(\"Selamat datang Admin\");
				location.href = \"home.php\";
				</script>";
			}
			else
			{
				print "<script>
				alert(\"Anda bukan admin!\");
				location.href = \"index.php\";
				</script>";
			}
		}
		else
		{
			print "<script>
			alert(\"Username atau id salah!\");
			location.href = \"index.php\";
			</script>";
		}
		// var_dump($login);
		// print $login;
		// die;
	}
}
else if($_GET['act']=='logout')
{
	session_start();
	unset($_SESSION['namauser']);
	unset($_SESSION['password']);
	session_destroy();
	print "<script>
	alert(\"Anda telah logout\");
	location.href = \"index.php\";
	</script>";
}
?>

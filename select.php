<?php
if (empty($_GET['act']))
{include"utama.php";}
else{
	switch($_GET['act']){
	case('buku'): include('buku.php');
	break;
	case('login'): include('login.php');
	break;
	case('admin.buku'): include('admin.buku.php');
	break;
	case('admin.siswa'): include('admin.siswa.php');
	break;
	case('tambah.buku'): include('tambah.buku.php');
	break;
	case('tambah.siswa'): include('tambah.siswa.php');
	break;
	case('edit.buku'): include('edit.buku.php');
	break;
	case('detail'): include('detail.php');
	break;
	case('detail.siswa'): include('detail.siswa.php');
	break;
	case('edit.siswa'): include('edit.siswa.php');
	break;

	case('tambah.pinjam'): include('tambah.pinjam.php');
	break;
	case('peminjaman'): include('peminjaman.php');
	break;
	case('pengembalian'): include('pengembalian.php');
	break;
	

	case('buku.1'): include('buku.1.php');
	break;
	case('buku.2'): include('buku.2.php');
	break;
	case('buku.3'): include('buku.3.php');
	break;
	case('buku.4'): include('buku.4.php');
	break;
	case('siswa'): include('siswa.php');
	break;
	
	default:include('utama.php');
				}
		}
?>

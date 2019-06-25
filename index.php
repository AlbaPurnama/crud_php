<?php
	$koneksi = mysqli_connect("localhost","root","","binaandankaderldft");
?>

<?php
    $dataEdit[1] = "";
    $dataEdit[2] = "";
    $dataEdit[3] = "";
    $dataEdit[4] = "";
    $dataEdit[5] = "";
    $dataEdit[6] = "";
    $tombol = "registrasi";
    if(isset($_GET['aksi'])){
        if($_GET['aksi'] == 'edit'){
            $sqlEdit = "SELECT * FROM bbq WHERE id = '$_GET[id_kader]'";
            

            $cekEdit = mysqli_query($koneksi, $sqlEdit);
            $dataEdit = mysqli_fetch_array($cekEdit);

            $tombol = "edit";
        }
    }
?>

<form action="#" method="post">
	<table align="center">
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td><input type="text" name="nama" value="<?=$dataEdit[1]?>"> </td>
		</tr>
		<tr>
			<td> Jurusan </td>
			<td> : </td>
			<td><input type="text" name="jurusan" value="<?=$dataEdit[2]?>"> </td>
		</tr>
		<tr>
			<td> Angkatan </td>
			<td> : </td>
			<td><input type="text" name="angkatan" value="<?=$dataEdit[3]?>"> </td>
		</tr>
		<tr>
			<td> Nomor Hp </td>
			<td> : </td>
			<td><input type="text" name="nohp" value="<?=$dataEdit[4]?>"> </td>
		</tr>
		<tr>
			<td> Nama Mentor </td>
			<td> : </td>
			<td><input type="text" name="namamentor" value="<?=$dataEdit[5]?>"> </td>
		</tr>
		<tr>
			<td> Waktu Belajar </td>
			<td> : </td>
			<td><input type="text" name="waktubelajar" value="<?=$dataEdit[6]?>"> </td>
		</tr>
		<tr>
			<td><input type="submit" value="Tambah Data" name="tambah"> </td>
		</tr>
	</table>
	
</form>
<table border="1" align="center">
	<thead>
		<th>Nomor</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Angkatan</th>
		<th>Nomor Hp</th>
		<th>Nama Mentor</th>
		<th>Waktu Belajar</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
			$sqlView="SELECT * FROM bbq";
			$cekView=mysqli_query($koneksi,$sqlView);
			$nomor= 1;
			while ($data=mysqli_fetch_array($cekView)) {
		?>
			<tr>
				<td><?=$nomor ?></td>
				<td><?=$data[1]?></td>
				<td><?=$data[2]?></td>
				<td><?=$data[3]?></td>
				<td><?=$data[4]?></td>
				<td><?=$data[5]?></td>
				<td><?=$data[6]?></td>
				<td>
					<a href="index.php?id_kader=<?=$data[0]?>">Edit</a>
					<a href="index.php?id_kader=<?=$data[0]?>">Hapus</a>
				</td>
			</tr>

			<?php
				$nomor++;
				}
			?>
	</tbody>
</table>

<?php
	if(isset($_POST['tambah'])){
		$sqlInsert = "INSERT INTO `bbq` (`nama`, `jurusan`, `angkatan`, `nohp`, `namamentor`, `waktubelajar`) VALUES('$_POST[nama]', '$_POST[jurusan]', '$_POST[angkatan]', '$_POST[nohp]', '$_POST[namamentor]', '$_POST[waktubelajar]');";
		
		$cekInput;

		if(mysqli_query($koneksi, $sqlInsert)){
			echo "<script> window.location='index.php' </script>";
		}else{
			echo "Datanya gagal masuk";
		}
	}
	if(isset($_GET['id_kader'])){
		$sqlDelete = " DELETE FROM bbq WHERE id = '$_GET[id_kader]'";
		$cekDelete = mysqli_query($koneksi, $sqlDelete);

		if($cekDelete){
			echo "<script> window.location ='index.php'</script>";
		}else{
			echo "data gagal dihapus...";
		}
	}
	if(isset($_POST['id_kader']))
	{   
		$Id=$_POST['id_kader'];
	    $Nama = $_POST['nama'];
	    $Jurusan=$_POST['jurusan'];
	    $Angkatan=$_POST['angkatan'];
	    $Nohp=$_POST['nohp'];
	    $Namamentor=$_POST['namamentor'];
	    $Waktubelajar=$_POST['waktubelajar'];

	    // update user data
	    $result = mysqli_query($mysqli, "UPDATE bbq SET name='$Nama',jurusan='$Jurusan',angkatan='$Angkatan',nohp='$Nohp',namamentor='$Namamentor',waktubelajar='$Waktubelajar' WHERE id=$Id");

	    // Redirect to homepage to display updated user in list
	    header("Location: index.php");
	}


?>
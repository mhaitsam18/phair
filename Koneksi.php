<?php 

session_start();

/**

 * 

 */

class Koneksi {

    

	private $conn;

	function __construct() {

		$servername = "localhost";

		$username = 'root';

        $password = '';

        $databasename = 'phac2339_ph_air';

		$this->conn = mysqli_connect($servername, $username, $password, $databasename);

	}





	public function login_user(){

		$username = $_POST['username'];

		$password = md5($_POST['password']);

		$sql      = "SELECT * FROM user WHERE username=LOWER('$username') AND password='$password';";

        $result   = $this->conn->query($sql);

        $row   = $result->fetch_assoc();

        if ($row > 0) {

            $_SESSION['user'] = $username;

        	header("location: user/dashboard.php");

        } else{

			echo "<script> alert('Username atau Password salah');</script>";

            echo "<script> location= 'user/login.php'; </script>";

        }

	}



	public function insert_user(){

		$target_dir		= "upload/"; // Untuk Foto

		$file_name		= basename($_FILES["foto"]["name"]); // Untuk Foto

		$target_file	= $target_dir . $file_name; // Untuk Foto

		$imageFileType	= strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {

			if ($_POST['password']==$_POST['konfirmasi']) {

				$username =$_POST['username'];

				$nama_lengkap =$_POST['nama_depan'].' '.$_POST['nama_belakang'];

				$no_identitas =$_POST['no_identitas'];

				$email =$_POST['email'];

				$no_ponsel =$_POST['no_ponsel'];

				$alamat =$_POST['alamat'];

				$password =md5($_POST['password']);

				$sql="INSERT INTO user(username, password, no_identitas, nama_lengkap, email, no_ponsel, alamat, foto) VALUES ('$username','$password', '$no_identitas', '$nama_lengkap', '$email', '$no_ponsel', '$alamat', '$target_file')";

				$result=$this->conn->query($sql);

				if ($result == true) {

					echo "<script> alert('Akun Pengguna berhasil dibuat');</script>";

					$_SESSION['user'] = $username;

					echo "<script> location='user/dashboard.php'; </script>";

				} else {

					echo "<script> alert('Akun Pengguna gagal dibuat');</script>";

					echo "<script> location='user/registrasi.php'; </script>";

				}

			} else {

				echo "<script> alert('Pastikan Password & konfirmasi password sama');</script>";

				echo "<script> location='user/registrasi.php'; </script>";

			}

		} else {

			echo "<script> alert('Foto Gagal diunggah');</script>";

			echo "<script> location='user/registrasi.php'; </script>";

		}

		mysqli_close($this->conn);

	}



	public function insert_ph(){

		$sampel =$_POST['sampel'];

		$trayek_ph_terendah =$_POST['trayek_ph_terendah'];

		$trayek_ph_tertinggi =$_POST['trayek_ph_tertinggi'];

		$sql="INSERT INTO `ph_air`(`id`, `sampel`, `trayek_ph_terendah`, `trayek_ph_tertinggi`) VALUES ('', '$sampel', '$trayek_ph_terendah', '$trayek_ph_tertinggi')";

		$result=$this->conn->query($sql);

		if ($result == true) {

			echo "<script> alert('Data pH berhasil ditambah');</script>";

		} else {

			echo "<script> alert('Data pH gagal ditambah');</script>";

		}

		echo "<script> location='user/dashboard.php'; </script>";

		mysqli_close($this->conn);

	}



	public function update_ph(){

		$id =$_POST['id'];

		$sampel =$_POST['sampel'];

		$trayek_ph_terendah =$_POST['trayek_ph_terendah'];

		$trayek_ph_tertinggi =$_POST['trayek_ph_tertinggi'];

		$sql="UPDATE `ph_air` SET `sampel` = '$sampel', `trayek_ph_terendah` = '$trayek_ph_terendah',`trayek_ph_tertinggi` = '$trayek_ph_tertinggi' WHERE `id` = $id;";

		$result=$this->conn->query($sql);

		if ($result == true) {

			echo "<script> alert('Data pH berhasil diubah');</script>";

		} else {

			echo "<script> alert('Data pH gagal diubah');</script>";

		}

		echo "<script> location='user/dashboard.php'; </script>";

		mysqli_close($this->conn);

	}



	public function update_user(){

		$username =$_POST['username'];

		$nama_lengkap =$_POST['nama_lengkap'];

		$no_identitas =$_POST['no_identitas'];

		$email =$_POST['email'];

		$no_ponsel =$_POST['no_ponsel'];

		$alamat =$_POST['alamat'];

		$sql="UPDATE `user` SET `nama_lengkap`= '$nama_lengkap', `no_identitas`= '$no_identitas', `email`= '$email', `no_ponsel`= '$no_ponsel', `alamat`= '$alamat' WHERE `username`= '$username';";

		$result=$this->conn->query($sql);

		if ($result == true) {

			echo "<script> alert('Profil berhasil diubah');</script>";

		} else {

			echo "<script> alert('Profil gagal diubah');</script>";

		}

		echo "<script> location='user/edit_profil.php'; </script>";

		mysqli_close($this->conn);

	}



	public function update_foto(){

		$target_dir		= "upload/"; // Untuk Foto

		$file_name		= basename($_FILES["foto"]["name"]); // Untuk Foto

		$target_file	= $target_dir . $file_name; // Untuk Foto

		$imageFileType	= strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {

			$username = $_POST['username'];

			$sql="UPDATE `user` SET `foto`= '$target_file' WHERE `username`= '$username';";

			$result=$this->conn->query($sql);

			if ($result == true) {

				echo "<script> alert('Foto berhasil disimpan');</script>";

			} else {

				echo "<script> alert('Foto gagal disimpan');</script>";

			}

		} else {

			echo "<script> alert('Foto Gagal disimpan');</script>";

			echo "<script> location='user/edit_profil.php'; </script>";

		}

		echo "<script> location='user/edit_profil.php'; </script>";

		mysqli_close($this->conn);

	}



	public function select_user(){

		$sql="SELECT * FROM user";

		return $this->conn->query($sql);

	}

	public function select_username($username){

		$sql="SELECT * FROM user WHERE username='$username'";

		return $this->conn->query($sql);

	}

	public function select_ph(){

		$sql="SELECT * FROM ph WHERE id_ph IN (SELECT MAX(id_ph) FROM ph)";

		return $this->conn->query($sql);

	}



	public function select_ph_10(){

		$sql="SELECT * FROM (SELECT * FROM ph ORDER BY id_ph DESC LIMIT 10)Var1 ORDER BY id_ph ASC";

		return $this->conn->query($sql);

	}

	public function delete_ph($id){

		$sql = "DELETE FROM ph_air WHERE id='$id'";

		$result = $this->conn->query($sql);

		if ($result == true) {

			echo "<script> alert('Data pH berhasil dihapus');</script>";

			echo "<script> location='user/dashboard.php'; </script>";

		} else {

			echo "<script> alert('Data pH gagal dihapus');</script>";

			echo "<script> location='user/dashboard.php'; </script>";

		}

	}

	public function logout_user(){

		unset($_SESSION['user']);

		header("location: user/login.php");

	}

	public function getUpdate_ph(){

		$sql = "SELECT * FROM ph_air WHERE id='".$_POST['id']."'";

		$result = $this->conn->query($sql);

		$row = $result->fetch_assoc();

		echo json_encode($row);

	}

}



$koneksi = new koneksi();



if (isset($_GET['login_user'])) {

	$koneksi->login_user();

}

if (isset($_GET['insert_user'])) {

	$koneksi->insert_user();

}

if (isset($_GET['insert_ph'])) {

	$koneksi->insert_ph();

}

if (isset($_GET['update_ph'])) {

	$koneksi->update_ph();

}

if (isset($_GET['update_user'])) {

	$koneksi->update_user();

}

if (isset($_GET['update_foto'])) {

	$koneksi->update_foto();

}

if (isset($_GET['delete_ph'])) {

	$koneksi->delete_ph($_GET['delete_ph']);

}

if (isset($_GET['logout_user'])) {

	$koneksi->logout_user();

}

if (isset($_GET['getUpdate_ph'])) {

	$koneksi->getUpdate_ph();

}
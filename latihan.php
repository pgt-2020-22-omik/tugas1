<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi agan sendiri
$koneksi = mysqli_connect("localhost","root","","akademikita");
//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>

<html>
<head>
<title>FORM submit</title>
</head>
<body>
<h2>Tabel submit</h2>
	<form method="POST" >
		<label for="a">a : </label>
		<input type="text" name="a"><br>
		<label for="b">b : </label>
		<input type="text" name="b"><br>
		
		<input type="submit" name="submit" value="submit"><br>
		<label for="c">Hasil </label>
		<input type="text" name="c"><br>

</form>
<?php
if(isset($_POST['submit'])){
$a =$_POST['a'];
$b =$_POST['b'];
$c=$a+$b;
echo $c;
}
?>


</body>
</html>

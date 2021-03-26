<html>
<head>
<title>Buku Tamu Sederhana - MuhamadRidwan</title>
<style>
body{font-family:'Arial';font-size:18px;margin:0}
.kecil{font-size:10px}
a{color:#3498db}
a:hover{color:#2980b9}
input[type=text]{margin:5px auto 15px;padding:10px;color:#444;width:300px}
fieldset{border:1px solid #ccc;width:50%;margin-left:auto;margin-right:auto;margin-top:10px;}
input[type=submit]{color:#FFF;padding:0 20px;margin:10px 0 5px;cursor:pointer;background-color:#333;border:0;height:30px}
.tanggal{float:right;font-size:12px}
input[type=submit]:hover{background-color:#444}
input[type=submit]:active{position:relative;top:2px}
</style>
</head>
<body>
<fieldset>
<legend>Buku Tamu</legend>
<form action="simpan.php" method="post">
<p>Nama Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="Muhamad Ridwan" type="text" name="nama" required/>
</p>
<p>Email (opsional) &nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="iwangarridwan@gmail.com" type="text" name="email"/>
</p>
<p>Website (opsional) :
<input type="text" placeholder="http://MuhamadRidwan21" name="website"/>
</p>
<p>Pesan:
<textarea placeholder="ketikan Sesuatu" cols="90" rows="10" name="pesan" required></textarea>
</p>
<textarea name="tanggal" style="display:none"><?php echo date("h:i:s d/m/Y ");?></textarea>
<p>
<input type="submit" value="Simpan"/>
</p>
</form>
<?php
include("koneksi.php");
$query=mysqli_query($koneksi,'select * from dataku');
while($data=mysqli_fetch_array($query))
{
$nama = $data['nama'];
$email= $data['email'];
$website = $data['website'];
$pesan = $data['pesan'];
$tanggal = $data['tanggal'];
echo "
<b>Muhamad</b> Ridwan  <div class='tanggal'>26-03-2021</div><br/>

<i class='ganti'>'Jangan Menyerah'</i> <br/>
<a class='kecil' id='emoticon' href='$website' target='_blank' rel='nofollow' title='Website'>[WEB]</a> | <a class='kecil' title='Kirim Email' href='mailto:$email'>[EMAIL]</a> <br/><br/>
";}
?>
</fieldset>
</body>
</html>
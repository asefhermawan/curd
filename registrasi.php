
<html>
<head>

</head>
<body>
<center>
 <form class="form-signin" method="POST" action="proses_registrasi.php" enctype="multipart/form-data">

<table border="1" width="530px">

     <caption> <h2>TUGAS FORM REGISTRASI</h2> </caption>
  <thead>
	<tr>
    <td width="250px">Nama Lengkap </td>
	<td> <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required" width="600px"></td>
	<tr>
<td>Username</td> 
<td><input type="text" class="form-control" name="username" placeholder="User Name" required="required" width="600px"></td><tr>
<td>Password</td>   
<td> <input type="password" class="form-control" name="password" placeholder="Password" required="required" width="600px"></td><tr>
<td>Jenis Kelamin</td> 
<td>Laki-Laki<input type="radio" name="jenis_kelamin" value="Laki-Laki">
 Perempuan<input type="radio" name="jenis_kelamin" value="Perempuan"></td><tr>
<td>Hobi</td>
<td>Membaca<input type="checkbox" name="hobi[]" value="Membaca"> Menulis<input type="checkbox" name="hobi[]" value="Menulis">
Makan<input type="checkbox" name="hobi[]" value="Makan">
</td><tr>
<td>Deskripsikan Diri Anda</td> 
<td> <textarea name="deskripsi" width="600px"></textarea> </td><tr>
 <td>Dari Mana Anda Mendengar Kami</td> 
 <td> <select class="form-control border-input" name="asal_info">
                                                            <option value="Khalayak Ramai">Khalayak Ramai</option>
                                                            <option value="Sosial Media" >Sosial Media</option>
                                                            <option value="Teman">Teman</option>
                                                        </select> </td>
				
				<tr><td></td>
<td><button type="submit">DAFTAR</button><button>RESET</button></td>
          </table>
		  
    </form>
<p><b>WIWIT ANDRIANI TANJUNG</p></b>
</center>
</body>
</html>                            
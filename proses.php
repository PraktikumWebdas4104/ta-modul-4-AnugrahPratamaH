<?php 
error_reporting(0);
		if(isset($_POST['submit'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$user=array(
						"user"=>"tama",
						"pass"=>"2103");
			if($username==$user['user']&&$password==$user['pass']){
				echo"<br><br><b>LOGIN SUKSES BRO!</b>";


 			?>
 			<form method="POST">
 				<br><br><b>PILIH GENRE FILM FAVORIT :</b><br>

 				<table>
 					<tr>
 						<td>Horror<input type="checkbox" name="film[]" value="Horror"></td>
 						<td>Action<input type="checkbox" name="film[]" value = "Action"></td>
 						<td>Anime<input type="checkbox" name="film[]" value="Anime"></td>
 					</tr>
 					<tr>
 						<td>Thiller<input type="checkbox" name="film[]" value="Thiller"></td>
 						<td>Animasi<input type="checkbox" name="film[]" value="Animasi"></td>
 						<td>Mystery<input type="checkbox" name="film[]" value="Mystery"></td>
 					</tr>
 					<tr>
 						<td>Romance<input type="checkbox" name="film[]" value="Romance"></td>
 						<td>Sci-Fi<input type="checkbox" name="film[]" value="Scifi"></td>
 						<td>Comedy<input type="checkbox" name="film[]" value="Comedy"></td>
 					</tr>
 					<tr>
 						<td>Documentary<input type="checkbox" name="film[]" value="Documentary"></td>
 						<td>Sport<input type="checkbox" name="film[]" value="Sport"></td>
 						<td>Adventure<input type="checkbox" name="film[]" value="Adventure"></td>
 					</tr>
 				</table>
 				<br><br><b>Pilih Tujuan Wisata Favorit :</b><br>
 				<table>
 					<tr>
 						<td>Bali<input type="checkbox" name="wisata[]" value="Bali"></td>
 						<td>Raja Amat<input type="checkbox" name="wisata[]" value="RajaAmpat"></td>
 						<td>Pulau Derawan<input type="checkbox" name="wisata[]" value="PulauDerawan"></td>
 					</tr>
 					<tr>
 						<td>Bangka Belitung<input type="checkbox" name="wisata[]" value="Bangka"></td>
 						<td>Labuan Bajo<input type="checkbox" name="wisata[]" value="LabuanBajo"></td>
 						<td>Wakatobi<input type="checkbox" name="wisata[]" value="Wakatobi"></td>
 					</tr>
 					<tr>
 						<td>Taman Nasional Bromo Tengger<input type="checkbox" name="wisata[]" value="bromo"></td>
 						<td>Kawah Ijen<input type="checkbox" name="wisata[]" value="ijen"></td>
 						<td>Sumba<input type="checkbox" name="wisata[]" value="sumba"></td>
 					</tr>
 					<tr>
 						<td><input type="submit" name="submitt" value="Kirim"></td>
 					</tr>
 				</table>


 			</form>
<?php 
			}
			
			else{
					echo "Username atau Password SALAH BRO!";
			}
		}

		if(isset($_POST['submitt'])){
			$genrefilm=$_POST['film'];
			$datawisata=$_POST['wisata'];

			echo"<b> FILM FAVORIT ANDA : ";
			if(!empty($genrefilm)){
				foreach ($genrefilm as $movie) {
					# code...
					echo "-".$movie."<br>";
				}
			}
			else{
				echo"Anda tidak memilih genre film favorit";
			}
			echo"<br><br> TEMPAT TUJUAN WISATA FAVORIT ANDA :";
			if(!empty($datawisata)){
				foreach ($datawisata as $wisata) {
					# code...
					echo "-".$wisata."<br>";
				}
			}
			else{
				echo "Anda tidak memilih tujuan wisata favorit";
			}

		}
		?>

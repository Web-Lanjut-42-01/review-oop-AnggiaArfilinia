<?php 
/**
 * 
 */
class beratideal{

	function hitung($bmi, $jk){
		if ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi." Anda Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo $bmi." Anda Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." Anda Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." Anda Obesitas";
			}
		} elseif ($jk=="Perempuan") {
			if ($bmi<18) {
				echo $bmi." Anda Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi." Anda Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." Anda Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." Anda Obesitas";
			}
		}
	}

}
$jumlah = new beratideal(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$bb= $_POST['bb'];
	$tb = $_POST['tb'];
	$jk = $_POST['jk'];
	$bmi = $bb/($tb*$tb/10000);
	$jumlah->hitung($bmi, $jk);
}
 ?>
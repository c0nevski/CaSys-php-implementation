<?php
	// Dokolku ?state parametarot e setiran, zapisi ja vrednosta vo $step
		if (isset($_GET['state'])) {
			$step = $_GET['state'];
	// Dokolku ne e setiran, pecati "ERROR"
		} else { echo 'ERROR'; }
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Proverka na plakanje</title>
<link rel="icon" type="image/x-icon" href="images/favicon.png" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
</head>
<body>
<?php
// dokolku plakanjeto e uspesno pecati go ova na ekran so zeleni bukvi
if(isset($step) && $step == "ok"){  
   echo '<span style="color: green;">ПЛАЌАЊЕТО БЕШЕ УСПЕШНО!</span>';

// dokolku plakanjeto e NEuspesno pecati go ova na ekran so crveni bukvi.
} else if( isset($step) && $step == "error"){
   echo '<span style="color: red;">ПЛАЌАЊЕТО БЕШЕ НЕУСПЕШНО! ОБИДЕТЕ СЕ ПОВТОРНО!</span>';
// dokolku nema ?state parametar vo odgovorot prenasoci kon pocetna
} else {
		header('Location: http://localhost/casysPHP');
}
?>
</body>
</html>
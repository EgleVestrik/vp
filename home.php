<?php

  $username = "Egle Vestrik";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  if ($hournow < 7){
	$partofday = "uneaeg";  
  }
  if($hournow >= 8 and $hournow < 18){
	$partofday = "akateemilise aktiivsuse aeg";
  }
  
  //vaatame semestri kulgemist
  $semesterstart = new DateTime ("2020-8-31");
  $semesterend = new DateTime ("2020-12-13");
  
  //selgitame välja nende vahe ehk erinevuse
  $semesterduration= @semesterstart->diff($semesterend);
  //leiame selle päevade arvuna
  $semesterdurationdays = $semesterduration->format("%r%a");
  
  //tänane päev
  $today = new DateTime("now");
  //
  //$fromsemesterdays = @
  //if (@fromsemesterdays< 0)/{semester pole peale hakanud}
  //mitu % õppetööst on tehtud
  
?>

<!DOCTYPE html> 
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> programmeerib veebi</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>Leht on loodud veebiprogrammeerimise kursuse raames <a href="https://www.tlu.ee">Tallinna Ülikooli</a> digitehnoloogiate instituudis.</p>
  <p>See rida on sisestatud kodutööna 03.09.2020</p>
  <p>Andmete kättesaamine : successs</p>
  <p>Andmete kuvamine : fail</p>
  
  <p>Lehe avamise hetkel oli : <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Parajasti on " .$partofday ."."; ?></p>

</body>

</html>
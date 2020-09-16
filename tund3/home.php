<?php

  $username = "Egle Vestrik";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  if ($hournow < 7){
	$partofday = "uneaeg";  
  }
  if($hournow >= 8 and $hournow <=	 16){
	$partofday = "akateemilise aktiivsuse aeg";
  }
  if($hournow >= 17 and $hournow <= 18){
	$partofday = "bussisõit koju";
  }
  if($hournow >= 19 and $hournow <= 21){
	$partofday = "kodutöö aeg";
  }  
  if($hournow >= 22 and $hournow <= 00){
	$partofday = "aeg sättida magama";
  }	
  
  
  
  //vaatame semestri kulgemist
  $semesterstart = new DateTime ("2020-8-31");
  $semesterend = new DateTime ("2020-12-13");
  

  //selgitame välja nende vahe ehk erinevuse
  $semesterduration= $semesterstart->diff($semesterend);
  //leiame selle päevade arvuna
  $semesterdurationdays = $semesterduration->format("%r%a");
  
  //tänane päev
  $today = new DateTime("now");
  //1. mitu päeva on möödunud semestri algusest(formindage päevade arvuna)
  $semesterkestus= $semesterstart->diff($today);
  $semesterkestusdays = $semesterkestus->format("%r%a");
  //2. kontrollida kas semestri alguse ja tänase päeva vahe on negatiivne,
  //siis pole semester ju alganud
  $semesterActive = "semester käib";
  if($semesterkestusdays < 0 ){
	$semesterActive = "uus semester pole alganud";
  }	  
  //3. kas semester on lõppenud
  $semesteOver  = "semester käib";
  if($semesterActive > $semesterdurationdays  ){
	$semesterOver = "semester on läbi";
  }	 
  //4. mitu % õppetööst on tehtud
  $protsent=(100*$semesterkestusdays) / $semesterdurationdays;
  
  
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
  <p><?php echo "Semestri algusest on möödunud " .$semesterkestusdays ." päeva ja " .$semesterActive ." ."; ?></p>
  <p><?php echo "Semester kestab " .$semesterdurationdays ." päeva, mis tähendab, et hetkel " .$semesteOver?></p>
  <p><?php echo $protsent ." % tööst on tehtud."; ?></p>
  
  <p>GIT EI LÄINUD TÖÖLE</p>
</body>

</html>
//Binôme : ABDESLAMI ZAYNA 
	// HMAIDDOUCH NADA
//Groupe:  G1


<html>
<body>
<H2>Choisir une date</H2>
<p>Jour Mois Annee</p>
<head> <title></title></head>
<body>
<form method="GET" action="valideDate.php">
<p>
<SELECT NAME="liste1" SIZE="1">Jour
    
    <?php  echo "jour";
	       for($i=1;$i<=31;$i++)
          {?>
         <OPTION><?php echo $i?></OPTION>
          <?php }?>

</SELECT>
    <SELECT NAME="liste2" SIZE="1">Mois

        <?php echo 'Mois';
		      for($i=1;$i<=12;$i++)
          {?>
         <OPTION><?php echo $i?></OPTION>
          <?php }?>

</SELECT>
    <SELECT NAME="liste3" SIZE="1">Annee
    
 
        <?php echo 'Annee';
		     for($i=1900;$i<=2020;$i++)
          {?>
         <OPTION><?php echo $i?></OPTION>
          <?php }?>
</SELECT></p>
<input type="submit" name="vld" value="ENVOYER">
</form>
<?php



?>    
</body>
</html>

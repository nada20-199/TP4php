//Binôme : ABDESLAMI ZAYNA 
	// HMAIDDOUCH NADA
//Groupe:  G1

<html>

<head>
</head>

<body>
    <h2>Commande clients</h2>

    <?php 
    $tab= file("pscde01_CLI1001.txt");
    //echo count($tab);
    for($i = 0; $i<count($tab);$i++)
    {
      $a = explode("|",$tab[$i]);
        print_r ($a);
    }
    
    ?>

    <table border="red 2px solid">
        <th>Numéro de commmandes</th>
        <th>Numéro Clients</th>
        <th>Date de commandes</th>
        <th>Designation Article</th>
        <th>Quantité(PAL)</th>
        <th>Prix unitaires(HT)</th>
		<th>Date de Livraison</th>
		<th>Adresse Client</th>
    <?php 
    $tab= file("pscde01_CLI1001.txt");
    //echo count($tab);
    for($i = 0; $i<count($tab);$i++)
    { echo "<tr>";
      $a = explode("|",$tab[$i]);
        print_r ($a);
     for($j=0;$j<count($a);$j++)
     {
         echo "<td>";
         echo $a[$j];
         echo "</td>";
     }
     echo "</tr>";
    }
    
    ?>
    </table>
	 <?php 
    $tab= file("psccl01_CLI1004.txt");
    //echo count($tab);
    for($i = 0; $i<count($tab);$i++)
    {
      $a = explode("|",$tab[$i]);
        print_r ($a);
    }
    
    ?>

	  <table border="red 2px solid">
        <th>Numéro de commmandes</th>
        <th>Numéro Clients</th>
        <th>Date de commandes</th>
        <th>Designation Article</th>
        <th>Quantité(PAL)</th>
        <th>Prix unitaires(HT)</th>
		<th>Date de Livraison</th>
		<th>Adresse Client</th>
    <?php 
    $tab= file("psccl01_CLI1004.txt");
    //echo count($tab);
    for($i = 0; $i<count($tab);$i++)
    { echo "<tr>";
      $a = explode("|",$tab[$i]);
        print_r ($a);
     for($j=0;$j<count($a);$j++)
     {
         echo "<td>";
         echo $a[$j];
         echo "</td>";
     }
     echo "</tr>";
    }
    
    ?>
    </table>
    

</body>

</html>

<?php 
// //Q1
//  $etudiant = array('prenom'=>'salma','nom'=>'fathi','matricule'=>1234);
//  echo("<br>Tableau d'Etudiants: <br>");
//  foreach( $etudiant as $key=>$value)
//  {
//     echo $key.'=>'.$value . '<br>';
//  }

//  //Q2
//  $etudiant = array('note' => 19);
//  foreach($etudiant as $key => $value)
//  {
//     echo $key.'=>'.$value . '<br>';
//  }

//  //Q3
//  $produit = array(
//     'pomme'=>30,
//     'fraise'=>60,
//     'banane'=>10
//  );
//  echo("<br>Tableau de Produits: <br>");
//  foreach( $produit as $key=>$value)
//  {
//     echo $key.'=>'. $value . "dh" .'<br>';
//  }

//  //Q4
//  $Score = array(
//     "Etd1"=>30,
//     "Etd2"=>10,
//     "Etd3"=>20,
//     "Etd4"=>40,
//     "Etd5"=>50
//  );
//  $somme=0;
// foreach($Score as $key=>$value )
// {
//     $somme+= $Score[$key];
// }
// $moyenne=$somme/count($Score);
// echo ( "<br>La moyenne du tableau de Score d'etudiant est " .$moyenne ."<br>");

// //Q5
// $Pays = array(
//     "Maroc"=>5000,
//     "Italie"=>3000,
//     "India"=>1000000000
// );
// rsort($Pays);
// foreach( $Pays as $key=>$value)
// {
//    echo $key.'=>'. $value . "dh" .'<br>';
// }


// //Q6
// if(isset($_POST["button"]))
// {
//      $nom = $_POST['nom'];
//  $age = $_POST['age'];
// echo "Bienvenue". $nom. "vous avez". $age ."ans !";
// }

// // Q7
// if(isset($_POST["button"]))
// {
//     $age = (int)$_POST['age'];

// if(is_int($age)&& $age>0)
// {
//     echo "Bienvenue". $nom. "vous avez". $age ."ans !";
// }
// else
// {
//     echo "validation échoue";
// }
// }

// //Q8
// if(isset($_POST["submit"]))
// {
//     echo 'Votre couleur préférée est : '.$_POST['select'];
// }

// //Q9
// if(isset($_GET["submit"]))
// {
//     echo "La some de " .$_GET['nbr1']. " et ". $_GET['nbr2']. " est " . $_GET['nbr1'] + $_GET['nbr2'];
// }

//Q10
if (isset($_POST["submit"]))
{
    echo 'Bienvenue, '.$_POST['select'];
}





?>
<?php 
// //Q1
 // $employes = array (
 //     'empl1' => array('salaire' => 1000,'post' => 'post1'),
 //     'empl2' => array('salaire' => 2000,'post' => 'post2'),
 //     'empl3' => array('salaire' => 3000,'post' => 'post3'),
 //     'empl4' => array('salaire' => 4000,'post' => 'post4'),
 //     'empl5' => array('salaire' => 5000,'post' => 'post5')
 // );

 // function moyenne ($employes)
 // {
 //     $somme = 0;
 //     foreach($employes as $employe)
 //     {
 //         $somme+=$employe['salaire'];
 //     }
 //      return $somme/count($employes);
 // }
 // echo 'le salaire moyen des employés est : '.moyenne($employes);


// //Q2
 // if (isset($_POST["submit"]))
 // {  
 //     $employes = array (
 //         'empl1' => array('salaire' => 1000,'post' => 'post1'),
 //         'empl2' => array('salaire' => 2000,'post' => 'post2'),
 //         'empl3' => array('salaire' => 3000,'post' => 'post3'),
 //         'empl4' => array('salaire' => 4000,'post' => 'post4'),
 //         'empl5' => array('salaire' => 5000,'post' => 'post5')
 //     );
 //  $nom = $_POST["nom"];   
 //         if(array_key_exists($nom,$employes))
 //         {
 //             $salaire = $employes[$nom]['salaire'];
 //             $post = $employes[$nom]['post'];

 //                  echo $nom." ".$salaire." ".$post;
 //         }
 //         else{
 //             echo ('non');
 //         }  
 // }


// //Q3
 // if(isset($_POST["submit"]))
 // {
 //     $membres = array(
 //         'user1@gmail.com' => 'user1',
 //         'user2@gmail.com' => 'user2',
 //         'user3@gmail.com' => 'user3'
 //     );

 //     $email = $_POST['email'];
 //     $mdp = $_POST['password'];

 //     if(array_key_exists($email,$membres) && $membres[$email] === $mdp )
 //     {
 //         echo "bienvenue";
 //     }
 //     else{
 //         echo "erreur";
 //     }
 // }


// //Q4
 // session_start();
 // if(!isset($_SESSION['panier']))
 // {
 //     $_SESSION['panier'] = [];
 // }

 // if(isset($_POST['submit']))
 // {
 //     $_SESSION['panier'][]=[
 //         'nom' => trim($_POST['nom']),
 //         'quantite' => $_POST['quantite'],
 //         'prix' => $_POST['prix']
 //     ];

 //     $totale = 0;
 //     foreach($_SESSION['panier'] as $value)
 //     {
 //         $totale += $value['prix']*$value['quantite'];
 //     }

 //     echo 'le totale du panier est '.$totale;
 // }


// //Q5
//  session_start();

// if (!isset($_SESSION['commentaires'])) {
//     $_SESSION['commentaires'] = []; 
// }

// if(isset($_POST['submit']))
// {
//     $cmt = trim($_POST['cmt']);
//     $horodatage = date('d-m-Y H:i:s');
     
//     $_SESSION['commentaires'][] = [
//         'commentaire' => $cmt ,
//         'horodatage' => $horodatage 
//     ];
    
// }

//   foreach($_SESSION['commentaires'] as $key => $value)
// {
//     foreach($value as $k => $v)
//     {
//          echo "<br> $k : $v";
//     }
// }   

//  foreach ($_SESSION['commentaires'] as $v) {
//     echo 'Commentaire : ' . $v['commentaire'] . '<br>';
//     echo 'Horodatage : ' . $v['horodatage'] . '<br><br>';
// } 
  

// //Q6
 // $ville = array(
 //     'casa' =>25,
 //     'rabat' =>20,
 //     'marrakech' =>39
 // );
 // $max = 0;
 // $villemax = '';
 // foreach($ville as $key=>$value)
 // {
 //     if($max < $value)
 //     {
 //         $max = $value;
 //         $villemax = $key;
 //     }
 // }
 // echo 'la ville ayant la température la plus élevée est ' .$villemax . ' de temperature '.$max .'°';


// //Q8
//   $produits = [
//      [
//         'nom' => 't-shirt',
//         'prix' => 100
//      ],
//      [
//         'nom' => 'robe',
//         'prix' => 200
//      ],
//      [
//         'nom' => 'casquette',
//         'prix' => 80
//      ]
//     ];
   
//     if(isset($_POST['submit']))
//     {

//         $total = 0;
//         $tab = $_POST['produit'];
//         echo "Les produits :<br>";
//         for($i=0 ; $i<sizeof($tab) ; $i++)
//         {
//             foreach($produits as $value)
//             {
//                 if($tab[$i] == $value['nom'])
//                 {
//                     echo $value['nom'].'<br>';
//                     $total += $value['prix'];
//                 }
//             }
//         }
//         echo "Total : $total";
//      }   


//  //Q9
//  session_start();

//  if(!isset($_SESSION['etudiant']))
//  {
//     $_SESSION ['etudiant'] = [];
//  }

//  if(isset($_POST['ajouter']))
//  {
//     $_SESSION['etudiant'] []= [
//         'nom' => trim($_POST['nom']) ,
//         'noteF' => $_POST['noteF'],
//         'noteA' => $_POST['noteA']
//     ];
//  }

//  if(isset($_POST['afficher']))
//  {
    
//     foreach($_SESSION['etudiant'] as  $v)
//      {
//          echo "Nom :".$v['nom'];
//          echo "<br>";
//          echo "NoteF:".$v['noteF'];
//          echo "<br>";
//          echo "NoteA:".$v['noteA'];
//          echo "<br>";
//          $moyenne = ($v['noteF'] + $v['noteA']) / 2;;
//          echo 'La moyenne est : '. number_format($moyenne,2).'<br>';
//      }  
//  }


// //  Q10
//   session_start();

//   if(!isset($_SESSION['user']))
//   {
//      $_SESSION['user'] = [];
//   }
// function afficher($tab)
// {
//     foreach($tab as  $v)
//   {
//     echo "Nom :".$v['nom'];
//     echo "<br>";
//     echo "Age:".$v['age'];
//     echo "<br>";
//   }
// }
//   if(isset($_POST['ajouter']))
//   { 
//      $_SESSION['user'][] = [
//           'nom' => trim($_POST['nom']),
//           'age' => $_POST['age']
//      ];
//      afficher($_SESSION['user']);
//   }

//  if(isset($_POST['aff']))
//   {
//     afficher($_SESSION['user']);
//   }
//   if(isset($_POST['modifier']))
//   {
//      $name = $_POST['nom'];

//      foreach($_SESSION['user'] as $key => $value)
//      {
//         if($value['nom'] == $name)
//         {
//          $_SESSION['user'][$key]['nom'] = $_POST['nom']; 
//          $_SESSION['user'][$key]['age'] = $_POST['age'];
//         }
//      }

// afficher($_SESSION['user']);
  
//   }

//   if(isset($_POST['supprimer']))
//   {
//      $name = $_POST['nom'];
//      foreach($_SESSION['user'] as  $value)
//      {
//          if($value['nom'] == $name)
//          {
//              unset($_SESSION['user'][$key]);
//          }
//      }
//      $_SESSION['user'] = array_values($_SESSION['user']);
//   }

?>
<?php 
//Q7
$products = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file'])) {

$file = $_FILES['csv_file']['tmp_name'];

if (($handle = fopen($file, 'r')) !== FALSE) {
    $headers = fgetcsv($handle);  
    if ($headers && $headers === ['nom', 'prix', 'quantité']) {
        while (($data = fgetcsv($handle)) !== FALSE) {
            $product = array_combine($headers, $data);
            $products[] = $product;
        }
    }   
    else {
        echo "Les en-têtes du fichier ne correspondent pas aux attentes.";
    }
    fclose($handle);
} else {
    echo "Erreur lors de l'ouverture du fichier.";
}
}

if (!empty($products)): ?>
    <h2>Données des produits</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['nom']); ?></td>
                    <td><?php echo htmlspecialchars($product['prix']); ?></td>
                    <td><?php echo htmlspecialchars($product['quantité']); ?></td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
<?php endif; ?>

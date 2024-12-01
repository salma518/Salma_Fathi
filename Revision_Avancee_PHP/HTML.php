<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Q2 -->
   <!-- <form action = 'PHP.php' method = 'POST'>
        <input type = 'text' name = "nom" placeholder = 'le nom rechercher'>
        <input type = 'submit' name = "submit" value ='chercher'>
    </form> -->


<!-- Q3 -->
    <!-- <form action='PHP.php' method = 'POST'>
        <input type = 'email' name = "email" placeholder="email">
        <input type = 'password' name = "password" placeholder="mot de passe">
        <input type = 'submit' name = "submit" value = 'verfier'>
    </form> -->


<!-- Q4 -->
  <!-- <form action = 'PHP.php' method = 'POST'>
    <input type = 'text' name='nom' placeholder = 'nom du produit'>
    <input type = 'number' name='quantite' placeholder = 'quantite'>
    <input type = 'number' name='prix' placeholder = 'prix'>
    <input type = 'submit' name = 'submit' value = 'Caisse'>
  </form> -->


<!-- Q5 -->
<!-- <form action = 'PHP.php' method = 'POST'>
 <label>Entrer un commentaire :</label>
 textarea name="cmt" rows="4" cols="50"  required></textarea>
<input type="submit" name="submit" value="Envoyer"> 
</form> -->


<!-- Q7 -->
<h1>Importer un fichier CSV de Produits</h1>
<form action="PHP.php" method="post" enctype="multipart/form-data">
    <label for="csv_file">Choisir un fichier CSV:</label>
    <input type="file" id="csv_file" name="csv_file" accept=".csv" required>
    <input type="submit" value="Importer">
</form>


<!-- Q8 -->
 <!-- <form action = 'PHP.php' method = 'POST'>
 <input type="checkbox" name = "produit"> P1 -> 5dh <br>
 <input type="checkbox" name = "produit"> P2 -> 5dh <br>
 <input type="checkbox" name = "produit"> P3 -> 5dh <br>
 <input type="checkbox" name = "produit"> P4 -> 5dh <br>
 <input type="submit" name = "submit" value = 'afficher'>
 </form> -->


 <!-- <form action = 'PHP.php' method = 'POST'>
 <label for="produit">Selectionner les produits :</label>
 <input type="checkbox" name="produit[]" value="t-shirt"><label for="produit">t-shirt</label>
 <input type="checkbox" name="produit[]" value="casquette"><label for="produit">casquette</label>
 <input type="checkbox" name="produit[]" value="robe"><label for="produit">robe</label>
 <input type="submit"  name="submit"value="Envoyer">
 </form> -->


<!-- Q9 -->
 <!-- <form action = 'PHP.php' method ='POST'>
    <input type = 'text' name = 'nom' placeholder = 'Entrer le nom de etudiant'>
    <input type = 'number' name = 'noteF' placeholder = 'Note de Français'>
    <input type = 'number' name = 'noteA' placeholder = 'Note de Anglais'>
    <br>
    <input type = 'submit' name = 'ajouter' value = 'Ajouter'>
    <input type = 'submit' name = 'afficher' value = 'Afficher'> -->


<!-- Q10 -->
 <!-- <form action = 'PHP.php' method = 'POST'>
 <input type = 'text' name = 'nom' placeholder = "Nom">
 <input type = 'number' name = 'age' placeholder = "Age">
 <br>
 <input type = 'submit' name = 'ajouter' value = "Ajouter">
 <input type = 'submit' name = 'modifier' value = "Modifier">
 <input type = 'submit' name = 'supprimer' value = "Supprimer">
 <input type="submit" name="aff" value="afficher">
</form> -->








</body>

</html>
<meta charset="utf-8"/>
<?php
$serveur = "localhost";
$dbname = "simplon";
$user = "root";



try{
    //On se connecte à la BDD
    $connect = new PDO("mysql:host=$serveur;dbname=$dbname",$user,'');
    $connect->query("SET NAMES UTF8");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:");
}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}


$apprenant=$connect->query('SELECT * FROM apprenant ORDER BY email DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])){
    $q=htmlspecialchars($_GET['q']);
    $apprenant=$connect->query('SELECT * FROM apprenant WHERE email LIKE "%'.$q.'%" ORDER BY email DESC');

}


?>
<ul>
<?php
while($a = $apprenant->fetch()){?>
    <li><?=$a['email']?></li>
<?php }?>
</ul>
<script src="../dist/js/jquery.slim.min.js"></script>
 <script src="../dist/js/bootstrap.min.js"></script>
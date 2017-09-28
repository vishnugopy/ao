<?php
include('db.php');
$name = $_POST['name'];
$first_name = $_POST['first_name'];
$mail = $_POST['mail'];
$query = "INSERT INTO contact (nom, prenom, mail) VALUES ('$name','$first_name','$mail')";
if (($_POST['name'] && $_POST['first_name'] && $_POST['mail']) != ''){
mysqli_query($bdd,$query);
echo "Salut ".$first_name." ".$name." ton adresse email est ".$mail;
}




$query_select = "SELECT * FROM contact";
$query_result = mysqli_query($bdd,$query_select);
while($result = mysqli_fetch_assoc($query_result)){
echo $result['nom']." ".$result['prenom']." ".$result['mail']."<br>";
};
?>

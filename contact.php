<html>
<body>

<?php $name = $email = ""; ?>

<?php
$myfile = fopen($_POST["name"] . ".txt", "w") or die ("Er is iets misgegaan!");
fwrite($myfile,"Naam: " . $_POST["name"] . "\n");
fwrite($myfile,"E-mail: " . $_POST["email"] . "\n");
fclose($myfile);
?>

Beste <?php echo $_POST["name"]; ?>,<br>
Bedankt voor het invullen van ons formulier. We zullen binnenkort<br>
via <?php echo $_POST["email"]; ?> contact met u opnemen.<br>
Met vriendelijke groet,<br>
Team 23

<?php
$to = $_POST["email"];
$subject = "Bevestigingsmail";
$txt = "Beste " . $_POST["name"] . "," . "\n" .
"Hierbij een bevestigingsmail voor het invullen van het formulier van Team 23" . "\n" .
"Dit heeft u gedaan met behulp van dit mailadres: " . $_POST["email"] . "\n" . 
"met vriendelijke groet," . "\n" . 
"Team 23";
$headers = "From: Team23IUW@uu.nl";
mail($to,$subject,$txt,$headers);
?>

</body>
</html>
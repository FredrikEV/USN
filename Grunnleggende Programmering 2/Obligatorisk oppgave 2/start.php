<?php 

session_start(); 
@$innloggetBruker=$_SESSION["brukernavn"]; 

if (!$innloggetBruker) {
    echo ("<meta http-equiv='refresh' content='0;url=innlogging.php'>"); 
}

?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obligatorisk Oppgave 1 - PRG1100</title>
    <script src="script.js" type="application / javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="hovedgrid">
        <div class="header">
        <h1>Velkommen til Obligatorisk Oppgave 1 - PRG1100</h1>
        </div>
        
        <div class="meny">

            <h3><a href="index.php">Hjem</a></h3>
            <a href="utlogging.php">Logg ut</a>


            <h3>Klasse</h3>
  
            <div id="meny-klasse" class="meny-klasse">
                <div id="meny-klasse" class="meny-klasse">
                    <a href="registrer-klasse.php">Registrer klasse</a>
                    <a href="vis-alle-klasser.php">Vis alle klasser</a>
                    <a href="endre-klasse.php">Endre klasse</a>
                    <a href="slett-klasse.php">Slett klasse</a>
                </div>
            </div>


            <h3>Bilde</h3>
  
            <div id="meny-bilde" class="meny-bilde">
                <a href="registrer-bilde.php">Registrer bilde </a>
                <a href="vis-alle-bilder.php">Vis alle bilder</a>
                <a href="endre-bilde.php">Endre bilde</a>
                <a href="slett-bilde.php">Slett bilde</a>
            </div>


            <h3>Student</h3>

            <div id="meny-student" class="meny-student">
                <a href="registrer-student.php">Registrer student</a>
                <a href="vis-alle-studenter.php">Vis alle studenter</a>
                <a href="endre-student.php">Endre student</a>
                <a href="slett-student.php">Slett student</a>
            </div>

        

        </div>

        <div class="innhold">
        <article>

<?php 
 
// appeler tous les sujet dans sujet de la bdd
    function getSujet(){

    require('connexion.php');
   
    $sujet = $bdd->query("SELECT * FROM sujet ORDER BY date_sujet");
    $sujet->execute();
    $sujets = $sujet->fetchAll();
    return $sujets ;
}

// recuperer les messages en fonctions d'indetifiant des sujet depuis la base des données 
function getMessage($id){

    require('connexion.php');
    $message = $bdd->query("SELECT * FROM messages WHERE id_sujet = '$id'");
    $message->execute();
    $messages = $message->fetchAll();
    return $messages ;
}
function addMessage($id , $message){

    require('connexion.php');
    $heure = date("H:i:s");
    $date = date("Y-m-d");
    $sql = "INSERT INTO `messages` (`id_message`, `id_util`, `id_sujet`, `dateMessage`, `heureMessage`, `message_contenu`) 
    VALUES
     (NULL, NULL, '$id', '$date', '$heure', '$message')"; 
    $bdd->exec($sql);
}

function addSujet($titre , $contenu){

    require('connexion.php');
    $heure = date("H:i:s");
    $date = date("Y-m-d");
    $sql = "INSERT INTO `sujet` (`id_sujet`, `id_util`, `titre_sujet`, `sujet_contenu`, `date_sujet`, `heure_sujet`) VALUES 
    (NULL, NULL, '$titre', '$contenu', '$date', '$heure')"; 
    $bdd->exec($sql);
   
}
function getSujetById($id){

    require('connexion.php');
    $sujet = $bdd->query("SELECT * FROM sujet WHERE id_sujet = '$id'");
    $sujet->execute();
    $sujets = $sujet->fetchAll();
    return $sujets;

}
    

?>
<?php
require_once('../modele/modele.php');

    function getSujetAction(){
        return getSujet();
        
    }

    function getMessageAction(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            return getMessage($id);
        }

        
    }

    function getSujetByIdAction(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            return getSujetById($id);
        }

    }

    function addMessageAction(){
        if(isset($_POST['message']) && isset($_POST['envoyer'])){
            $message =$_POST['message'];
           $id=$_GET['id'];

           addMessage($id , $message) ;
           header("location:../vue/message.php?id=".$id);
           

        }

    }
    function addSujetAction(){
        if (empty($_POST['envoyer']) && isset($_POST['titre']) && isset($_POST['contenu']) ){
            $titre=$_POST['titre'];
            $contenu=$_POST['contenu'];
            addSujet($titre , $contenu);
            header('location:../vue/index.php');
        }

    }

 ?>
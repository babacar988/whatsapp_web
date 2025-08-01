<?php

function getAllclients() {
    global $conn; // utilise la connexion globale
    $sql = "SELECT * FROM client"; // creation de la requete
    $stmt = $conn->query($sql); // preparation de la requete
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC); // execution de la requete

    return $clients; // retourne les clients
}


function setClient($nom, $prenom, $telephone, $username, $password){
    global $conn;
    $sql = "INSERT INTO `client`(`nom_client`, `prenom_client`,
     `telephone_client`, `username`, `password`) 
    VALUES ('$nom','$prenom','$telephone','$username','$password')";

    $res = $conn->exec($sql);

    if($res){
        echo "Client ajouté";
    }else{
        echo "Erreur lors de l'ajout"; 
    }
}

function setClientPrepa($nom, $prenom, $telephone, $username, $password){
    global $conn;
    $sql = "INSERT INTO `client`(`nom_client`, `prenom_client`,
     `telephone_client`, `username`, `password`) 
    VALUES (:n,:p,:t,:u,:pa)";
    $exec = $conn->prepare($sql);
    $exec->bindParam(':n',$nom);
    $exec->bindParam(':p',$prenom);
    $exec->bindParam(':t',$telephone);
    $exec->bindParam(':u',$username);
    $exec->bindParam(':pa',$password);
    $res = $exec->execute();

    if($res){
        echo "Client ajouté";
    }else{
        echo "Erreur lors de l'ajout"; 
    }
}



function updateClientPrepa($nom, $prenom, $telephone, $username, $password, $id){
    global $conn;
    $sql = "UPDATE `client` SET `nom_client`=:n,
    `prenom_client`=:p,`telephone_client`=:t,
    `username`=:u,`password`=:pa WHERE `id_client`= :i";
    $exec = $conn->prepare($sql);
    $exec->bindParam(':n',$nom);
    $exec->bindParam(':p',$prenom);
    $exec->bindParam(':t',$telephone);
    $exec->bindParam(':u',$username);
    $exec->bindParam(':pa',$password);
    $exec->bindParam(':i', $id);
    $res = $exec->execute();

    if($res){
        echo "Client modifie";
    }else{
        echo "Erreur lors de la modification"; 
    }
}
//var_dump(getAllclients()); 


?>
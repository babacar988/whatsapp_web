<?php
include 'db/connexion.php'; // include the database connection file
include 'db/crud_client.php';

//setClient("tata","tata","12345678","toto223","toto");
updateClientPrepa("Diakhate","er","12345678","bbnj","poiu",2);

$clients = getAllclients();

//var_dump($clients);

// foreach (getAllclients()as $client) {
//     echo "Client ID: " . $client['id_client'] . "<br>";
//     echo "Client Nom: " . $client['nom_client'] . "<br>";
//     echo "Client Prenom: " . $client['prenom_client'] . "<br>";
//     echo "Client Telephone: " . $client['telephone_client'] . "<br>";
//     echo "Client Username: " . $client['username'] . "<br>";
//     echo "Client Password: " . $client['password'] . "<br>";
//     echo "<hr>";
// }

//setClient("titi","titi","12345678","titi236","titi");

?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChatDITI3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<table class="table table-primary table-bordered w-75 mt-5 offset-2">

    <tr>
        <?php foreach ($clients[0] as $cli=>$index) { ?>
            <th><?= $cli ?></th>
        <?php   } ?>
    </tr>

    <?php foreach ($clients as $client) { ?>
        <tr>
            <?php foreach ($client as $cli) { ?>
                <td><?= $cli ?></td>
            <?php   } ?>
        </tr>
    <?php } ?>

</table>







</table>
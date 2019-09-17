<?php

session_start();

include __DIR__.'/hello_my_db.php';

if(!empty($_POST)){




    $sql = "SELECT id FROM b_clients WHERE name=? AND surname=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['name'], $_POST['surname']]);
    $id = $stmt->fetch();

   if(!isset($id['id'])) {
        //naujas
        $stmt = $pdo->prepare ("INSERT INTO b_clients (name, surname)
        VALUES(?, ?);");
        $stmt->execute([$_POST['name'], $_POST['surname']]);

        $sql = "SELECT LAST_INSERT_ID();";
        $stmt = $pdo->query($sql);
        $last_id = $stmt->fetch();
        $client_id = array_shift($last_id);
        //naujo pabaiga
   }
   else {
    $client_id = $id['id'];
   }

    $stmt = $pdo->prepare ("INSERT INTO b_accounts (number, amount, client_id)
    VALUES(?, ?, ?);");

    $stmt->execute([rand(1000000, 9999999), 0, $client_id]);


    header('Location: http://localhost/_36/Bankas/');/*po posto reikia puslapį persiųsti */
    die(); //naršykle daugiau kieko negaus - tegu eina dirbti
}
?>

    <form action="" method="POST">
    Vardas:<br>
    <input type="text" name="name">
    <br>
    Pavarde:<br>
    <input type="text" name="surname">
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
<?php


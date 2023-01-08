<?php
/**
|***************************************************************************| NEW TRANS |***************************************************************************|
 */
if (isset($_POST["userId"]) && isset($_POST["montant"]) && isset($_POST["devise"]) && isset($_POST["question"]) && isset($_POST["reponse"]) && isset($_POST["userName"])) {
    session_start();
    $transaction->id_emetteur = $_SESSION['currentUser']['id'];
    $transaction->id_recepteur = $_POST['userId'];
    $transaction->montant = $_POST['montant'];
    $transaction->devise = $_POST['devise'];
    $transaction->question = $_POST['question'];
    $transaction->reponse = $_POST['reponse'];

    $transactionJSON = json_encode($transaction);

    // SAVING TRANSACTION
    $url = "mysql:host=localhost:3306;dbname=rsd418";
    try {
        $conn = new PDO($url, 'ange', 'angetekeu');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO rsd418.transaction (id_emetteur, id_recepteur, montant, devise , question , reponse) " .
        "VALUES (" . $transaction->id_emetteur . ", " . $transaction->id_recepteur . ", " . $transaction->montant . ", '" . $transaction->devise . "', '" . $transaction->question . "', '" . $transaction->reponse . "')";

        $conn->exec($sql);
        // echo "<main style=\"margin: auto; width: 25rem;\">" .
        //     $transactionJSON .
        //     "<br/><br/><a href=\"http://transaction.cm\" style=\"font-size: 1.3rem;\"> < Back To The Register</a>" .
        //     "</main>";
        header("Location: http://transaction.cm");

    } catch (PDOException $e) {
        $message = $e->getMessage();
        echo $message;
        // header("Location: http://transaction.cm/new-transaction?message=" . $message);
    }
} else {
    header("Location: http://transaction.cm/new-transaction");
}

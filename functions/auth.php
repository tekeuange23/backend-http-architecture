<?php
/**
|***************************************************************************| SIGN UP |***************************************************************************|
 */
if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["date_naissance"]) && isset($_POST["ville"]) && isset($_POST["pays"]) && isset($_POST["signup"])) {
    $user->nom = $_POST['nom'];
    $user->prenom = $_POST['prenom'];
    $user->login = $_POST['login'];
    $user->password = $_POST['password'];
    $user->date_naissance = $_POST['date_naissance'];
    $user->ville = $_POST['ville'];
    $user->pays = $_POST['pays'];

    $userJSON = json_encode($user);

    // SAVING
    $url = "mysql:host=localhost:3306;dbname=rsd418";
    try {
        $conn = new PDO($url, 'ange', 'angetekeu');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO rsd418.user (nom, prenom, login, password , date_naissance, ville, pays) " .
        "VALUES ('" . $user->nom . "', '" . $user->prenom . "', '" . $user->login . "', '" . $user->password . "', '" . $user->date_naissance . "', '" . $user->ville . "', '" . $user->pays . "')";

        $conn->exec($sql);
        // echo "<main style=\"margin: auto; width: 25rem;\">" .
        //     $userJSON .
        //     "<br/><br/><a href=\"http://phpserver.cm\" style=\"font-size: 1.3rem;\"> < Back To The Register</a>" .
        //     "</main>";
        header("Location: http://phpserver.cm/signin");

    } catch (PDOException $e) {
        $message = $e->getMessage();
        header("Location: http://phpserver.cm/signup?message=" . $message);
    }
} else if (isset($_POST["signup"])) {
    header("Location: http://phpserver.cm/signup");
}

/**
|***************************************************************************| SIGN IN |***************************************************************************|
 */
if (isset($_POST["login"]) && isset($_POST["password"]) && !isset($_POST["nom"]) && !isset($_POST["prenom"]) && !isset($_POST["date_naissance"]) && !isset($_POST["ville"]) && !isset($_POST["pays"]) && isset($_POST["signin"])) {
    $user->login = $_POST['login'];
    $user->password = $_POST['password'];

    // SAVING
    $url = "mysql:host=localhost:3306;dbname=rsd418";
    try {
        $conn = new mysqli('localhost', 'ange', 'angetekeu', 'rsd418');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM rsd418.user WHERE login='" . $user->login . "' AND password='" . $user->password . "'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $connectedUser['id'] = $row["id"];
                $connectedUser['nom'] = $row["nom"];
                $connectedUser['prenom'] = $row["prenom"];
                $connectedUser['date_naissance'] = $row["date_naissance"];
                $connectedUser['login'] = $row["login"];
                // $connectedUser['password'] = $row["id"];
                $connectedUser['date_naissance'] = $row["date_naissance"];
                $connectedUser['ville'] = $row["ville"];
                $connectedUser['pays'] = $row["pays"];

                session_start();
                session_regenerate_id();
                $_SESSION['currentUser'] = $connectedUser;
                $_SESSION["password"] = sha1($connectedUser['password']); // call sha1() function

                setcookie('currentUser', $connectedUser, time() + 365 * 24 * 3600, null, '/', false, true); // On écrit un cookie
                setcookie('myname', 'myname', time() + 365 * 24 * 3600, null, '/', false, true); // On écrit un cookie
                // echo json_encode($connectedUser);
                // echo json_encode($_SESSION);
                header("Location: http://phpserver.cm");
            }
        } else {
            header("Location: http://phpserver.cm/signin");
        }
        $conn->close();

    } catch (PDOException $e) {
        $message = $e->getMessage();
        echo $message;
        echo $user;
        header("Location: http://phpserver.cm/signin?message=" . $message);
    }

    $conn = null;

} else if (isset($_POST["signin"])) {
    header("Location: http://phpserver.cm/signin");
}

/**
|***************************************************************************| LOG-OUT |***************************************************************************|
 */
if (isset($_POST["logout"])) {
    if ($_POST["logout"] == 'logout') {

        session_start();
        session_unset();
        session_destroy();
        // setcookie("currentUser", "", time() - 3600);
        // print_r(json_encode($_SESSION));
        // print_r(json_encode($_COOKIE));
        // echo "<script>alert('HAH')</script>";
        header("Location: http://phpserver.cm/signin");
    }
}

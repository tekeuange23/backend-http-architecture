<?php
if (isset($_POST["userName"])) {
    session_start();
    $currentUserId = $_SESSION['currentUser']['id'];
    $userName = $_POST["userName"];
    $output = '';
    try {
        $conn = new mysqli('localhost', 'ange', 'angetekeu', 'rsd418');
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

        $result = mysqli_query($conn, "SELECT * FROM rsd418.user WHERE (user.nom LIKE '%" . $userName . "%' OR user.prenom LIKE '%" . $userName . "%')" . " AND user.id <> '" . $currentUserId . "' LIMIT 7");
        $output = '<ul class="list-unstyled">';
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output .= '<li class="mb-2 text-white" style="cursor: pointer;">' . $row['id'] . "- " . $row['prenom'] . " " . $row['nom'] . '</li>';
            }
        } else {
            $output = '';
            // $output .= '<li>User not found</li>';
        }
        $output .= '</ul>';
        echo $output;
        $conn->close();

    } catch (PDOException $e) {
        $message = $e->getMessage();
        // header("Location: http://transaction.cm/signin?message=" . $message);
    }

}

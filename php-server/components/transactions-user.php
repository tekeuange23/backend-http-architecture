<div class="p-3 my-3 bg-white rounded shadow-sm">
  <h6 class="pb-2 mb-0 border-bottom border-gray">USER's transactions</h6>

  <div class="pt-3 media text-muted">
    <svg
      class="mr-2 rounded bd-placeholder-img"
      width="32"
      height="33"
      xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="xMidYMid slice"
      focusable="false"
      role="img"
      aria-label="Placeholder: 32x32">
      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="<?php echo ($_GET['user'] == $_SESSION['currentUser']['id']) ? '#6f42c1' : '#007bff' ?>" />
    </svg>

    <div class="pb-3 mb-0 media-body small lh-125 border-bottom border-gray">
      <div class="d-flex justify-content-between align-items-center w-100">
        <strong class="text-gray-dark"><?php echo $_GET['nom']; ?></strong>
      </div>
      <span class="mt-1 d-inline-block">
        <i class="fas fa-map-marker-alt"></i>
        <?php echo $_GET['ville'] . ' - ' . $_GET['pays']; ?>
      </span>
    </div>
  </div>
<?php
if (isset($_GET["user"])) {
    $userId = $_GET["user"];
    try {
        $conn = new mysqli('localhost', 'ange', 'angetekeu', 'rsd418');
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $result = $conn->query("SELECT t.id as id, CONCAT(u2.prenom, ' ', u2.nom) as nr, u2.ville as vr, u2.pays as pr, montant, devise" .
            " FROM transaction t " .
            " INNER JOIN user u1 ON t.id_emetteur = u1.id " .
            " INNER JOIN user u2 ON t.id_recepteur = u2.id" .
            " WHERE t.id_emetteur=" . $userId);
        if ($result->num_rows > 0) {?>
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom Recepteur</th>
                      <th scope="col">Ville Recepteur</th>
                      <th scope="col">Pays Recepteur</th>
                      <th scope="col">Montant</th>
                      <th scope="col">Devise</th>
                    </tr>
                  </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()) {?>
                    <tr>
                      <th scope="row"><?php echo $row['id']; ?></th>
                      <td><?php echo $row['nr']; ?></td>
                      <td><?php echo $row['vr']; ?></td>
                      <td><?php echo $row['pr']; ?></td>
                      <td><?php echo $row['montant']; ?></td>
                      <td><?php echo $row['devise']; ?></td>
                    </tr>
<?php }?>
                </tbody>
                </table>
<?php }
        $conn->close();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        // echo $message;
        header("Location: http://transaction.cm/signin?message=" . $message);
    }?>

<?php
} else {
    header("Location: http://transaction.cm/");
}?>
</div>

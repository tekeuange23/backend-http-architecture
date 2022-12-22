<div class="p-3 my-3 bg-white rounded shadow-sm">
  <h6 class="pb-2 mb-0 border-bottom border-gray">Users</h6>
<?php
try {
    $conn = new mysqli('localhost', 'ange', 'angetekeu', 'rsd418');
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
    $result = $conn->query("SELECT * FROM rsd418.user");
    while ($row = $result->fetch_assoc()) {
        ?>
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
                <rect width="100%" height="100%" fill="<?php echo ($row['id'] == $_SESSION['currentUser']['id']) ? '#6f42c1' : '#007bff' ?>" />
                <!-- <text x="50%" y="50%" fill="<?php echo ($row['id'] == $_SESSION['currentUser']['id']) ? '#6f42c1' : '#007bff' ?>" dy=".3em">32x32</text> -->
              </svg>

              <div class="pb-3 mb-0 media-body small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                  <strong class="text-gray-dark"><?php echo $row['nom']; ?></strong>
                  <a href="/transactions?<?php echo 'user=' . $row['id'] . '&nom=' . $row['nom'] . '&pays=' . $row['pays'] . '&ville=' . $row['ville']; ?>">see</a>

                </div>
                <!-- <span class="mt-1 d-inline-block">@<?php echo $row['login']; ?></span> | -->
                <span class="mt-1 d-inline-block"> <i class="fas fa-map-marker-alt"></i> <?php echo $row['ville'] . ' - ' . $row['pays']; ?></span>
              </div>
            </div>

<?php
}

    $conn->close();
} catch (PDOException $e) {
    $message = $e->getMessage();
    // header("Location: http://phpserver.cm/signin?message=" . $message);
}

?>

  <small class="mt-3 text-right d-block">
    <a href="#">All suggestions</a>
  </small>
</div>
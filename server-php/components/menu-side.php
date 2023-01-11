<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
  <i class="fas fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-content">
    <div class="sidebar-brand">
      <a href="http://127.0.0.1">HOME</a>
      <div id="close-sidebar">
        <i class="fas fa-times"></i>
      </div>
    </div>
    <div class="sidebar-header">
      <div class="user-pic">
        <img
          class="img-responsive img-rounded"
          src="../images/user.jpg"
          alt="User picture"
        />
      </div>
      <div class="user-info">
        <span class="user-name">
        <!-- ECHO NAME -->
        <?php echo $_SESSION['currentUser']['prenom']; ?>
        <?php echo $_COOKIE['myname']; ?>
        <strong>
          <?php echo $_SESSION['currentUser']['nom']; ?>
        </strong>
        </span>
        <span class="user-role">User</span>
        <span class="user-status">
          <i class="fa fa-circle"></i>
          <span>Online</span>
        </span>
      </div>
    </div>
    <div class="sidebar-search">
      <div>
        <div class="input-group">
          <input type="text" class="form-control search-menu" placeholder="Search..." />
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="fa fa-search" aria-hidden="true"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
          <span>General</span>
        </li>
        <li class="sidebar-dropdown">
          <a href="/">
            <i class="fa fa-users"></i>
            <span>Users</span>
          </a>
        </li>
        <li class="sidebar-dropdown">
          <a href="/new-transaction">
            <i class="fa fa-share-square"></i>
            <!-- <i class="fa fa-euro-sign"></i> -->
            <span>Transaction</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- sidebar-footer  -->
  <div class="sidebar-footer">
    <a href="#">
      <i class="fa fa-bell"></i>
      <span class="badge badge-pill badge-warning notification">3</span>
    </a>
    <a href="#">
      <i class="fa fa-envelope"></i>
      <span class="badge badge-pill badge-success notification">7</span>
    </a>
    <a href="#">
      <i class="fa fa-cog"></i>
      <span class="badge-sonar"></span>
    </a>
    <a href="#">
      <!-- <i class="fa fa-power-off"></i> -->
    <form action="../functions/auth.php" method="POST">
      <input type="text" hidden name="logout" value="logout">

      <button type="submit">
        <i class="fa fa-power-off"></i>
      </button>
    </form>
    </a>
  </div>
</nav>

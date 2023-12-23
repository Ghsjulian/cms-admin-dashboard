<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="src/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/animation.css" />
    <link rel="stylesheet" href="css/index.css" />
    <title>Admin Dashboard | Manage All Students</title>
  </head>
  <body>
    <header>
      <h3 class="logo">Dashboard</h3>
      <nav>
        <a href="#">Home</a>
        <a href="#">Add User</a>
        <a href="#">Notification</a>
        <a href="#">MarkSheets</a>
        <a href="#">All Users</a>
      </nav>
      <span id="mobile-menu" onclick="OpenMenu()"
        ><i class="bi bi-list"></i
      ></span>
      <div style="display: none" id="menu" data="0" class="mobileMenu">
        <li>
          <a href="Main.html"><i class="bi bi-grid"></i>Dashboard</a>
        </li>
        <li>
          <a href="http://localhost:8000/Bd_Result/Admin/login.php"
            ><i class="bi bi-bell"></i>Notification</a
          >
          <span id="budget">3</span>
        </li>
        <li>
          <a href="#"><i class="bi bi-person-plus"></i>All Users</a>
        </li>
        <li>
          <a href="add-user.php"><i class="bi bi-person-plus"></i>Add Users</a>
        </li>
        <li>
          <a href="marksheet.html"><i class="bi bi-pen"></i>MarkSheets</a>
        </li>
        <li>
          <a href="logout.php"><i class="bi bi-arrow-left-circle"></i>Logout</a>
        </li>
      </div>
    </header>
    <div class="all-user">
      <div class="container">
        <h1>All Students</h1>
        <div class="task-area"></div>
        <div id="err-id"></div>
      </div>
    </div>
    <script src="js/student.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>

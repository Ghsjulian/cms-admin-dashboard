<?php
session_start();
$session = $_SESSION['admin'];
if (isset($session['user_role'])) {
  header('location:index.html');
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
  <title>
    G H S J U L I A N | Ghs Julian | Web Developer And Designer | Ghs Julian
    Programmer | PHP Developer & Programmer | Programmer Ghs Julian | Web Site
    Programmer | Computer Oparator | Developer | Hacking | Hacker Developer |
    Google | Facebook | Youtube | Insagram | Upwork | Ghs | Julian
  </title>
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1.0, user-scalable=0"
  />
<link rel="stylesheet" href="css/login.css" />
</head>
<body>
<div id="login" class="login">
<center>
<h1>Admin L o g i n</h1>
<form id="myfrm" action="" method="POST">
<p id="_error"></p>
<label for="username">
<i class="fas fa-user"></i>
</label>
<input
type="text"
name="action"
placeholder="Enter Name "
value="Login"
id="action"
autocomplete="on"
hidden="true"
/>
<input
type="text"
name="user_email"
placeholder="Enter Phone/Email"
id="email"
value="ghsjulian@gmail.com"
autocomplete="on"
onfocus="true"
/>
<input
type="password"
name="user_password"
placeholder="Enter Password"
id="password"
autocomplete="on"
onfocus="true"
/>
<button type="submit" id="__btn">Login</button>
</form>
<strong id="info"
><a href="index.html">Don't Have An Account?</a></strong
>
</center>
</div>
<script type="module" src="js/login.js"></script>
</body>
</html>
<?php
}
?>
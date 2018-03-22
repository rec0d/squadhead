<?php

session_start();

include_once('../includes/connection.php');

if (isset($_SESSION['logged_in'])) {
  //display index
}else {
  //display login
  if (asset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty/$username) or empty($password)) {
      $error = 'All fields are required!';
    } else {
      $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");

      $querey->bindValue(1, $username);
      $querey->bindValue(2, $password);

      $query->execute();

      $num = $query->rowCount();

      if ($num ==1) {
        // user entered corrent details
      } else {
        // user entered false details
        $error = 'Incorrect details!'; // 29,30
      }
    }
  }
  ?>

  <html>
  	<head>
  		<title>Squadhead</title>
      <link rel="stylesheet" href="../assets/style.css" />
  	</head>
  	<body>
  		<div class="container">
  			<a href="index.php" id="logo">CMS</a>

        <br /><br />

        <?php if (isset($error)) { ?>
          <small style="color:#aa0000"><?php echo $error; ?><small>
          <br /><br />
        <?php } ?>

        <form action"index.php" method="post" autocomplete="off">
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name=password placeholder="Password" />
          <input type="submit" value="Login" />
  		</div>
  	</body>
  </html>

  <?php
}
?>

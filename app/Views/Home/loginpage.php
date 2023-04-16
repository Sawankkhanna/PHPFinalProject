<!DOCTYPE html>
<html>

<head>
  <title>Library System</title>
  <link rel="stylesheet" href="" />
</head>

<body>
  <?php echo base_url(); ?>
  <div id="main-div">
    <img src="./images/book.png" alt="Logo" />
    <div>
      <form action="/codeigniter4-framework-e3821f9/public/Mainpage/index" method="post">
        <div class="credential">
          <h3>USER ID:</h3>
          <input type="text" id="user" name="userID" placeholder="Enter your user id" minlength="5" maxlength="5"
            required />
        </div>
        <br />
        <div class="credential">
          <h3>PASSWORD:</h3>
          <input type="password" id="pass" name="password" placeholder="Enter your password" minlength="8" maxlength="8"
            required />
        </div>
        <div id="button-div">
          <button type="submit">Log In</button>
          <button type="reset">Clear</button>
        </div>
      </form>
      <!-- <?php
      if (count($_POST) > 0) {
        $userID = $_POST['userID'];
        $password = $_POST['password'];
        include('./php/Login.php');
        $login = new Login($userID, $password);
        $isSuccess = $login->login();
        $message = "";
        if ($isSuccess == 0) {
          $message = "Invalid Username or Password!";
          echo $message;
        } else {
          $message = "Valid Username or Password!";
          sleep(2);
          header("Location: ./php/homepage.php");
        }
      }
      ?> -->
    </div>
  </div>
</body>

</html>
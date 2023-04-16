<html>

<head>
  <title>Issue a Book</title>
  <link rel="stylesheet" href="../styles/main_style.css" />
  <link rel="stylesheet" href="../styles/homepage.css">
</head>

<body>
  <?php include('./header.php'); ?>
  <main>
    <?php include('./sidebar.php'); ?>
    <div id="ticketForm">

      <div id="main-div">

        <form method="post">
          <div id="sourceDestination">
            <div class="userInputs">
              <h3>UserID:</h3>
              <input type="text" class='userid' id="userID" name="userID" maxlength="10" placeholder="Enter your UserID"
                required />
            </div>
            <div class="userInputs">
              <h3>BookID
                <input type="text" id="bookID" name="bookID" maxlength="10" placeholder="Enter your Book ID" required />
            </div>
            <div class="userInputs">
              <h3>Book Name:</h3>
              <input type="text" class='userid' id="bookName" name="bookName" maxlength="10"
                placeholder="Enter Book Name" required />
            </div>
          </div>
          <br />
          <br />
          <div id="dueDate" class="userInputs">
            <h3>DueDate:</h3>
            <input type="date" class='userid' id="date" name="date" value="2023-03-29" min="2023-03-29"
              max="2023-12-31">
            <script>
              document
                .getElementById("date")
                .setAttribute("min", new Date().toJSON().slice(0, 10));
            </script>
          </div>
          <br />
          <div id="button-div">
            <button type="submit">Issue</button>
            <button type="reset">Clear</button>
          </div>
        </form>
        <?php
        if (count($_POST) > 0) {
          $bookID = $_POST['bookID'];
          $userID = $_POST['userID'];
          $bookName = $_POST['bookName'];
          $date = $_POST['date'];

          include('./database.php');
          $db = new Database();
          $query = "INSERT INTO IssuedBook (user_ID, book_ID, book_Name, dueDate) VALUES (?, ?, ?, ?)";
          $stmt = $db->connection->prepare($query);
          $stmt->bind_param("ssss", $bookID, $userID, $bookName, $date);
          $stmt->execute();
          echo "New book issued successfully";
        }
        ?>
      </div>
    </div>
  </main>
</body>

</html>
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
          <div id="sourceDestination" style="
    display: grid">

            <div class="userInputs">
              <h3>BookID:
                <input type="text" id="bookID" name="bookID" maxlength="10" placeholder="Enter BookID" required />
            </div>
            <div class="userInputs">
              <h3>BookName:
                <input type="text" id="BookName" name="BookName" maxlength="10" placeholder="Enter BookName" required />

            </div>

            <div class="userInputs">
              <h3>Author:
                <input type="text" id="Author" name="Author" maxlength="10" placeholder="Enter Author" required />
            </div>
            <div class="userInputs">
              <h3>Price:
                <input type="number" id="Price" name="Price" maxlength="10" placeholder="Enter Price" step="any"
                  required />
            </div>
            <div class="userInputs">
              <h3>Rack No:
                <input type="number" id="RackNo" name="RackNo" maxlength="10" placeholder="Enter Rack No" required />
            </div>
            <div class="userInputs">
              <h3>Status:
                <input type="text" id="Status" name="Status" maxlength="10" placeholder="Enter Status" required />
            </div>
            <div class="userInputs">
              <h3>Edition:
                <input type="number" id="Edition" name="Edition" maxlength="10" placeholder="Enter Edition" required />
            </div>

          </div>
          <br />
          <br />

          <br />
          <div id="button-div">
            <button type="submit">AddBook</button>
            <button type="reset">Clear</button>
          </div>
        </form>
        <?php
        if (count($_POST) > 0) {
          $bookID = $_POST['bookID'];
          $author = $_POST['Author'];
          $bookName = $_POST['BookName'];
          $price = $_POST['Price'];
          $rackNo = $_POST['RackNo'];
          $status = $_POST['Status'];
          $edition = $_POST['Edition'];
          include('./Book.php');
          $book = new Book($bookID, $bookName, $author, $price, $rackNo, $status, $edition);
          $query = "INSERT INTO Book (book_ID, author, bookName, price, rackNo, status, edition) VALUES (?, ?, ?, ?, ?, ?, ?)";
          $book->addBook($query);
          echo "New book added successfully";
        }
        ?>
      </div>
    </div>
  </main>
</body>

</html>
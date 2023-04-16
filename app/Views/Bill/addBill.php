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
              <h3>BillAmount
                <input type="number" step="any" id="amount" name="amount" maxlength="10" placeholder="Enter Amount"
                  required />
            </div>
            <div class="userInputs">
              <h3>Status
                <select name="status" id="status">
                  <option value="unpaid" selected>Not Paid</option>
                  <option value="paid">Paid</option>
                </select>
            </div>
            <div id="dueDate" class="userInputs">
              <h3>DueDate:</h3>
              <input type="date" class='userid' id="date" name="dueDate" min="2023-03-29" max="2023-12-31">
              <script>
                document
                  .getElementById("date")
                  .setAttribute("min", new Date().toJSON().slice(0, 10));
              </script>
            </div>

          </div>
          <br />
          <br />

          <br />
          <div id="button-div">
            <button type="submit">PayBill</button>
            <button type="reset">Clear</button>
          </div>
        </form>
        <?php
        if (count($_POST) > 0) {
          $userID = $_POST['userID'];
          $amount = $_POST['amount'];
          $status = $_POST['status'];
          $dueDate = $_POST['dueDate'];
          include('./Bill.php');
          $bill = new Bill($amount, $dueDate, $userID, $status);
          $query = "INSERT INTO Bill (amount, user_ID, dueDate, status) VALUES (?, ?, ?, ?)";
          $bill->billCreate($query);
          echo "New bill added successfully";
        }
        ?>
      </div>
    </div>
  </main>
</body>

</html>
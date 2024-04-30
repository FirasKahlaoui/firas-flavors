<?php
session_start();

// Username is root
$user = 'root';
$password = '';

// Database name is firasflavors
$database = 'firasflavors';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM messages";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./css/dashboard.css">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr {
          background-color: #f2f2f2;
        }

        input[type="submit"] {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d23a30;
        }
        .table-container {
    margin-top: 120px;
}
    </style>
    <title>Admin Dashboard</title>
</head>
<body>
<div class="navbar-container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
      <h1 class="text-primary m-0">
        <i class="fa fa-utensils me-3"></i>Fira's Flavors
      </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="./admin_dashboard.php" class="nav-item nav-link">Reservations</a>
            <a href="./admin_users.php" class="nav-item nav-link">Users</a>
            <a href="./admin_messages.php" class="nav-item nav-link">Messages</a>
            <a href="./reservation_by_user.php" class="nav-item nav-link">User-Reservations</a>
            <a href="./admin_news_letter" class="nav-item nav-link">News Letter</a>
        </div>
    </div>
  </nav>
</div>

<div class="table-container">
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Action</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['Subject']; ?></td>
      <td><?php echo $row['Message']; ?></td>
      <td>
        <form method="POST" action="delete_message.php">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input type="submit" value="Delete">
        </form>
      </td>
    </tr>
    <?php endwhile; ?>
    <?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
    <?php endwhile; ?>
  <?php else: ?>
    <tr>
      <td colspan="7">No Messages found</td>
    </tr>
  <?php endif; ?>
  </table>
</div>
</body>
</html>

<?php $mysqli->close(); ?>
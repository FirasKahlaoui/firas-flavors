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
$sql = "SELECT * FROM reservation WHERE Email = '" . $_SESSION['email'] . "'";
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

    <link rel="stylesheet" href="./css/reservation.css">

      <!-- Favicon -->
      <link href="./img/vaisselle.png" rel="icon" />


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
    <title>Fira's Flavors</title>
</head>
<body>
<div class="navbar-container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="./index.php" class="navbar-brand p-0">
      <h1 class="text-primary m-0">
        <i class="fa fa-utensils me-3"></i>Fira's Flavors
      </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0 pe-4">
        <a href="index.php" class="nav-item nav-link">Home</a>
        <a href="about.php" class="nav-item nav-link">About</a>
        <a href="service.php" class="nav-item nav-link">Service</a>
        <a href="menu.php" class="nav-item nav-link">Menu</a>
        <a href="contact.php" class="nav-item nav-link">Contact</a>
      </div>
    </div>
  </nav>
</div>

<div class="table-container">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Date Time</th>
      <th>No. of Peoples</th>
      <th>Special</th>
      <th>Action</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['Date_Time']; ?></td>
    <td>
        <?php 
        if ($row['No_Peoples'] == 1) {
            echo '1 People';
        } elseif ($row['No_Peoples'] <= 4) {
            echo $row['No_Peoples'] . ' Peoples';
        } else {
            echo 'More than 4 Peoples';
        }
        ?>
    </td>
      <td><?php echo $row['Special']; ?></td>
      <td>
        <form method="POST" action="delete_reservation.php">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input type="submit" value="Delete">
        </form>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</div>
</body>
</html>

<?php $mysqli->close(); ?>
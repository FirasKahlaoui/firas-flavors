<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firasflavors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Store email in session
    $_SESSION['email'] = $email;

    // Prepare a select statement to check if the email exists and the password matches
    $stmt = $conn->prepare("SELECT * FROM admin WHERE Admin_Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password == $user['Admin_Password']) {
            // Password matches, create session
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['Admin_Email'];
            // Redirect to the index page
            echo "<script>location.href='admin_dashboard.php';</script>";
            exit;
        } else {
            // Password does not match
            $_SESSION['login_error'] = "Invalid password";
        }
    } else {
        // Email does not exist
        $_SESSION['login_error'] = "Email does not exist";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
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
      <!-- Favicon -->
      <link href="./img/vaisselle.png" rel="icon" />
    <link rel="stylesheet" href="./css/admin.css" />

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
    <title>Admin Dashboard</title>
  </head>
  <body>
    <div class="wrapper">
    <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <i class="fa fa-utensils me-3"></i>Fira's Flavors
            </h1>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="" class="nav-item nav-link">Admin Dashboard</a>
            </div>
          </div>
        </nav>
      <!----------------------------- Form box ----------------------------------->
      <div class="form-box">
        <!------------------- login form -------------------------->
        <div class="login-container" id="login">
          <div class="top">
            <header>Admin Login</header>
          </div>
          <?php
            if (isset($_SESSION['email_used'])) {
              echo "<p id='emailUsedMessage' style='color:red; text-align:center;'>" . $_SESSION['email_used'] . "</p>";
              echo "
              <script type='text/javascript'>
                setTimeout(function() {
                  var element = document.getElementById('emailUsedMessage');
                  element.parentNode.removeChild(element);
                }, 3000);
              </script>
              ";
              unset($_SESSION['email_used']);
            }

            if (isset($_SESSION['login_error'])) {
              echo "<p id='loginErrorMessage' style='color:red; text-align:center;'>" . $_SESSION['login_error'] . "</p>";
              echo "
              <script type='text/javascript'>
                setTimeout(function() {
                  var element = document.getElementById('loginErrorMessage');
                  element.parentNode.removeChild(element);
                }, 3000);
              </script>
              ";
              unset($_SESSION['login_error']);
            }
            ?>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="input-box">
            <input
                type="text"
                name="email"
                class="input-field"
                placeholder="Email Address"
                value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"
            />
            <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
              <input type="password" name="password" class="input-field" placeholder="Password" />
              <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
              <input type="submit" class="submit" value="Sign In" name="login" />
            </div>
          </form>
        
        </div>
    <script>
      function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if (i.className === "nav-menu") {
          i.className += " responsive";
        } else {
          i.className = "nav-menu";
        }
      }
    </script>
    <script>
      var a = document.getElementById("loginBtn");
      var x = document.getElementById("login");
      function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
      }
    </script>
  </body>
</html>

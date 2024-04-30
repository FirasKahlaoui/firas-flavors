<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['entered_email'] = $_POST['email'];
    // rest of your form handling code
}

$servername = "";
$username = "root";
$password = "";
$dbname = "firasflavors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
  // Get form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare a select statement to check if the email is already in use
  $stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $_SESSION['email_used'] = "Email is already in use";
  } else {
    // Prepare an insert statement
    $stmt = $conn->prepare("INSERT INTO user (FirstName, LastName, Email, Password) VALUES (?, ?, ?, ?)");

    // Bind the variables to the prepared statement
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
      // Redirect to the login form
      echo "<script>location.href='login.php';</script>";
      exit;
    } else {
      echo "Error: " . $stmt->error;
    }
  }

  // Close the statement
  $stmt->close();
}

// Check if login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
  // Get form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare a select statement to check if the email exists and the password matches
  $stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if ($password == $user['Password']) {
      // Password matches, create session
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $user['FirstName'];
      $_SESSION['email'] = $user['Email'];
      // Redirect to the index page
      echo "<script>location.href='index.php';</script>";
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

<!-- Your HTML code here -->
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
    <link rel="stylesheet" href="./css/login.css" />

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
    <title>Fira's Flavors</title>
  </head>
  <body>
    <div class="wrapper">
    <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="./index.php" class="navbar-brand p-0">
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
              <a href="index.php" class="nav-item nav-link">Home</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="service.php" class="nav-item nav-link">Service</a>
              <a href="menu.php" class="nav-item nav-link">Menu</a>
              
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
          </div>
          <div class="nav-button">
          <button class="btn white-btn" id="loginBtn" onclick="login()">
            Sign In
          </button>
          <button class="btn" id="registerBtn" onclick="register()">
            Sign Up
          </button>
        </div>
        </nav>
      <!----------------------------- Form box ----------------------------------->
      <div class="form-box">
        <!------------------- login form -------------------------->
        <div class="login-container" id="login">
          <div class="top">
            <span
              >Don't have an account?
              <a href="#" onclick="register()">Sign Up</a></span
            >
            <header>Login</header>
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
                type="email"
                name="email"
                class="input-field"
                placeholder="Email Address"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                required
                value="<?php echo isset($_SESSION['entered_email']) ? $_SESSION['entered_email'] : '' ?>"
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
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
          <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
            <div class="top">
              <span
                >Have an account? <a href="#" onclick="login()">Login</a></span
              >
              <header>Sign Up</header>
            </div>
            <div class="two-forms">
              <div class="input-box">
                <input
                  type="text"
                  class="input-field"
                  placeholder="Firstname"
                  name="firstname"
                  id="firstname"
                  pattern="[A-Za-z]+"
                  required
                />
                <i class="bx bx-user"></i>
              </div>
              <div class="input-box">
                <input
                  type="text"
                  class="input-field"
                  placeholder="Lastname"
                  name="lastname"
                  id="lastname"
                  pattern="[A-Za-z]+"
                  required
                />
                <i class="bx bx-user"></i>
              </div>
            </div>
            <div class="input-box">
              <input
                type="email"
                class="input-field"
                placeholder="Email"
                name="email"
                id="email"
                required
              />
              <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
              <input
                type="password"
                class="input-field"
                placeholder="Password"
                name="password"
                id="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required
              />
              <i class="bx bx-lock-alt"></i>
                <div class="error" style="display: none; color: red;"></div>
              </div>
            <div class="input-box">
            <input type="submit" class="submit" value="Register" name="register" />
            </div>
            
          </form>
        </div>
      </div>
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
      var b = document.getElementById("registerBtn");
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
      }
      function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
      }
    </script>
    <script>
document.getElementById('register').addEventListener('submit', function(event) {
    var firstname = document.getElementById('firstname');
    var lastname = document.getElementById('lastname');
    var email = document.getElementById('email');
    var password = document.getElementById('password');

    if (!firstname.validity.valid) {
        var error = firstname.parentNode.getElementsByClassName('error')[0];
        error.textContent = 'Please enter a valid first name.';
        error.style.display = 'block';
        event.preventDefault();
    }

    if (!lastname.validity.valid) {
        var error = lastname.parentNode.getElementsByClassName('error')[0];
        error.textContent = 'Please enter a valid last name.';
        error.style.display = 'block';
        event.preventDefault();
    }

    if (!email.validity.valid) {
        var error = email.parentNode.getElementsByClassName('error')[0];
        error.textContent = 'Please enter a valid email.';
        error.style.display = 'block';
        event.preventDefault();
    }

    if (!password.validity.valid) {
        var error = password.parentNode.getElementsByClassName('error')[0];
        error.textContent = 'Please enter a valid password.';
        error.style.display = 'block';
        event.preventDefault();
    }
});
</script>
  </body>
</html>

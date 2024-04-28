<?php
session_start();

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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
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
    <title>Login & Registration</title>
  </head>
  <body>
    <div class="wrapper">
      <nav class="nav">
        <div class="nav-logo">
          <p>LOGO .</p>
        </div>
        <div class="nav-menu" id="navMenu">
          <ul>
            <li><a href="#" class="link active">Home</a></li>
            <li><a href="#" class="link">Blog</a></li>
            <li><a href="#" class="link">Services</a></li>
            <li><a href="#" class="link">About</a></li>
          </ul>
        </div>
        <div class="nav-button">
          <button class="btn white-btn" id="loginBtn" onclick="login()">
            Sign In
          </button>
          <button class="btn" id="registerBtn" onclick="register()">
            Sign Up
          </button>
        </div>
        <div class="nav-menu-btn">
          <i class="bx bx-menu" onclick="myMenuFunction()"></i>
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
                echo "<p style='color:red;'>" . $_SESSION['email_used'] . "</p>";
                unset($_SESSION['email_used']);
            }
          ?>
          <div class="input-box">
            <input
              type="text"
              class="input-field"
              placeholder="Username or Email"
            />
            <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="submit" class="submit" value="Sign In" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="login-check" />
              <label for="login-check"> Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Forgot password?</a></label>
            </div>
          </div>
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
                />
                <i class="bx bx-user"></i>
              </div>
            </div>
            <div class="input-box">
              <input
                type="text"
                class="input-field"
                placeholder="Email"
                name="email"
                id="email"
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
              />
              <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
              <input type="submit" class="submit" value="Register" />
            </div>
            <div class="two-col">
              <div class="one">
                <input type="checkbox" id="register-check" />
                <label for="register-check"> Remember Me</label>
              </div>
              <div class="two">
                <label><a href="#">Terms & conditions</a></label>
              </div>
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
  </body>
</html>
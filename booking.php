<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fira's Flavors</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

      <!-- Favicon -->
      <link href="./img/vaisselle.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .dropdown-menu {
        right: -32px !important;

    }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
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
              <a href="index.php" class="nav-item nav-link active">Home</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="service.php" class="nav-item nav-link">Service</a>
              <a href="menu.php" class="nav-item nav-link">Menu</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Pages</a
                >
                <div class="dropdown-menu m-0">
                  <a href="booking.php" class="dropdown-item">Booking</a>
                  <a href="team.php" class="dropdown-item">Our Team</a>
                  <a href="testimonial.php" class="dropdown-item"
                    >Testimonial</a
                  >
                </div>
              </div>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <?php
                  session_start();
                  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true):
                  ?>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  Profile
              </a>
              <div class="dropdown-menu dropdown-menu-end m-0">
                  <a class="dropdown-item dropdown-item-highlight">Name: <?php echo $_SESSION['username']; ?></a>
                  <a class="dropdown-item dropdown-item-highlight">Email: <?php echo $_SESSION['email']; ?></a>
                  <a href="reservation.php" class="dropdown-item">My Reservations</a>
                  <a href="logout.php" class="dropdown-item">Logout</a>
              </div>
            </div>
            <?php
                  else:
                  ?>
            <a href="login.php" class="btn btn-primary py-2 px-4">Login</a>
            <?php
                  endif;
                  ?>
          </div>
        </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <div id='successModal' style='display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);'>
    <div style='background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%; text-align: center;'>
        <div id='loading' style='display: block;'>Loading...</div>
        <div id='successMessage' style='display: none;'>Reservation made successfully</div>
    </div>
</div>
              <?php
                if (session_status() == PHP_SESSION_NONE) {
                  session_start();
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // Check if the user is logged in
                  if(!isset($_SESSION['username'])) {
                    // If not, redirect them to the login page
                    header("Location: login.php");
                    exit();
                  } else {
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

                    // Get form data
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    // Get the date and time from the form
                    $datetime = $_POST['datetime'];

                    // Create a DateTime object from the form data
                    $datetime = DateTime::createFromFormat('m/d/Y h:i A', $datetime);

                    // Format the DateTime object as 'Y-m-d H:i:s'
                    $datetime = $datetime->format('Y-m-d H:i:s');
                    
                    $noOfPeople = $_POST['noOfPeople'];
                    $specialRequest = $_POST['specialRequest'];

                    // Prepare an insert statement
                    $stmt = $conn->prepare("INSERT INTO reservation (Name, Email, Date_Time, No_Peoples, Special) VALUES (?, ?, ?, ?, ?)");

                    // Bind the variables to the prepared statement
                    $stmt->bind_param("sssis", $name, $email, $datetime, $noOfPeople, $specialRequest);

                    // Execute the statement
                    if ($stmt->execute()) {
                      echo "
                      <script type='text/javascript'>
                        var modal = document.getElementById('successModal');
                        modal.style.display = 'block';
                        setTimeout(function() {
                          modal.style.display = 'none';
                        }, 5000);
                      </script>
                      ";
                    } else {
                      echo "Error: " . $stmt->error;
                    }

                    // Close the statement and connection
                    $stmt->close();
                    $conn->close();
                  }
                }
              ?>
                        <form id="reservationForm">
                          <div class="row g-3">
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input 
                                  type="text" 
                                  class="form-control" 
                                  id="name" 
                                  name="name" 
                                  placeholder="Your Name" 
                                  pattern="[A-Za-z\s]+" 
                                  required
                                  value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>"
                                >
                                <label for="name">Your Name</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input 
                                  type="email" 
                                  class="form-control" 
                                  id="email" 
                                  name="email" 
                                  placeholder="Your Email" 
                                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                                  required
                                  value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"
                                >
                                <label for="email">Your Email</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="datetime" name="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" required/>
                                <label for="datetime">Date & Time</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <select class="form-select" id="select1" name="noOfPeople">
                                  <option value="1 People">People 1</option>
                                  <option value="2 Peoples">People 2</option>
                                  <option value="3 Peoples">People 3</option>
                                  <option value="4 Peoples">People 4</option>
                                  <option value="More than 4 Peoples">More than 4</option>
                                </select>
                                <label for="select1">No Of People</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" name="specialRequest" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->
        
      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Company
              </h4>
              <a class="btn btn-link" href="">About Us</a>
              <a class="btn btn-link" href="">Contact Us</a>
              <a class="btn btn-link" href="">Reservation</a>
              <a class="btn btn-link" href="">Privacy Policy</a>
              <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Contact
              </h4>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>123 Street, Ariana City,
                Tunisia
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+216 58627553
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>kahlaouifiras2017@gmail.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Opening
              </h4>
              <h5 class="text-light fw-normal">Monday - Saturday</h5>
              <p>09AM - 09PM</p>
              <h5 class="text-light fw-normal">Sunday</h5>
              <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Newsletter
              </h4>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control border-primary w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Fira's Flavors</a>, All
                Right Reserved. Designed By Firas Kahlaoui
                <!--<a class="border-bottom" href="https://htmlcodex.com"> -->
                </a>
                <br /><br />
                Distributed By Firas Kahlaoui<!--<a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>-->
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
      document.getElementById('reservationForm').addEventListener('submit', function(e) {
        e.preventDefault();
    
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'index.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
        xhr.onload = function() {
          if (this.status == 200) {
            var modal = document.getElementById('successModal');
            var loading = document.getElementById('loading');
            var successMessage = document.getElementById('successMessage');
            modal.style.display = 'block';
            setTimeout(function() {
              loading.style.display = 'none';
              successMessage.style.display = 'block';
              setTimeout(function() {
                modal.style.display = 'none';
                document.getElementById('reservationForm').reset(); // Reset the form
              }, 2000); // Hide the modal after 2 seconds
            }, 1000); // Show the success message after 1 second
          }
        };
    
        var formData = new FormData(document.getElementById('reservationForm'));
        xhr.send(new URLSearchParams(formData).toString());
      });
    </script>
</body>

</html>
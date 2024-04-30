<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Fira's Flavors</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
    .dropdown-menu {
        right: -32px !important;

    }
    </style>
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Contact Us
            </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                  class="breadcrumb-item text-white active"
                  aria-current="page"
                >
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Contact Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Contact Us
            </h5>
            <h1 class="mb-5">Contact For Any Query</h1>
          </div>
          <div class="row g-4">
            <div class="col-12">
              <div class="row gy-4">
                <div class="col-md-4">
                  <h5
                    class="section-title ff-secondary fw-normal text-start text-primary"
                  >
                    Booking
                  </h5>
                  <p>
                    <i class="fa fa-envelope-open text-primary me-2"></i
                    >book@example.com
                  </p>
                </div>
                <div class="col-md-4">
                  <h5
                    class="section-title ff-secondary fw-normal text-start text-primary"
                  >
                    General
                  </h5>
                  <p>
                    <i class="fa fa-envelope-open text-primary me-2"></i
                    >info@example.com
                  </p>
                </div>
                <div class="col-md-4">
                  <h5
                    class="section-title ff-secondary fw-normal text-start text-primary"
                  >
                    Technical
                  </h5>
                  <p>
                    <i class="fa fa-envelope-open text-primary me-2"></i
                    >tech@example.com
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
              <iframe
                class="position-relative rounded w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0"
                style="min-height: 350px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
            <div class="col-md-6">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                <?php
                if (session_status() == PHP_SESSION_NONE) {
                  session_start();
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];

                  // Prepare an insert statement
                  $stmt = $conn->prepare("INSERT INTO messages (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)");

                  // Bind the variables to the prepared statement
                  $stmt->bind_param("ssss", $name, $email, $subject, $message);

                  // Execute the statement
                  if ($stmt->execute()) {
                    echo "<div id='successMessage style='color:green; text-align:center'>Message sent successfully</div>";
                    echo "
                    <script type='text/javascript'>
                        setTimeout(function() {
                            var element = document.getElementById('successMessage');
                            element.parentNode.removeChild(element);
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
                ?>

                <form method="post">
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
                        />
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
                        />
                        <label for="email">Your Email</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input 
                          type="text" 
                          class="form-control" 
                          id="subject" 
                          name="subject" 
                          placeholder="Subject" 
                          required
                        />
                        <label for="subject">Subject</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea 
                          class="form-control" 
                          placeholder="Leave a message here" 
                          id="message" 
                          name="message" 
                          style="height: 150px" 
                          required
                        ></textarea>
                        <label for="message">Message</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100 py-3" type="submit">
                        Send Message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact End -->

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
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
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
  </body>
</html>

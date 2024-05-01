<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Fira's Flavors</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <style>
    .dropdown-menu {
        right: -32px !important;

    }
    .dropdown-item-highlight {
    background-color: #FFD700;
    }
    </style>
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
              <a href="index.php" class="nav-item nav-link active">Home</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="service.php" class="nav-item nav-link">Service</a>
              <a href="menu.php" class="nav-item nav-link">Menu</a>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                  <a href="booking.php" class="dropdown-item">Booking</a>
                  <a href="team.php" class="dropdown-item">Our Team</a>
                  <a href="testimonial.php" class="dropdown-item">Testimonial</a>
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
          <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">
                  Enjoy Our<br />Delicious Meal
                </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                Indulge in a culinary journey like no other. At Fira's Flavors, we craft each dish with passion
    and precision, ensuring every bite is a memorable experience. From savory starters to delectable
    desserts, our menu offers a symphony of flavors to tantalize your taste buds. Join us for an
    unforgettable dining experience that celebrates the art of food.
                </p>
                <a
                  href="./booking.php"
                  class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                  >Book A Table</a
                >
              </div>
              <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/hero.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Service Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                  <h5>Master Chefs</h5>
                  <p>
                  Delight in culinary excellence curated by our team of master chefs, whose passion and expertise elevate each dish to a true masterpiece.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                  <h5>Quality Food</h5>
                  <p>
                  Indulge in a culinary journey of uncompromising quality, where every dish is crafted with the finest ingredients to exceed your expectations.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                  <h5>Online Order</h5>
                  <p>
                  Order from our extensive menu online, bringing the flavors of our restaurant directly to your doorstep with just a few clicks.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                  <h5>24/7 Service</h5>
                  <p>
                  Experience unparalleled convenience with our round-the-clock service, ensuring you can enjoy our delectable offerings anytime, anywhere.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Service End -->

      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <div class="row g-3">
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.1s"
                    src="img/about-1.jpg"
                  />
                </div>
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.3s"
                    src="img/about-2.jpg"
                    style="margin-top: 25%"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.5s"
                    src="img/about-3.jpg"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.7s"
                    src="img/about-4.jpg"
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <h5
                class="section-title ff-secondary text-start text-primary fw-normal"
              >
                About Us
              </h5>
              <h1 class="mb-4">
                Welcome to
                <i class="fa fa-utensils text-primary me-2"></i>Fira's Flavors
              </h1>
              <p class="mb-4">
                
Fira's Flavors is more than just a restaurant; it's a culinary journey through the vibrant tastes of the Mediterranean. Nestled in the heart of the city, our cozy establishment offers a fusion of traditional and contemporary dishes, each crafted with care and passion by our skilled chefs. 
              </p>
              <p class="mb-4">
              With a warm and inviting ambiance, Fira's Flavors promises an unforgettable dining experience for food lovers seeking authenticity and innovation.
              </p>
              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      15
                    </h1>
                    <div class="ps-4">
                      <p class="mb-0">Years of</p>
                      <h6 class="text-uppercase mb-0">Experience</h6>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      50
                    </h1>
                    <div class="ps-4">
                      <p class="mb-0">Popular</p>
                      <h6 class="text-uppercase mb-0">Master Chefs</h6>
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Menu Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-5">Most Popular Items</h1>
          </div>
          <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul
              class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5"
            >
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                  data-bs-toggle="pill"
                  href="#tab-1"
                >
                  <i class="fa fa-coffee fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Popular</small>
                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-2"
                >
                  <i class="fa fa-hamburger fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Special</small>
                    <h6 class="mt-n1 mb-0">Launch</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 me-0 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-3"
                >
                  <i class="fa fa-utensils fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Lovely</small>
                    <h6 class="mt-n1 mb-0">Dinner</h6>
                  </div>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->

      <!-- Reservation Start -->
      <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" id="Resrvation" >
        <div class="row g-0">
          <div class="col-md-6">
            <div class="video">
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button>
            </div>
          </div>
          <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
              <h5
                class="section-title ff-secondary text-start text-primary fw-normal"
              >
                Reservation
              </h5>
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
                        }
                          else {
                            echo "Error: " . $stmt->error;
                          }

                          // Close the statement and connection
                          $stmt->close();
                          $conn->close();
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

      <div
        class="modal fade"
        id="videoModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content rounded-0">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <!-- 16:9 aspect ratio -->
              <div class="ratio ratio-16x9">
                <iframe
                  class="embed-responsive-item"
                  src=""
                  id="video"
                  allowfullscreen
                  allowscriptaccess="always"
                  allow="autoplay"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Reservation Start -->

      <!-- Team Start -->
      <div class="container-xxl pt-5 pb-3">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Team Members
            </h5>
            <h1 class="mb-5">Our Master Chefs</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-1.jpg" alt="" />
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-2.jpg" alt="" />
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-3.jpg" alt="" />
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-4.jpg" alt="" />
                </div>
                <h5 class="mb-0">Full Name</h5>
                <small>Designation</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

      <!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="text-center">
      <h5 class="section-title ff-secondary text-center text-primary fw-normal">
        Testimonial
      </h5>
      <h1 class="mb-5">Our Clients Say!!!</h1>
    </div>
    <div class="owl-carousel testimonial-carousel">
      <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>
          "The food at Fira's Flavors is absolutely amazing! Every dish is bursting with flavor and made with the freshest ingredients. I highly recommend trying their signature dish, it's a true culinary delight."
        </p>
        <div class="d-flex align-items-center">
          <img
            class="img-fluid flex-shrink-0 rounded-circle"
            src="img/testimonial-1.jpg"
            style="width: 50px; height: 50px"
          />
          <div class="ps-3">
            <h5 class="mb-1">Emily Johnson</h5>
            <small>Food Critic</small>
          </div>
        </div>
      </div>
      <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>
          "I'm always on the lookout for exceptional dining experiences. Fira's Flavors exceeded my expectations in every way. The attention to detail in each dish is unparalleled."
        </p>
        <div class="d-flex align-items-center">
          <img
            class="img-fluid flex-shrink-0 rounded-circle"
            src="img/testimonial-2.jpg"
            style="width: 50px; height: 50px"
          />
          <div class="ps-3">
            <h5 class="mb-1">Michael Rodriguez</h5>
            <small>Executive Chef</small>
          </div>
        </div>
      </div>
      <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>
          "My dining experience at Fira's Flavors was nothing short of exceptional. The flavors were bold and delicious, and the service was impeccable. I can't wait to come back and try more of their menu!"
        </p>
        <div class="d-flex align-items-center">
          <img
            class="img-fluid flex-shrink-0 rounded-circle"
            src="img/testimonial-3.jpg"
            style="width: 50px; height: 50px"
          />
          <div class="ps-3">
            <h5 class="mb-1">David Smith</h5>
            <small>Food Blogger</small>
          </div>
        </div>
      </div>
      <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>
          "Fira's Flavors has become my go-to restaurant for any occasion. The quality of the food and the level of service are consistently outstanding. It's a gem in the culinary scene!"
        </p>
        <div class="d-flex align-items-center">
          <img
            class="img-fluid flex-shrink-0 rounded-circle"
            src="img/testimonial-4.jpg"
            style="width: 50px; height: 50px"
          />
          <div class="ps-3">
            <h5 class="mb-1">Sophia Lee</h5>
            <small>Food Enthusiast</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- Testimonial End -->

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
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <div id="message"></div>
                <input id="email" class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                <button id="signup" type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#signup").click(function(){
        var email = $("#email").val();
        $.ajax({
          url: 'signup.php',
          type: 'post',
          data: {email: email},
          success: function(response){
            $("#message").html(response);
          }
        });
      });
    });
    </script>
  </body>
</html>

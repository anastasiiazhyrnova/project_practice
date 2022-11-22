<?php
    include 'db.php';
    $db = new ClinicDB();
    $db->connect();
    $db->auth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Проект</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a class="navbar-brand" href="index.html">
                    <h1><img src="img/favicon.ico" width="50" height="50" class="fa fa-clinic-medical me-2" alt="">
                <span class="m-0 text-uppercase text-primary">Clinic</h1></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Головна</a>
                        <a href="about.html" class="nav-item nav-link">Про нас</a>
                        <a href="contact.html" class="nav-item nav-link">Контакти</a>
                        <a href="price.html" class="nav-item nav-link">Прайс</a>
                        <a href="doctors.html" class="nav-item nav-link">Cпеціалісти</a>
						<a href="auth.php" class="nav-item nav-link active">Вхід/Реєстрація</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->
	
    <!-- Appointment Start -->
    <div class="container-fluid bg-primary">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Авторизація</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua.</p>
                    <h6 class="text-black mb-3">Ще не маєте акаунту?</h6>
                    <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="register.php">Зареєструватися</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Вхід</h1>
                        <form method="post">
                            <div class="row g-3"> 
								<div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Ел.пошта" style="height: 55px;" name="email">
                                </div>
								<div class="col-12 col-sm-6">
                                    <input type="password" class="form-control bg-light border-0" placeholder="Пароль" style="height: 55px;"  name="password">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Увійти</button>
                                </div>
                                <div class="col-sm-6 text-danger">
                                    <p><?php echo $db->isSignedIn ?></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
	
	    <!-- Footer -->

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>



<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Проект</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+38063-123-45-67</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i
                                class="bi bi-envelope me-2"></i>clinic@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a class="navbar-brand" href="index.php">
                    <h1><img src="img/favicon.ico" width="50" height="50" class="fa fa-clinic-medical me-2" alt="">
                <span class="m-0 text-uppercase text-primary">Clinic</h1></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Головна</a>
                        <a href="about.php" class="nav-item nav-link">Про нас</a>
                        <a href="contact.php" class="nav-item nav-link">Контакти</a>
                        <a href="price.php" class="nav-item nav-link">Прайс</a>
                        <a href="doctors.php" class="nav-item nav-link">Cпеціалісти</a>
                 
                        <?php if (!empty($_SESSION['login']) && $_SESSION['login'] != "admin@clinic.ua") : ?>
                            <a href="user_account.php" class="nav-item nav-link">Мій акаунт</a>
                        <?php elseif (!empty($_SESSION['login']) && $_SESSION['login'] == "admin@clinic.ua") : ?>
                            <a href="admin.php" class="nav-item nav-link">Admin</a>
                        <?php else : ?>
                            <a href="auth.php" class="nav-item nav-link">Вхід/Реєстрація</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/doctors.png" style="object-fit: contain;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h1 class="display-4 text-center">CLINIC</h1>
                    </div>
                    <p>У медичному центрі «Clinic» пацієнти дорослого та дитячого віку можуть отримати консультацію практично 
                        будь-якого фахівця: гінеколога, уролога, хірурга, ортопеда-травматолога, терапевта, невролога, кардіолога, 
                        проктолога, мамолога, ендокринолога, гастроентеролога, гастроентери. провести додаткову діагностику 
                        (інструментальні та апаратні методи діагностичного обстеження) та пройти курс лікування.</p>
             
        <div class="container py-5 text-center">
            <div class="pt-2">
                    <a class="btn horizontal-gradient rounded-pill py-3 px-5" href="register.php">Зареєструватися</a>
                    <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="auth.php">Увійти</a>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Footer -->
 <div class="container-fluid bg-dark text-light mt-3 py-2">
        <div class="container py-3">
            <div class="row g-3">
                <div class="col-lg-3 col-md-4">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                        Контактна інформація</h4>
                    <p class="mb-4">Clinic group - 2022</p>

                </div>
                <div class="col-lg-3 col-md-4">
                    <p></p><br>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i> Київ, Україна</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>clinic@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+38063-123-45-67</p>
                </div>
                <div class="col-lg-3 col-md-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                        Соціальні мережі</h4>

                    <div class="d-flex mt-auto p-2">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0"><a class="text-primary" href="#">Winx-3 course</a> All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by Winx</a></p>
                </div>
            </div>
        </div>
    </div>
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

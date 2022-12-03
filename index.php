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
</body>
</html>

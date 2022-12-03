<?php
    header('Content-Type: text/html; charset=utf-8');
    include 'db.php';
    $db = new ClinicDB();
    $db->connect();
    $db->register();
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
                <a class="navbar-brand" href="index.php">
                    <h1><img src="img/favicon.ico" width="50" height="50" class="fa fa-clinic-medical me-2" alt="">
                <span class="m-0 text-uppercase text-primary">Clinic</h1></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Головна</a>
                        <a href="about.php" class="nav-item nav-link">Про нас</a>
                        <a href="contact.php" class="nav-item nav-link">Контакти</a>
                        <a href="price.php" class="nav-item nav-link">Прайс</a>
                        <a href="doctors.php" class="nav-item nav-link">Cпеціалісти</a>
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
                        <h3 class="d-inline-block text-white text-uppercase border-bottom border-5">Реєстрація кліента</h3>
                    </div>
                    <p class="text-white mb-5">Заповніть форму й ви з легкістю зможете обрати найкращий час та записатися до лікаря!</p>
                    <h6 class="text-black mb-3">Вже маєте акаунт?</h6>
                    <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="auth.php">Увійти</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Реєстрація</h1>
                        <form method="post">
                            <div class="row g-3">
							  <div class="col-12 col-sm-4">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Прізвище" style="height: 55px;" name="surname">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Ім'я" style="height: 55px;" name="name">
                                </div>
								<div class="col-12 col-sm-4">
                                    <input type="text" class="form-control bg-light border-0" placeholder="По-батькові" style="height: 55px;" name="patronymic">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;" name="gender">
                                        <option selected>Стать</option>
                                        <option value="female">Жінка</option>
                                        <option value="male">Чоловік</option>
                                        <option value="хз">Не визначився</option>
                                    </select> 
                                </div>
                              
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Дата народження" data-target="#date" data-toggle="datetimepicker" style="height: 55px;" name="birth_date">
                                    </div>
                                </div>
								<div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Ел.пошта" style="height: 55px;" name="email">
                                </div>
								<div class="col-12 col-sm-6">
                                    <input type="password" class="form-control bg-light border-0" placeholder="Пароль" style="height: 55px;"  name="password">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Створити кабінет</button>
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

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a class="navbar-brand" href="index.php">
                    <h1><img src="img/favicon.ico" width="50" height="50" class="fa fa-clinic-medical me-2" alt="">
                        <span class="m-0 text-uppercase text-primary">Clinic
                    </h1></span>
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
                        <a href="doctors.php" class="nav-item nav-link active">Cпеціалісти</a>

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

    <div class="container-fluid py-2">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                <h1 class="display-4">Обирай свого лікаря</h1>
                <h5 class="fw-normal">
                    Медичний центр, який надає повний спектр послуг для сім'ї. Приймають лише висококваліфіковані лікарі
                    різних галузей
                </h5>
            </div>

        </div>
    </div>

    <!-- Doctor - Table -->
    <div class="container-fluid py-2">
        <div class="container">
            <input type="text" id="le-Input-1" onkeyup="tableSearch()" placeholder="Пошук за інфо лікаря.." title="Введіть потрібний запит" style=" display:inline">
            <p></p>
            <table>
                <tr>
                    <td>
                        <input type='checkbox' onclick='return filter_type(this);' name='filter' id="Чоловік" value="Чоловік" />
                        Чоловік
                    </td>
                    <td>
                        <input type='checkbox' onclick='return filter_type(this);' name='filter' id="Жінка" value="Жінка" /> Жінка
                    </td>
                </tr>
            </table>
            <p></p>
            <p></p>

            <div class="col-md-12 text-center">
                <table class="table align-middle mb-0 bg-white" id="le-Table-1">
                    <thead class="bg-light">
                        <tr class="header">
                            <th onclick="sortTable(0)">ПІБ</th>
                            <th onclick="sortTable(1)">Посада</th>
                            <th onclick="sortTable(2)">Стать</th>
                            <th onclick="sortTable(3)">Досвід</th>
                            <th>Рейтинг</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-1.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Гнатюк Софія Михайлівна
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар</p>
                                <p class="text-muted mb-0">акушер-гінеколог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Жінка</p>
                            </td>
                            <td>5 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-2.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Семеновa Інна Степанівна
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-терапевт</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Жінка</p>
                            </td>
                            <td>2 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-3.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Денисенков Антон Іванович
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-стоматолог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Чоловік</p>
                            </td>
                            <td>3 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-4.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Гриценко Олег Віталійович
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-алерголог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Чоловік</p>
                            </td>
                            <td>8 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-5.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Заворотченко Іван Євгенович</p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-невролог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Чоловік</p>
                            </td>
                            <td>3 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-6.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Данилюк Анна Володимірівна</p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-діетолог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Жінка</p>
                            </td>
                            <td>3.5 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-7.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Гончаренко Олеся Петрівна</p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-трихолог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Жінка</p>
                            </td>
                            <td>1.5 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-8.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Кириченко Анатолій Андрійович</p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-кардіолог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Чоловік</p>
                            </td>
                            <td>12.9 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-9.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Матвійчук Кірілл Денисович
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-гастроентеролог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Чоловік</p>
                            </td>
                            <td>4 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-10.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Федорова Катерина Сергіївна</p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">УЗД-фахівець</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Жінка</p>
                            </td>
                            <td>3 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-11.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Левчук Яна Вікторівна
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-гепатолог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Жінка</p>
                            </td>
                            <td>3.8 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-12.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Кузнецова Євгенія Богданівна</p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Лікар-ендокринолог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Жінка</p>
                            </td>
                            <td>10 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>

                        <tr class='clickable-row' data-href='#link'>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/doc-13.png" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-center">Муляр Андрій Миколайович
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Сімейний психолог</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Чоловік</p>
                            </td>
                            <td>5.6 років</td>
                            <td>
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                                <img src="./img/rate.png" class='imgRate' alt="Оцінка" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php if (!empty($_SESSION['login'])) : ?>
        <div class="container-fluid py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 align-items-center">
                        <button class="btn btn-primary w-100 py-3" type="submit" title="Записатись" onclick="window.location.href = 'appointment.html';">
                            Записатись до лікаря</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Feedback Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Feedback</h5>
                <h1 class="display-4">Відгуки наших клієнтів</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/review-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h3>Меган Маркл</h3>
                            <p class="fs-4 fw-normal">Приходили з чоловіком до стоматолога та психолога, все
                                сподобалось!
                                Порекомендувала вас всім в Buckingham Palace))</p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/review-2.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h3>Анджеліна Джолі</h3>
                            <p class="fs-4 fw-normal">Дякую лікарям, у травні 2022 приїзджала до Ukraine та
                                вилікувала тут всіх 6-х свої діточок!
                                Також дала контакти моїм Hollywood' подругам!)</p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/review-4.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h3>Віталій Кличко</h3>
                            <p class="fs-4 fw-normal">Прийшов лікувати зуби, вирвали два, чотири із яких.. ну ви понялі,
                                рекомендую!
                            </p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/review-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h3>Леонардо Ді Капріо</h3>
                            <p class="fs-4 fw-normal">Відзначав отримання Оскара, зірвав підшлункову, думав гаплик мені,
                                а Анджеліна Джолі дала ваші контакти, і миттю прилетів!!
                                Дуже вдячний!</p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/review-5.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h1>ЗАБЛОКОВАНИЙ КЛІЄНТ</h1>
                            <h3>Оксана Марченко</h3>
                            <p class="fs-4 fw-normal">Перед подорожжю приїхала до косметолога, але був тут тільки
                                пластичний хірург, отож хочу порекоментувати цю клініку.
                                Немає жодних сумнівів, жодних сумнівів немає, що вона найкраща. Dost kara gunde belli
                                olur!
                            </p>
                            <hr class="w-25 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feedback End -->


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

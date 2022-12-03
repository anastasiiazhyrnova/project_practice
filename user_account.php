<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include 'db.php';
$db = new ClinicDB();
$db->connect();
$sql = "select surname, name, patronymic, gender, birth_date, email from users where email = '{$_SESSION['login']}'";
$sql_assignments = "select doctor, name_doctor, date from assignments where email = '{$_SESSION['login']}'";
$res = $db->makeQuery($sql);
$res_assign = $db->makeQuery($sql_assignments);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Мій акаунт</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
                        <a href="doctors.php" class="nav-item nav-link">Cпеціалісти</a>

                        <?php if ($_SESSION['login'] == "admin@clinic.ua") : ?>
                            <a href="admin.php" class="nav-item nav-link active">Admin</a>
                        <?php else : ?>
                            <a href="user_account.php" class="nav-item nav-link active">Мій акаунт</a>
                        <?php endif; ?>

                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid py-2">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Особисті дані</h5>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="container" id='info'>
            <div class='info'>
                <?php
                foreach ($res as $item) : ?>
                    <p>Прізвище: <?= $item['surname']; ?></p>
                    <p>Ім'я: <?= $item['name']; ?></p>
                    <p>По-батькові: <?= $item['patronymic']; ?></p>
                    <?php
                    $b_day = $item['birth_date']->format('d.m.Y');
                    $today = date('d.m.Y');
                    $diff = date_diff(date_create($b_day), date_create($today)); ?>
                    <p>Вік: <?= $diff->format('%y') . " років" ?></p>
                    <p>Електрона пошта: <?= $item['email']; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <p><b>Ваші записи:</b></p>
    <div class="col-md-12 text-center">
        <div class="container">
            <?php if (!empty($res_assign)) : ?>
                <table class="table align-middle mb-0 bg-white" id="le-Table-1">
                    <thead class="bg-light">
                        <tr class="header">
                            <td class="text-center">Лікар</td>
                            <td class="text-center">ПІБ</td>
                            <td class="text-center">Дата та час</td>
                        </tr>
                        <?php foreach ($res_assign as $row) : ?>
                            <tr>
                                <td class="fw-bold mb-1 text-center"><?= $row['doctor']; ?></td>
                                <td class="text-center"><?= $row['name_doctor']; ?></td>
                                <td class="text-center"><?= $row['date']->format('d.m.Y H:i'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                </table>
                <span class='link'>
                <?php else : echo "Немає записів!\n"; ?></span>
            <?php endif; ?>
        </div>
    </div>


    <div class="col-md-12 text-center">
        <div class="container">
            <form action="logout.php">
                <p></p>
                <input type="submit" class='button_lout' value="Вийти" />
            </form>
        </div>
    </div>
</body>

</html>

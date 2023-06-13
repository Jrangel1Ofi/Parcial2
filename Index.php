<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Calculadora</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="collapse" data-target="#triangleMenu">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>Área del Triángulo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="collapse" data-target="#circleMenu">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>Área del Círculo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="collapse" data-target="#maxNumMenu">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>Mayor Número</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="collapse" data-target="#votingMenu">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>Votación</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Calculadora</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="collapse" id="triangleMenu">
                                <div class="card card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="base">Base:</label>
                                            <input type="number" name="base" id="base" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="height">Altura:</label>
                                            <input type="number" name="height" id="height" class="form-control">
                                        </div>
                                        <button type="submit" name="triangle" class="btn btn-primary">Calcular</button>
                                    </form>
                                </div>
                            </div>
                            <div class="collapse" id="circleMenu">
                                <div class="card card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="radius">Radio del Círculo:</label>
                                            <input type="number" name="radius" id="radius" class="form-control">
                                        </div>
                                        <button type="submit" name="circle" class="btn btn-primary">Calcular</button>
                                    </form>
                                </div>
                            </div>
                            <div class="collapse" id="maxNumMenu">
                                <div class="card card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="num1">Número 1:</label>
                                            <input type="number" name="num1" id="num1" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="num2">Número 2:</label>
                                            <input type="number" name="num2" id="num2" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="num3">Número 3:</label>
                                            <input type="number" name="num3" id="num3" class="form-control">
                                        </div>
                                        <button type="submit" name="maxNum" class="btn btn-primary">Calcular</button>
                                    </form>
                                </div>
                            </div>
                            <div class="collapse" id="votingMenu">
                                <div class="card card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="age">Edad:</label>
                                            <input type="number" name="age" id="age" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Sexo:</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="male">Hombre</option>
                                                <option value="female">Mujer</option>
                                            </select>
                                        </div>
                                        <button type="submit" name="voting" class="btn btn-primary">Calcular</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (isset($_POST['triangle'])) {
                                    $base = $_POST['base'];
                                    $height = $_POST['height'];
                                    $area = 0.5 * $base * $height;
                                    echo "<div class='alert alert-success'>El área del triángulo es: $area</div>";
                                } elseif (isset($_POST['circle'])) {
                                    $radius = $_POST['radius'];
                                    $area = 3.14159 * pow($radius, 2);
                                    echo "<div class='alert alert-success'>El área del círculo es: $area</div>";
                                } elseif (isset($_POST['maxNum'])) {
                                    $num1 = $_POST['num1'];
                                    $num2 = $_POST['num2'];
                                    $num3 = $_POST['num3'];
                                    $maxNum = max($num1, $num2, $num3);
                                    echo "<div class='alert alert-success'>El mayor número es: $maxNum</div>";
                                } elseif (isset($_POST['voting'])) {
                                    $age = $_POST['age'];
                                    $gender = $_POST['gender'];
                                    $canVote = ($age >= 18 && $gender == 'male') || ($age >= 18 && $gender == 'female');
                                    $votingStatus = $canVote ? 'puede votar' : 'no puede votar';
                                    echo "<div class='alert alert-success'>Según la edad y el sexo ingresados, la persona $votingStatus.</div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Version 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include ('../scripts/sesionCliente.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Cesna Fluid
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/black-dashboard.css" rel="stylesheet" />

</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data="blue">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="./dashboard.php" class="simple-text logo-mini">
                        <img src="../assets/img/icon.ico" alt="icon">
                    </a>
                    <a href="#" class="simple-text logo-normal">
                        Cesna Fluid
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="./dashboard.php">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./usuarios.php">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li>
                        <a href="./dispositivos.php">
                            <i class="tim-icons icon-tablet-2"></i>
                            <p>Dispositivos</p>
                        </a>
                    </li>
                    <li>
                        <a href="./vehiculos.php">
                            <i class="tim-icons icon-bus-front-12"></i>
                            <p>Veh??culos</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tickets.php">
                            <i class="tim-icons icon-paper"></i>
                            <p>Tickets</p>
                        </a>
                    </li>
                    <li>
                        <a href="./contenedores.php">
                            <i class="tim-icons icon-app"></i>
                            <p>Contentedores</p>
                        </a>
                    </li>
                    <li>
                        <a href="./reportes.php">
                            <i class="tim-icons icon-notes"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" data="blue">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">

                            <li class="dropdown nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="notification d-none d-lg-block d-xl-block"></div>
                                    <i class="tim-icons icon-sound-wave"></i>
                                    <p class="d-lg-none">
                                        Notificaciones
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                    <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                                    </li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more
                                            tasks</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael
                                            is in town</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another
                                            notification</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="../assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Mi Perfil</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Configuraci??n</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-link"><a href="../scripts/logout.php" class="nav-item dropdown-item">Cerrar Sesi??n</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <!-- Empieza main content -->
            <div class="content">
                <!-- Tabla "Informaci??n del Cliente" -->
                <div class="card">
                    <div class="card-body">
                        <form action="../scripts/dashboard.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table tablesorter">
                                            <thead class="text-primary">
                                                <tr>
                                                    <th class="text-center">Nombre del Cliente</th>
                                                    <th class="text-center">No. Cliente</th>
                                                    <th class="text-center">Contacto</th>
                                                    <th class="text-center">Tel??fono</th>
                                                    <th class="text-center">Correo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo $fila['nombreCliente']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $fila['clienteId']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $fila['Contacto']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $fila['telefono']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo $fila['correo']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- Termina tabla "Informaci??n del cliente" -->

                <!-- Lista de Tareas -->
                <div class="row">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h6 class="title d-inline">Tareas</h6>
                        </div>
                        <div class="card-body ">
                            <div class="table-full-width table-responsive">
                                <table class="table">
                                    <thead>
                                        <th class="text-center">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </th>
                                        <th class="text-center">Fecha de Inicio</th>
                                        <th class="text-center">Fecha de Termino</th>
                                        <th class="text-center">Descripci??n</th>
                                        <th class="text-center"></th>
                                        <th>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                                    <i class="tim-icons icon-settings-gear-63"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#pablo">Eliminar</a>
                                                </div>
                                            </div>
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="title text-center">11-02-2022</p>
                                            </td>
                                            <td>
                                                <p class="title text-center">11-03-2022</p>
                                            </td>
                                            <td>
                                                <p class="title text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto
                                                    explicabo sit ipsa est, repudiandae modi cupiditate eligendi architecto adipisci labore
                                                    quisquam aspernatur, deleniti reprehenderit, quis a laborum. Hic, maiores nostrum?</p>
                                            </td>
                                            <td class="td-actions text-left">
                                                <button class="btn btn-link" type="button" title="Editar Tarea" data-toggle="collapse" data-target="#editTask" aria-expanded="false" aria-controls="editTask">
                                                    <i class="tim-icons icon-pencil"></i>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" title="Eliminar Veh??culo" class="btn btn-link" data-toggle="" data-target="#" aria-expanded="false" aria-controls="">
                                                    <i class="tim-icons icon-simple-remove"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Fecha de Inicio</label>
                                            <input type="date" class="form-control" name="startDate" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Fecha de T??rmino</label>
                                            <input type="date" class="form-control" name="endDate" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Descripci??n</label>
                                            <input type="text" class="form-control" placeholder="Tarea..." name="task" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md pull-right">
                                    <button type="submit" class="btn btn-info">Agregar Tarea</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Termina Lista de Tareas -->
                <!-- Editar tareas -->
                <div class="row">
                    <div class="col-12 collapse" id="editTask">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Editar Tarea</h5>
                            </div>
                            <div class="card-body">
                                <form action=".." method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Fecha de Inicio</label>
                                                <input type="string" class="form-control" placeholder="Ej: 02-02-2022" name="fechaInicio" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Fecha de Termino</label>
                                                <input type="string" class="form-control" placeholder="Ej: 02-03-2022" name="FechaFin" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Descripci??n</label>
                                                <input type="string" class="form-control" placeholder="Descripci??n de la Tarea" name="task" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="col-6-md pull-right btn btn-fill btn-blue" name="ingresarTarea">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Termina Editar tareas -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="copyright">
                            ??
                            <script>
                                document.write(new Date().getFullYear())
                            </script> by
                            <a href="javascript:void(0)" target="_blank">VABAJA </a>listen, learn, improve & repeat.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Selector de colores -->
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Colores de Interfaz</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-primary" data-color="primary"></span>
                            <span class="badge filter badge-info active" data-color="blue"></span>
                            <span class="badge filter badge-success" data-color="green"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line text-center color-change">
                    <span class="color-label">Modo Claro</span>
                    <span class="badge light-badge mr-2"></span>
                    <span class="badge dark-badge ml-2"></span>
                    <span class="color-label">Modo Obscuro</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Termina selecto de colores -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>

</body>

</html>
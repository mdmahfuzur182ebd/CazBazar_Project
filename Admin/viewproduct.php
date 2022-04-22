<?php
include('includes/config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>view Product History</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">CarBazar</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Admin</a></li>

                    <form action="logout.php" method="post">
                        <li><button class="dropdown-item" name="logout_btn" href="#!">Logout</button></li>
                    </form>

                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Admin</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link" href="viewproduct.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            View Total Post  History
                        </a>

                        <a class="nav-link" href="bloodrequest.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Post Requests
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                              Car Collection Details
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                   Car Details
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="AddBlood.php">View</a>
                                        <a class="nav-link" href="updatDelect.php">Update and Delect Car</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in:</div>
                     CarBzar Admin
                </div>
            </nav>
        </div>



        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"> View Post History</h1>
                    <ol class="breadcrumb mb-4" style="border-bottom: 2px solid rgb(10, 204, 107);">
                        <li class="breadcrumb-item active"></li>
                    </ol>

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Ad_title</th>
                                    <th>model</th>
                                    <th>year</th>
                                    <th>year_used</th>
                                    <th>company</th>
                                    <th>subbrand</th>
                                    <th>cc</th>
                                    <th>engine</th>
                                    <th>tyre</th>
                                    <th>license</th>
                                    <th>Asking price</th>
                                    <th>original_price</th>
                                    <th>your_location</th>

                                </tr>
                            </thead>

                            <tbody>

                                <?php

                                $sql = "SELECT * FROM `product`";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>
                                            <td>' . $row['ad'] . '</td>
                                            <td>' . $row['model'] . '</td>
                                            <td>' . $row['year'] . '</td>
                                            <td>' . $row['year_used'] . '</td>
                                            <td>' . $row['company'] . ' </td>
                                            <td>' . $row['subbrand'] . ' </td>
                                             <td>' . $row['cc'] . '</td>
                                            <td>' . $row['engine'] . ' </td>
                                            <td>' . $row['tyre'] . ' </td>
                                            <td>' . $row['license'] . ' </td>
                                            <td>' . $row['asking_price'] . ' </td>
                                            <td>' . $row['negosiate'] . ' </td>
                                            <td>' . $row['your_location'] . ' </td>
                                  </tr>';
                                }
                             ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Bd Blood Sourch 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
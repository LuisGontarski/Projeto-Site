<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Attendance Dashboard | By Code Info</title>
    <link rel="stylesheet" href="css/perfil_style.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a>
                        <span class="nav-item">Admin</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-menorah"></i>
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-comment"></i>
                        <span class="nav-item">Message</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-database"></i>
                        <span class="nav-item">Report</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">Attendance</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Setting</span>
                    </a></li>

                <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>


        <section class="main">
            <div class="main-top">

            </div>

            <section class="attendance">
                <div class="attendance-list">
                    <h1>Attendance List</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Depart</th>
                                <th>Date</th>
                                <th>Join Time</th>
                                <th>Logout Time</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Sam David</td>
                                <td>Design</td>
                                <td>03-24-22</td>
                                <td>8:00AM</td>
                                <td>3:00PM</td>
                                <td><button>View</button></td>
                            </tr>
                            <tr class="active">
                                <td>02</td>
                                <td>Balbina Kherr</td>
                                <td>Coding</td>
                                <td>03-24-22</td>
                                <td>9:00AM</td>
                                <td>4:00PM</td>
                                <td><button>View</button></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Badan John</td>
                                <td>testing</td>
                                <td>03-24-22</td>
                                <td>8:00AM</td>
                                <td>3:00PM</td>
                                <td><button>View</button></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Sara David</td>
                                <td>Design</td>
                                <td>03-24-22</td>
                                <td>8:00AM</td>
                                <td>3:00PM</td>
                                <td><button>View</button></td>
                            </tr>
                            <!-- <tr >
                <td>05</td>
                <td>Salina</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </div>

</body>

</html>
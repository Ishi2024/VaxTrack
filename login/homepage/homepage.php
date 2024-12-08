<?php
session_start();
include("../connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAXTRACK DashBoard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="homepage.css"> 

    <!--For icons-->
    <link href='https:\\unpkg.com\boxicons@2.1.4\css\boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!--SideBar-->
    <section id="sidebar">
            <a href="#" class="brand">
                <i class='bx bxs-injection' ></i>
                <span class="text">VAXTRACK</span>
            </a>
            <ul class="side-menu top">
                <li class="active">
                    <a href="homepage.php">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">DashBoard</span>
                    </a>
                </li>

                <li>
                    <a href="announcement/announcement.html">
                        <i class='bx bxs-megaphone' ></i>
                        <span class="text">Announcements</span>
                    </a>
                </li>
        
        <li>
            <a href="#">
                <i class='bx bxs-message-rounded-dots'></i>
                <span class="text">Messages</span>
            </a>
        </li>
    
         <li>
            <a href="about-us/about-us.html">
                <i class='bx bxs-group' ></i>
                <span class="text">About Us</span>
            </a>
        </li>
    </ul>



    <ul class="side-menu">
        <li>
            <a href="user-profile/user-profile.php" class="active">
                <i class='bx bxs-cog' ></i>
                <span class="text">User's Settings</span>
            </a>
        </li>
        <li>
            <a href="../logout.php" class="logout">
                <i class='bx bxs-log-out' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
            </ul>
    </section>
    <!--Sidebar-->


    <!-- Contents-->
    <section id="content">
        <!--Navbar--> 
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Brgy. Lecheria, Calamba City, Laguna</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                  </div>
            </form>
           <!-- <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">8</span>
            </a> -->
            <a href="#" class="profile">
             <img src="img/Joshua Garcia Model.jpg">
            </a>
        </nav>
        <!--Navbar-->

        <!--Main-->
        <main> 
            <div class="head-title">
                <div class="left">
                   <h1>Dashboard</h1>
                   <ul class="breadcrumb">
                       <!-- <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active">Home</a>
                        </li> - For Home Page Purposes.. -->
                   </ul> 
                </div>

                <div id="clock"></div>


            </div>
            <ul class="box-info">
                <li>
                    <a href="calendar/calendar.html">
                        <i class='bx bx-calendar'></i>
                    </a>
                    <span class="text">
                        <h3>Calendar</h3>
                        <p>Vaccine Schedule</p>
                    </span>
                </li>
                <li>
                    <a href="user-profile/user-profile.php">
                        <i class='bx bxs-group' ></i>
                    </a>
                    <span class="text">
                        <h3>Profile</h3>
                        <p>User Information</p>
                    </span>
                </li>
                <li>
                    <a href="vaccine-types/vaccine-types.html">
                        <i class='bx bx-injection' ></i>
                    </a>
                    <span class="text">
                        <h3>Types of Vaccine</h3>
                    </span>
                </li>

                <li>
                    <a href="contact-us/contacts.html">
                        <i class='bx bxs-contact' ></i>
                    </a>
                    <span class="text">
                        <h3>Health Center Contacts</h3>
                    </span>
                </li>
            </ul>
        
        
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Vaccines That Should Need To take</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                        <a href="#"></a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Vaccines</th>
                                <th>Date Intake</th>
                                <th>Next Date Intake</th>
                                <th>Vaccine Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  <!--  <img src="BCG vaccine.jpg"> -->
                                    <p>Hepa & BCG</p>
                                </td>
                                <td>11.03.2024</td>
                                <td>12.03.2025</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                   <!-- <img src="BCG vaccine.jpg"> -->
                                    <p>Penta & OPV</p>
                                </td>
                                <td>11.03.2024</td>
                                <td>12.03.2025</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                  <!--  <img src="BCG vaccine.jpg"> -->
                                    <p>Penta No.2</p>
                                </td>
                                <td>11.03.2024</td>
                                <td>12.03.2025</td>
                                <td><span class="status process">On Process</span></td>
                            </tr>
                            <tr>
                                <td>
                                  <!--  <img src="BCG vaccine.jpg"> -->
                                    <p>OPV No.2</p>
                                </td>
                                <td>11.03.2024</td>
                                <td>12.03.2025</td>
                                <td><span class="status process">On Process</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- <img src="BCG vaccine.jpg"> -->
                                    <p>Penta No.3 & OPV No.3</p>
                                </td>
                                <td>11.03.2024</td>
                                <td>12.03.2025</td>
                                <td><span class="status process">On Process</span></td>
                            </tr>
                            <tr>
                                <td>
                                  <!--  <img src="BCG vaccine.jpg"> -->
                                    <p>Measles Shot</p>
                                </td>
                                <td>11.03.2024</td>
                                <td>12.03.2025</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                   <!-- <img src="BCG vaccine.jpg"> -->
                                    <p>Booster Shot</p>
                                </td>
                                <td>11.03.2024</td>
                                <td>12.03.2025</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Announcements:</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                        <a href="#"></a>
                    </div>
                    <ul class="todo-list">
                        <li class="not-completed">
                            <p>Brgy. Health Center Renovation</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Vaccination Drive on November</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Vaccination Drive on December</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Vaccination Drive on January</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Vaccination Drive on February</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                    </ul>
                </div>
                <br><br><br>
                <a href="pdf/pdf.html" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

              


        
        </main>
        <!--Main-->


    </section>
    <!-- Contents-->









    <script src="homepage.js"></script>
</body>
</html>
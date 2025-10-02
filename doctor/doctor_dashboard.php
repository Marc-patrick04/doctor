<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard - Doctor Appointment System</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="../images/logo.png" alt="Doctor Appointment System Logo">
                <label for="Doctor Appointment">Doctor Appointment</label>
            </div>
            <!-- Hamburger menu button -->
            <div class="menu-toggle" id="menu-toggle">&#9776;</div>
            
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="../index.html">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <!-- Dashboard Overview Cards -->
        <section class="dashboard-stats">
            <div class="stat-card">
                <h3>New request</h3>
                <p class="stat-number">...</p>
            </div>
            <div class="stat-card">
                <h3>Pending</h3>
                <p class="stat-number">...</p>
            </div>
            <div class="stat-card">
                <h3>Completed</h3>
                <p class="stat-number">...</p>
            </div>
        </section>

        <!-- Appointment Management Section -->
        <section class="appointment-management">            
            <div class="tabs">
                <button class="tab-btn active" data-tab="upcoming"> <a href="#"></a>New patient Requests</button>
                <button class="tab-btn" data-tab="pending"><a href="pending.html" class="link">Pending</a></button>
                <button class="tab-btn" data-tab="completed"> <a href="completed.html"class="link">Completed</a></button>
                <button class="tab-btn " ><a href="doctor.php" class="link">Doctors list</a></button>
            </div>

            <table class="appointment-table">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
                    $conn=mysqli_connect("localhost","root","","doctorappointment");
                    $select= mysqli_query($conn,"SELECT patientname,patientemail FROM patient");

                    while($row=mysqli_fetch_array($select)){
                ?>
                    <tr>
                        <td><?php echo $row['patientname'];?></td>
                        <td><?php echo $row['patientemail'];?></td>
                        <td><span class="status pending">Request not approved</span></td>
                        <td>
                            <button class="action-btn approve">Approve</button>
                        </td>
                    </tr>

                <?php
                    }
                ?>
            </table>  
            

        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Doctor Appointment System. All rights reserved.</p>
    </footer>

</body>
</html>

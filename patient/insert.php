<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Appointment System</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!-- Header with Navigation -->
  <header>
    <div class="container header-container">
      <h1 class="logo">Doctor Appointment</h1>
      
      <!-- Hamburger menu button -->
      <div class="menu-toggle" id="menu-toggle">&#9776;</div>
      
      <nav>
        <ul class="nav-links" id="nav-links">
          <li><a href="pages/login.html">Login</a></li>
          <li><a href="pages/register.html">Register</a></li>
          <li><a href="">Doctors</a></li>
          <li><a href="">Appointments</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container">
    <section class="about">
      <h2>About the System</h2>
      <p>
        The Doctor Appointment Management System is designed to make booking medical appointments 
        fast, simple, and secure. Patients can create an account, log in, and book appointments 
        with available doctors. Doctors and administrators can manage schedules and appointments easily.
      </p>
    </section>

    <section class="actions">
      <h2>Get Started</h2>
      <p>Choose an option below to continue:</p>
      <div class="buttons">
        <a href="pages/login.html" class="btn">Login</a>
        <a href="pages/register.html" class="btn btn-outline">Create Account</a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Doctor Appointment System. All rights reserved.</p>
  </footer>

  <!-- Small JS for toggle -->
  <script>
    const toggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    toggle.addEventListener('click', () => {
      navLinks.classList.toggle('show');
    });
  </script>
</body>
</html>

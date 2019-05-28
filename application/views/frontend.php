
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/fe/') ?>css/materialize.min.css"  media="screen,projection"/>

    <!-- my CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fe/') ?>css/style.css">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>GIGANTIC</title>
  </head>

  <body id="home" class="scrollspy">

    <!-- navbar -->
    <div class="navbar-fixed">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Login</a></li>
        <li><a href="#!">Register</a></li>
      </ul>
      <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">Rizal</a></li>
        <li><a href="#!">Profile</a></li>
        <li><a href="#!">Pemesanan</a></li>
        <li><a href="#!">Logout</a></li>
      </ul>
      <nav class="blue darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">GIGANTIC</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#about">Home</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <?php if(!$this->session->userdata('client_login')): ?>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons right">account_circle</i></a></li>
              <?php else: ?>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Rizal<i class="material-icons right">account_circle</i></a></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#about">About Us</a></li>
      <li><a href="#clients">Clients</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact Us</a></li>
      <li><a href="#contact"><i class="material-icons right">account_circle</i>Rizal</a></li>

    </ul>

    <!-- contact us -->
   <?= $contents;  ?>


    <!-- footer -->
    <footer class="blue darken-2 white-text center">
      <p class="flow-text">GIGANTIC Copyright <?php echo date('Y') ?></p>
    </footer>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url('assets/fe/') ?>js/materialize.min.js"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
        scrollOffset: 50
      });

      const dropdown = document.querySelectorAll('.dropdown-trigger');
      M.Dropdown.init(dropdown);

    </script>
  </body>
</html>








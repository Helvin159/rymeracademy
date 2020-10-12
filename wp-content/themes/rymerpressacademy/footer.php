<!-- FAQ and Other Links -->

<div class="row p-5" style="background:#1D1E18;color:#ffffff;">
  <div class="col-md-3">
    <h1>Rymer Academy</h1>
    <hr class="redHr">
    <div class="container py-5">
      <ul style="list-style-type:none;">
        <li>P.O. Box 1234</li>
        <li>1029 Helvin Rymer Street</li>
        <li>Bronx, NY 10563</li>
      </ul>
    </div>
    <div class="container">
      <a href="tel:9295236682" style="color:#ffffff;">(929)523-6682</a>
      <a href="mailto:helvin@helvinrymer.com" style="color:#ffffff;">Helvin@helvinrymer.com</a>
    </div>
  </div>
  <div class="col-md-3">
  
    <h1>Our Campus</h1>
    <hr class="redHr">
      <div class="container">
        <ul class="nav flex-column">
          <li class="nav-item">
          <?php 
  //		wp_nav_menu(array(
	//	'theme_location' => 'faq'
		//));
	?>
            <a class="nav-link" href="#" style="color:#ffffff;">Academic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Planning &amp; Administration</a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Campus Safety</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Office of the Chancellor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Facility Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Human Resources</a>
          </li>
        </ul>
      </div>
</div>
  <div class="col-md-3">
    <h1>Campus Life</h1>
    <hr class="redHr">
    <div class="container">
        <ul class="nav flex-column">
        <?php 
  //		wp_nav_menu(array(
	//	'theme_location' => 'faq'
		//));
	?>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Accessibility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Financial Aid</a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Food Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Housing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Information Technologies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Student Life</a>
          </li>
        </ul>
      </div>
  </div>
  <div class="col-md-3">
    <h1>Academics</h1>
    <hr class="redHr">
    <div class="container">
        <ul class="nav flex-column">
        <?php 
//		wp_nav_menu(array(
	//	'theme_location' => 'faq'
		//));
	?>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Canvas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Catalyst</a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Time Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Apply For Admissions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Pay My Tuition</a>
          </li>
        </ul>
      </div>
  </div>
</div>


<!-- As a heading -->
<nav class="navbar" style="background:#1D1E18;color:#ffffff;">
  <span class="navbar-brand mb-0" style="color:red"><a class="navbar-brand raleway" href="<?php echo esc_url(site_url('/home'))?>" style="color:#ffffff;"><?php bloginfo($show = 'description')?></a></span>
  <span class="justify-content-end roboto">
  <a href="#"><i class="fab fa-linkedin-in p-3" style="font-size:25px;color:red"></i></a>
  <a href="#"><i class="fab fa-facebook-f p-3" style="font-size:25px;color:red"></i></a>
  <a href="#"><i class="fab fa-instagram p-3" style="font-size:25px;color:red"></i></a>
  <a href="#"><i class="fab fa-google-plus-g p-3" style="font-size:25px;color:red"></i></a>
  <a href="#"><i class="fab fa-skype p-3" style="font-size:25px;color:red"></i></a>
  <a href="#"><i class="fab fa-twitter p-3" style="font-size:25px;color:red"></i></a>
  </span>
</nav>

<!-- Wordpress Bar At Top -->
<?php wp_footer()?>
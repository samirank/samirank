<!DOCTYPE html>
<html>
<head>
  <!-- Theme color for chrome on android -->
  <meta name="theme-color" content="#ce93d8"
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="vendor/materialize/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


  <!-- STYLESHEET -->
  <style>
  html {
    font-family: helvetica;
    height: 100%;
    font-weight: normal;
   /* background-size: cover;
   background-image: linear-gradient(25deg, #967ccf, #bc98cb, #deb5c6, #ffd3c0);*/
 }
 .nav-wrapper {
    /*background:  #967ccf;
    background: rgba(255,255,255,.5);*/
  }
  nav {
   /* background: #967ccf;
   background-color: #967ccf;*/
   font-weight: bold;
   font-kerning: normal;
 }
 .btn {
  background-color: rgb(0,0,0);
  background: linear-gradient(25deg, #967ccf, #bc98cb, #deb5c6, #ffd3c0);
  color: #fff;
  height: 50px;
  width: 200px;
  border-radius: 25px;
  font-weight: 700;
}
.grad-btn {
  margin-top: 15px;
  margin-bottom: 15px;
}
.menu-btn {
  position: absolute;
}
.menu-btn a .material-icons {
 font-size: 35px;
}
.fab {
  /*margin-top: 15px;*/
  height: auto;
  font-size: 15px;
}
footer {
  position: fixed;
  width: 100%;
  bottom: 0;
}
</style>
<!-- STYLESHEET -->

</head>
<body>
  <!-- navigation -->
  <nav>
    <div class="nav-wrapper purple lighten-1 z-depth-0">
      <div class="menu-btn">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
      <ul class="right hide-on-large-only">
        <li><a href="sass.html"><i class="fab fa-instagram"></i></a></li>
        <li><a href="badges.html"><i class="fab fa-facebook"></i></a></li>
        <li><a href="collapsible.html"><i class="fab fa-twitter"></i></a></li>
      </ul>
      <ul id="nav-mobile " class="side-nav">
        <!-- <li><a class="grey-text text-darken-4" href="#">Navbar Link</a></li> -->
      </ul>
    </div>
  </nav>
  <div class="clearfix"></div>
  <!-- navigation -->

  <!-- SIDE NAVIGATION -->
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="http://via.placeholder.com/300x150">
      </div>
      <a href="#user"><img class="circle" src="http://via.placeholder.com/150x150"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#"><i class="material-icons">home</i>Home</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <!-- SIDE NAVIGATION -->


  <div class="container">
    <div class="section center-align">
      <h4 class="truncate" style="padding-bottom: 10px;">Hello, there!</h4>
      <p style="margin-bottom: -10px;">Press a button to continue.</p>
    </div>

    <!-- BUTTON -->
    <div class="center-align">
      <button class="btn grad-btn large waves-effect">Login</button>
    </div>
    <div class="center-align">
      <a href="questionnaire"><button class="btn grad-btn large waves-effect">Questionnaire</button></a>
    </div>
    <div class="center-align">
      <button class="btn grad-btn large waves-effect">Select Logo</button>
    </div>
    <div class="center-align">
      <button class="btn grad-btn large waves-effect">Contact</button>
    </div>

    <div class="section" hidden>
      <div class="row">
        <div class="col s12 m6 l3">
          <div class="card-panel hoverable">
            <div class="card-action">
              <button class="btn btn-large blue darken-1 waves-effect">Get Started</button>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card-panel hoverable">
            <div class="card-action">
              <button class="btn btn-large blue darken-1 waves-effect">Get Started</button>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card-panel hoverable">
            <div class="card-action">
              <button class="btn btn-large blue darken-1 waves-effect">Get Started</button>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card-panel hoverable">
            <div class="card-action">
              <button class="btn btn-large blue darken-1 waves-effect">Get Started</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- container -->

  <!-- FOOTER -->
  <footer class="page-footer center-align white grey-text">
     <small>Created with <span class="red-text"><i class="fas fa-heart"></i></span> by <a class="grey-text" href="https://www.samirankakoty.com">Samiran Kakoty</a></small>
  </footer>



  <!--JavaScript at end of body for optimized loading-->
  <script src="vendor/jquery/jQuery-3.3.1.min.js"></script>
  <script type="text/javascript" src="vendor/materialize/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
  </script>
</body>
</html>
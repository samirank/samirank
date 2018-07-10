<?php include("../template/header.php"); ?>
<?php 
if (isset($_POST['get_started'])) {
  if ($_POST['questionnaire_name']=='webdev') {
    header("location: ../webquestionnaire");
  }
  if ($_POST['questionnaire_name']=='logo') {
    header("location: ../logoquestionaire");
  }
  if ($_POST['questionnaire_name']=='corp') {
    header("location: ../brandquestionnaire");
  }
  if ($_POST['questionnaire_name']=='app') {
    header("location: ../appquestionnaire");
  }
}

?>
<!-- CONTAINER -->
<div class="container">
  <div class="section">
    <div class="card-panel hoverable">
      <form action="index.php" method="POST">
        <h6 class="purple-text text-lighten-3" style="margin-bottom: 20px">Please select the type of project</h6>
        <p>
          <label>
            <input name="questionnaire_name" value="webdev" type="radio" checked />
            <span>Web development</span>
          </label>
        </p>
        <p>
          <label>
            <input name="questionnaire_name" value="logo" type="radio"/>
            <span>Logo design</span>
          </label>
        </p>
        <p>
          <label>
            <input name="questionnaire_name" value="corp" type="radio"/>
            <span>Corporate Branding</span>
          </label>
        </p>
        <p>
          <label>
            <input name="questionnaire_name" value="app" type="radio"/>
            <span>App delevopment</span>
          </label>
        </p>
        <div class="divider" style="margin-bottom: 10px; margin-top: 20px;"></div>
        <div class="card-action center-align">
          <button type="submit" value="Get started" name="get_started" class="btn btn-large blue darken-1 waves-effect waves-purple waves-circle">Get Started</button>
        </div>
      </form>
    </div>
  </div>
</div> <!-- container -->
<?php include("../template/footer.php") ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>abogalandia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Gentium+Book+Basic|Hind+Siliguri|Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
     <!-- splash -->
     <div class="container-fluid" id="spplash">
       <div id="splash" class="vh-total index-bg">
       </div>
     </div>
     <div class="container-fluid screen-login">
     <!--- xs/sm --->
     <div class="hidden-sm hidden-md hidden-lg vh-total mobile">
     <div class="img">
      <center><img src="assets/images/logo2.png" alt="logo" height="250" width="250"></center>
     </div>
     <a href="login.php"><button class="btn btn-primary col-xs-6 col-sm-6 pull-left" type="button" name="button">Log in</button></a>
     <a href="registro.php"><button class="btn btn-primary col-xs-6 col-sm-6 pull-right" type="button" name="button">Sign up</button></a>
    </div>

    <!--- sm/md/lg --->
     <div class="hidden-xs vh-total desktop screen-login">
       <div class="img-desk">
        <center><img src="assets/images/logo2.png" alt="img" height="500" width="500"></center>
       </div>
      <a href="login.php"><button class="btn btn-primary col-sm-4 col-md-4 col-lg-4 pull-left col-sm-offset-2 btn-desk" type="button" name="button">Log in</button></a>
      <a href="registro.php"><button class="btn btn-primary col-sm-4 col-md-4 col-lg-4 pull-left  btn-desk" type="button" name="button">Sign up</button></a>
     </div>
   </div>

  <!-- script -->
  <script
 src="https://code.jquery.com/jquery-3.3.1.min.js"
 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
 crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous">
   </script>
   <script src="js/app.js"></script>
  </body>
</html>

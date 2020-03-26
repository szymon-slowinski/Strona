<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>


  <nav class="navbar navbar-inverse">

      <div class="container-fluid">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                          
                         <a class="navbar-brand" href="#"><img src="img/logotop.png" id="logotop"></a>
                                              
                                             
                        </div>

                                                
                        <div class="collapse navbar-collapse" id="myNavbar">
                          <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><i class="fas fa-home"></i>Strona główna</a></li>
                          <li><a href="#"><i class="fas fa-briefcase"></i>O nas</a></li>
                          <li><a href="#"><i class="fas fa-percent"></i>Oferty</a></li>
                          <li><a href="#"><i class="fas fa-info"></i>Pomoc i kontakt</a></li>
                          <li><a href="#"><i class="fas fa-sign-in-alt"></i>Zaloguj</a></li>
                          <li><a href="#"><i class="fas fa-user-plus"></i>Załóż konto</a></li>

                          </ul>
        
                        </div>

        </div>

  </nav>
<!-- Start active tlo pierwsze -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators"> 
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  

  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="img/tlo.jpg">
        <div class="carousel-caption">
          <img src="img/logomiddle.png" id="logomiddle">
          <br>
          <button type="button" class="btn btn-default">Załóż konto!</button>
        </div>


    </div> <!-- END active --->
    <div class="item">
      <img src="img/tlo2.jpg">
    </div>
    <div class="item">
      <img src="img/tlo3.jpg">
    </div>


  </div>
  <!-- Start slider Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div><!--- End slider ---->

<!--START  IKONY HTML 5...-->
  <div class="container text-center">
      <h2 id="textbottomfirstline">Co nowego w Santander Bank Polska?</h2><br>
      <h4 id="textbottomsecondline">Zapoznaj się z komunikatami o ostatnich wydarzeniach, zmianach i promocjach.</h4><br><br><br><br>
      <div class="row">

            <div class="col-sm-4">
            <a href="#" id="hyperlinkbottom">
            <i class="far fa-credit-card"></i><br><br>
            <h4 id="textfarbottom">Produkty kredytowe online</h4>
            </a>
            </div>
            <div class="col-sm-4">
            <a href="#" id="hyperlinkbottom">
            <i class="fas fa-mobile-alt"></i><br><br>
              <h4 id="textfarbottom">Z aplikacją mobilną
                możesz więcej, niż myślisz </h4>
            </div>
            </a>
            <div class="col-sm-4">
            <a href="#" id="hyperlinkbottom">
            <i class="fas fa-car-crash"></i><br><br>
              <h4 id="textfarbottom">Ubezpiecz swój samochód</h4>
            </div>
            </a>
      </div>
  </div>

  
</body>
</html>
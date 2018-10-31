<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    / Remove the navbar's default margin-bottom and rounded borders / 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    / Add a gray background color and some padding to the footer /
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; / Set width to 100% /
      margin: auto;
      min-height:200px;
  }

  / Hide the carousel text when the screen is less than 600 pixels wide /
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>




    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      
        <img src="images/informal/heathrowvulcady.jpg" alt="Image">
          <div class="carousel-caption">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Ver detalles
            </button>
          <h3>DG lona deportivos</h3>
          <p>Zapato Informal</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/informal/tenis-zapatos-lacoste.jpg" alt="Image">
        <div class="carousel-caption">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
            Ver detalles
            </button>
          <h3>Lacoste negros deportivos</h3>
          <p>Zapato Informal</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/informal/2025198349739_2.jpg" alt="Image">
        <div class="carousel-caption">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
            Ver detalles
            </button>
          <h3>Cavana Zapato lona Deportivo </h3>
          <p>Zapato Informal</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/formal/5a26edd8c3ee6.jpeg" alt="Image">
        <div class="carousel-caption">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
            Ver detalles
            </button>
          <h3>Zapato Cuero Cordones</h3>
          <p>Zapato Formal</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/formal/zapato-hombre-vestir-.jpg" alt="Image">
        <div class="carousel-caption">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
            Ver detalles
            </button>
          <h3>Zapato punta cuadrada cuero</h3>
          <p>Zapato Formal</p>
        </div>      
      </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>



  <!-- The Modal 1-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header 1-->
        <div class="modal-header">
          <h4 class="modal-title">DG lona deportivos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body 1-->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer 1-->
        <div class="modal-footer">
		<p>
		Acá iria la descripcion y/o los productos de la categoria relacionados
		</P>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- The Modal 2-->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header 2-->
        <div class="modal-header">
          <h4 class="modal-title">Modal DOS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body 2-->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer 2-->
        <div class="modal-footer">
		<p>
		Acá iria la descripcion y/o los productos de la categoria relacionados
		</P>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- The Modal 3-->
  <div class="modal fade" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header 3-->
        <div class="modal-header">
          <h4 class="modal-title">Modal TRES</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body 3-->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer 3-->
        <div class="modal-footer">
		<p>
		Acá iria la descripcion y/o los productos de la categoria relacionados
		</P>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- The Modal 4-->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header 4-->
        <div class="modal-header">
          <h4 class="modal-title">Modal DOS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body 4-->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer 4-->
        <div class="modal-footer">
		<p>
		Acá iria la descripcion y/o los productos de la categoria relacionados
		</P>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- The Modal 4-->
  <div class="modal fade" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header 4-->
        <div class="modal-header">
          <h4 class="modal-title">Modal DOS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body 4-->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer 4-->
        <div class="modal-footer">
		<p>
		Acá iria la descripcion y/o los productos de la categoria relacionados
		</P>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
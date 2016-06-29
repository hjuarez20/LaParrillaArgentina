<!DOCTYPE html>
<html lang="en">
<!--this class contains the menu of the page, also contains the text in the next section -->
<head>
    <meta charset="UTF-8">

</head>

<body>
    <nav class="StickyMenu navbar navbar-inverse colorBlackMenu">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="navbar-brand hidden show"><a class="page-scroll"href="#home">La Parrilla Argentina</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse padding-top" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#home">Home</a></li>
                        <li><a class="page-scroll" href="#nosotros">Nosotros</a></li>
                        <li><a class="page-scroll" href="#menu">Menú</a></li>
                        <li><a class="page-scroll" href="#reservaciones">Reservación</a></li>
                        <li><a class="page-scroll" href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </nav>
    <div id="carousel-example-generic" data-interval="7500" class="col-sm-12 col-md-12 col-xs-12 padding-remove carousel slide slider-img" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active fill slider-img1">
                <video class="hidden-xs hidden-sm" controls muted autoplay loop src="img/grill-video.mp4" style="width: 100%;height: 100%;">
                </video>
                <div class="carousel-caption center-logo-carousel">
                    <div class="logo">
                        <img class="img-responsive center-block" src="img/parrilla6.png" alt="">
                    </div>
                    <div class="arrow-colocation">
                        <a href='#nosotros' class="page-scroll arrowCenter"><img class="arrow" src="http://www.tomnod.com/public/images/icon-chevron-big-down.png" title="Ir abajo" /></a>
                    </div>    
                </div>
            </div>
            <div class="item fill slider-img4">
                <div class="container">
                    <div class="carousel-caption red center-carousel-caption ">
                        <h3 data-animation="animated flipInX">
						Ambiente cálido le espera en nuestro restaurante
					</h3>
                    </div>
                </div>
            </div>
            <div class="item fill slider-img2">
                <div class="container">
                    <div class="carousel-caption black center-carousel-caption">
                        <h3 data-animation="animated bounceInLeft">
						Con el mejor estilo Argentino
					    </h3>
                        <br>
                        <h3 data-animation="animated bounceInRight">
						Date un verdadero gustazo
					</h3>
                    </div>
                </div>
            </div>
            <div class="item fill slider-img3">
                <div class="container">
                    <div class="carousel-caption orange center-carousel-caption ">
                        <h3 data-animation="animated fadeIn">
						 Especialidad en Cortes
					    </h3>
                        <h3 data-animation="animated fadeInUp">
						Contamos con la mejor carne del país
					    </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
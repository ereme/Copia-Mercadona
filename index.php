<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh" crossorigin="anonymous">        <title>Mercadona</title>
    </head>

    <body>
        <header> 
        <div class="top hidden-xs">
			<div class="container">
				<div class="languages-menu">
					<label for="language-header" class="hidden"></label>
                    <select id="language-header" onchange="location=this.value;">
                        <optgroup label="España">
                            <option name="es" selected="selected" data-subtext="España -" value="/es/inicio" href="/es/inicio">Español</option>
                            <option value="/va/inici" data-href="/va/inici" name="va" data-subtext="España -">Valencià</option>
                            <option value="/ca/inici-ca" data-href="/ca/inici-ca" name="ca" data-subtext="España -">Català</option>
                            <option value="/gl/inicio-gl" data-href="/gl/inicio-gl" name="gl" data-subtext="España -">Galego</option>
                            <option value="/eu/hasiera" data-href="/eu/hasiera" name="eu" data-subtext="España -">Euskara</option>
                            <option value="/en/home" data-href="/en/home" name="en" data-subtext="España -">English</option>
                            <option value="/de/startseite" data-href="/de/startseite" name="de" data-subtext="España -">Deutsch</option>
                        </optgroup>
                        <optgroup label="Portugal">
                            <option value="https://www.mercadona.pt/pt/iniciacao" data-href="https://www.mercadona.pt/pt/iniciacao" name="pt" data-subtext="Portugal -">Português</option>
                        </optgroup>
                    </select>
				</div>
			</div>
		</div>
            <div class="row">
                <div class="col-md-9">
                    <img src="imagenes/logo.png" alt="Logo Mercadona" id="logo">
                </div>
                <div class="col-md-3">
                <a href="https://www.mercadona.es/ns/entrada.php?js=1" target="_blank"><button type="button" class="btn btn" id="botoncompra"><i class="fas fa-shopping-cart"> </i> Compra online</button></a>
                    
                    <!--<a href="" role="button" class= "btn btn" id="botoncompra"> <i class="fas fa-shopping-cart"> </i>Compra online</a></button>
                    -->
                </div>
            </div>
        </header>

        <div class="row">
            <nav class="navbar-expand-lg">
                <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item conocoenos">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Conócenos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""> Gobierno Corporativo</a>
                            <a class="dropdown-item" href=""> Modelo </a>
                            <a class="dropdown-item" href=""> Principales Datos </a>
                            <a class="dropdown-item" href=""> Historia </a>
                            <a class="dropdown-item" href=""> Sala de Prensa </a>
                            <a class="dropdown-item" href=""> Empleo </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Supermercados </a>
                    </li>
                    <li class="nav-item servicios">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"> Tarjeta Mercadona</a>
                            <a class="dropdown-item" href="#"> Factura Clientes</a>
                            <a class="dropdown-item" href="#"> e-Factura Proveedores</a>
                            <a class="dropdown-item" href="#"> Portal Trinidad </a>
                        </div>
                    </li>
                    <li class="nav-item consejos">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consejos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"> Alimentación</a>
                            <a class="dropdown-item" href="#"> Perfumería</a>
                            <a class="dropdown-item" href="#"> Hogar </a>
                            <a class="dropdown-item" href="#"> Mascotas </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Actualidad </a>
                    </li>
                    <li class="nav-item atencion">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Atención al Cliente
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"> Formulario de contacto </a>
                            <a class="dropdown-item" href="#"> Preguntas frecuentes </a>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
                </nav>
        </div>

        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2500">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="imagenes/img1.jpg" alt="Endulza tu día">
                    <div class="carousel-caption">
                        <h5> Endulza tu día <h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="imagenes/img2.png" alt="Nuevo pienso Compy Supreme para cachorros">
                    <div class="carousel-caption">
                        <h5> Nuevo pienso Compy Supreme para cachorros <h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="imagenes/img3.jpg" alt="Es tiempo de fresones">
                    <div class="carousel-caption">
                        <h5> Es tiempo de fresones <h5>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row" id="pfila">
            <div class="col">
                <h2> Actualidad Mercadona </h2>
            </div>  
        </div>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="imagenes/imagen2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vacantes de empleo Logística y Mantenimiento en Mercadona</h5>
                    <p id="gris" class="card-text">17 de abril de 2018</p>
                    <button type="button" class="btn btn" id="act"> Empleo </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="imagenes/imagen3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mercadona dona 27.000 litros de leche Hacendado a los Bancos de Alimentos de Tarragona y Lleida </h5>
                    <p id="gris" class="card-text">16 de abril de 2018</p>
                    <button type="button" class="btn btn" id="act"> Responsabilidad Social  </button>
                    <button type="button" class="btn btn" id="act"> Donaciones de alimentos </button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="imagenes/imagen4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Vacantes de empleo para el Departamento de Informática en Mercadona</h5>
                    <p id="gris" class="card-text">12 de abril de 2018</p>
                    <button type="button" class="btn btn" id="act">  Empleo </button> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">   
                <p id="negrita"> Ver todos </p>
            </div>
        </div>

        <div class="row" id="busqueda">
            <div class="col">
                <p> Mercadona cuenta con 1.626 supermercados. <br>
                Encuentra tu Mercadona más cercano y su horario </p>
                <input id= "buscar" placeholder="Ciudad, código postal o dirección" autocorrect="off" autocapitalize="off" id="busquedaInput" class="busquedaInput" type="text">
                <button id="botonbuscar" disabled="" tabindex="-1" type="button" class="busquedaBoton"><i class="fas fa-search"></i>  Buscar</button>
                <p><i id="location" class="fas fa-location-arrow"></i> Usar mi localización actual </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2> Consejos </h2>
            </div>
        </div>
        <div class="card-group" id="consejos">
            <div class="card">
                <img class="card-img-top" src="imagenes/imagen5.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title"> Alimentación </h3>
                    <p> Descubre todas nuestras novedades y consejos para darle sabor y alegría a tus platos, 
                    siempre con productos que garantizan la máxima calidad y frescura. ¡Dale un capricho a tu paladar!</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="imagenes/imagen6.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title"> Perfumería </h3>
                    <p> Todo lo que necesitas para tu cuidado y el de los tuyos: novedades, consejos y trucos sobre nuestros 
                    productos de perfumería, puericultura, cosmética y belleza. ¡Siéntete bien!</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="imagenes/imagen7.jpg" alt="Card image cap" id="imagen7">
                <div class="card-body">
                    <h3 class="card-title"> Hogar </h3>
                    <p>Aquí encontrarás todo lo necesario para el cuidado diario de tu casa: productos para la limpieza y mantenimiento 
                    del hogar y de la ropa, que cuentan con la máxima garantía de calidad y eficacia. ¡Hogar, dulce hogar!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">   
                <p id="negrita"> Ver todos </p>
            </div>
        </div>

        <div class="row">
            <div class="col" id="att">
                <h3> <i class="fas fa-bullhorn"></i> <br>Atención al Cliente </h3>
                <p> Puedes realizar cualquier comentario o consulta llamándonos a nuestro
                <strong>teléfono gratuito de Atención al Cliente</strong>, enviando un 
                <strong>Correo Electrónico</strong> o si lo prefieres contacta con nosotros 
                a través de nuestras <strong>Redes Sociales</strong>.</p>
            </div>
            <div class="col" id="prensa">
                <h3> <i class="fas fa-book"></i> <br> Sala de Prensa </h3>
                <p> Notas de prensa, estudios, informes, memorias anuales y otro material corporativo</p>
            </div>
        </div>
        <div class="row" id="empleo">
            <div class="col">    
                <h3> Ofertas de empleo </h3>
                <p> Mercadona dispone de un Modelo de Recursos Humanos reconocido por ofrecer puestos de trabajo estables y de calidad. </p>
                <button type="button" class="btn btn" id="botonempleo"> </i> Ofertas de empleo </button>
            </div>
        </div>

        <footer> 
            <div class="row">
                <img src="imagenes/logofooter.png" alt="Logo Mercadona" id="logofooter">
            </div>
            <div class="row">
                <div class="col">
                    <p id="destacado"> Lo más buscado </p>
                    <p> Localizar Supermercados </p>
                    <p> Trabaja con nosotros </p>
                    <p> Sala de Prensa </p>
                    <p> Conoce Mercadona </p>
                    <p> Consejos </p>
                </div>
                <div class="col">
                    <p id="destacado"> Enlaces de interés </p>
                    <p> Compra online </p>
                    <p> Tarjeta Mercadona </p>
                    <p> Factura Clientes </p>
                    <p> Portal Trabajador </p>
                    <p> E-factura proveedores </p>
                    <p> Portal Trinidad </p>
                </div>
                <div class="col">
                    <p id="destacado"> Consejos </p>
                    <p> Consejos de Alimentación </p>
                    <p> Consejos de Perfumería </p>
                    <p> Consejos de Hogar </p>
                    <p> Consejos de Mascotas </p>
                </div>
                <div class="col">
                    <p id="destacado"> Atención al cliente </p>
                    <p> <i class="fas fa-envelope"></i> Contacto </p>
                    <p> <i class="fas fa-phone"></i> 900 500 103 </p>
                    <p id="destacado"> Redes sociales </p>
                    <a href="https://es-es.facebook.com/mercadona/" target="_blank"><i class="fab fa-facebook fa-2x"></i> </a>
                    <a href="https://twitter.com/mercadona?lang=es" target="_blank"><i class="fab fa-twitter fa-2x"></i> </a>
                    <a href="https://www.youtube.com/mercadona" target="_blank"><i class="fab fa-youtube fa-2x"></i> </a>
                    <a href="https://www.instagram.com/mercadona/?hl=es" target="_blank"><i class="fab fa-instagram fa-2x"></i> </a>
                </div>
                <div class="col">
                    <img src="imagenes/corredor.png">
                </div>
            </div>
            <div class="row" id="gris">
                <div class="col-md-4">
                    <p> © Mercadona S.A. A46103834. Todos los derechos reservados. </p>
                </div>
                <div class="col">
                    <ul>
                        <li>Accesibilidad</li>
                        <li>Condiciones WiFi</li>
                        <li>Política de privacidad </li>
                        <li> Política de Cookies </li>
                        <li> Términos y condiciones </li>
                        <li> Requisitos Técnicos </li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
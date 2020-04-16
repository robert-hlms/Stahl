<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stahl - Soluciones Industriales</title>
  <meta name="title" content="Stahl - Soluciones Industriales">
<meta name="description" content="Servicio profesional y especializado de maquinados industriales de alta precisión CNC.">
<meta property="og:type" content="website">
<meta property="og:url" content="http://stahlmx.com/">
<meta property="og:title" content="Stahl - Soluciones Industriales">
<meta property="og:description" content="Servicio profesional y especializado de maquinados industriales de alta precisión CNC.">
<meta property="og:image" content="">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="http://stahlmx.com/">
<meta property="twitter:title" content="Stahl - Soluciones Industriales">
<meta property="twitter:description" content="Servicio profesional y especializado de maquinados industriales de alta precisión CNC.">
<meta property="twitter:image" content="">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
    <header class="s-header">
        <div class="s-header__brand">
            <a href="/">
                <img src=" {{$MENU_LOGOTIPO->description}} " alt=" {{$MENU_LOGOTIPO->title}} ">
            </a>
        </div>
        <div class="s-header__burger" id="js-header__burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="s-nav">
            <a href="#cover" class="s-nav__link">inicio</a>
            <a href="#nosotros" class="s-nav__link">nosotros</a>
            <a href="#servicios" class="s-nav__link">servicios</a>
            <a href="#clientes" class="s-nav__link">clientes</a>
            <a href="#contacto" class="s-nav__link">contacto</a>
            <div class="s-header__line"></div>
            <div class="s-header__iso"> {{$ISO->title}} </div>
        </nav>
    </header>
    <main class="s-main">
        <section class="s-cover" id="cover">
            <div class="s-cover__video">
                <div class="s-cover__video--bg"></div>
                <video id="s-video" autoplay muted loop playsinline>
                    <source src=" {{$INICIO_MEDIA->description}} " type="video/mp4">
                </video>
            </div>
            <div class="s-cover__info">
                <h1 class="s-cover__info--title"> {{$INICIO->title}} </h1>
                <p class="s-cover__info--paragraph"> {{$INICIO->description}} </p>
            </div>
            <div class="s-cover__iso">
                <img src=" {{$ISO->description}} " alt=" {{$ISO->title}} ">
            </div>
        </section>
        <section class="s-about" id="nosotros">
            <div class="s-about__info">
                <h2 class="s-about__info--title">
                    <span>Acerca de</span>
                    {{$NOSOTROS->title}}
                </h2>
                <p><strong>STAHL</strong> {{$NOSOTROS->description}} </p>
            </div>
            <div class="s-about__gallery">
                <div class="s-about__gallery--bg"></div>
                <div class="s-about__gallery--slides owl-carousel">
                	@foreach($NOSOTROS->images as $image)
                	<div class="s-about__img" style="background-image:url({{$image->url}});"></div>
                	@endforeach
                </div>
                <div class="s-about__gallery--paginator--prev">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="306px" height="306px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve">
                        <g>
                            <g id="chevron-right">
                                <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153 "/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="s-about__gallery--paginator--next">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="306px" height="306px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve">
                        <g>
                            <g id="chevron-right">
                                <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153 "/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div id="s-about__gallery--counter" class="s-about__gallery--counter"></div>
            </div>
        </section>
        <section class="s-services" id="servicios">
            <div class="s-services__bg" style="background-image:url( {{$SERVICIO_M->description}} );"></div>
            <div class="s-services__title">
                <h2> {{$SERVICIOS->title}} </h2>
                <div class="s-services__subtitle"> {{$SERVICIOS->description}} </div>
            </div>
            <div class="s-services__boxes">
                <div class="s-services__box is-active" data-image=" {{$SERVICIO_M->description}} ">
                    <div class="s-services__box--img">
                        <img src=" images/maquinado.png" alt="Stahl Maquinado">
                    </div>
                    <div class="s-services__box--title"> {{$SERVICIO_M->title}} </div>
                </div>
                <div class="s-services__box" data-image=" {{$SERVICIO_T->description}} ">
                    <div class="s-services__box--img">
                        <img src=" images/torno.png" alt="Stahl Torno">
                    </div>
                    <div class="s-services__box--title"> {{$SERVICIO_T->title}} </div>
                </div>
                <div class="s-services__box" data-image=" {{$SERVICIO_S->description}} ">
                    <div class="s-services__box--img">
                        <img src=" images/soldadura.png" alt="Stahl Soldadura">
                    </div>
                    <div class="s-services__box--title"> {{$SERVICIO_S->title}} </div>
                </div>
            </div>
        </section>
        <section class="s-products">
            <div class="s-products__info">
                <h2 class="s-products__info--title"> {{$TRABAJOS->title}} </h2>
                <p> {{$TRABAJOS->description}} </p>
            </div>
            <div class="s-products__gallery">
                <div class="s-products__gallery--bg"></div>
                <div class="s-products__gallery--slides owl-carousel">
                	@foreach($TRABAJOS->images as $image)
                		<div class="s-products__img" style="background-image:url( {{$image->url}} );">
                        <a class="s-products__link" href="#" data-image=" {{$image->url}} " data-title=" {{$image->title}} " data-description=" {{$image->description}} ">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                	@endforeach
                </div>
                <div class="s-products__gallery--paginator--prev">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="306px" height="306px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve">
                        <g>
                            <g id="chevron-right">
                                <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153 "/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="s-products__gallery--paginator--next">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="306px" height="306px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve">
                        <g>
                            <g id="chevron-right">
                                <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153 "/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </section>
        <section class="s-clients" id="clientes" style="background-image:url( {{$CLIENTES_BACKGROUND->description}} );">
            <div class="s-clients__info">
                <h2 class="s-clients__info--title"> {{$CLIENTES->title}} </h2>
            </div>
            <div class="s-clients__brands">
            	@foreach($CLIENTES->images as $image)
            	<div class="s-clients__brand"><img src=" {{$image->url}} " alt=" {{$image->description}} "></div>
            	@endforeach
            </div>
        </section>
        <section class="s-contact" id="contacto">
            <div class="s-contact__info">
                <div class="s-contact__info--title">
                    <h2> {{$CONTACTO->title}} </h2>
                </div>
                <div class="s-contact__info--wrap map">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="s-contact__item">
                        <div class="s-contact__item--title"> {{$UBICACION->title}} </div>
                        <p> {{$UBICACION->ubication->street}} </br> {{$UBICACION->ubication->colony}} </br> {{$UBICACION->ubication->located}} </p>
                    </div>
                </div>
                <div class="s-contact__info--wrap phone">
                    <i class="fas fa-phone-alt"></i>
                    <div class="s-contact__item">
                        <div class="s-contact__item--title"> {{$TELEFONO->title}} </div>
                        <a href="tel:52 1 844 4393329"> {{$TELEFONO->description}} </a>
                    </div>
                </div>
                <div class="s-contact__info--wrap email">
                    <i class="fas fa-envelope"></i>
                    <div class="s-contact__item">
                        <div class="s-contact__item--title"> {{$EMAIL->title}} </div>
                        <a href="mailto:admin@s-stahl.com"> {{$EMAIL->description}} </a>
                    </div>
                </div>
            </div>
            <div class="s-contact__form">
                <form method="post" id="contact-form">
                    {{ csrf_field() }}
                    <div class="elem-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" placeholder="Nombre" required>
                    </div>
                    <div class="elem-group">
                        <label for="email">Correo:</label>
                        <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="elem-group">
                        <label for="subject">Asunto:</label>
                        <input type="text" id="subject" name="subject" required placeholder="Asunto">
                    </div>
                    <div class="elem-group">
                        <label for="message">Mensaje:</label>
                        <textarea id="message" name="message" placeholder="Mensaje" required></textarea>
                    </div>
                </form>
                <button type="button" onclick="send()">Enviar</button>
            </div>
        </section>
        <div class="s-popup-nav">
            <div class="s-popup-nav--overlay"></div>
            <div class="s-popup-nav--header">
                <div class="s-popup-nav--close" id="js-popup-nav--close">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="s-popup-nav--body">
                <a class="s-popup-nav--link" href="#inicio">Inicio</a>
                <a class="s-popup-nav--link" href="#nosotros">Nosotros</a>
                <a class="s-popup-nav--link" href="#servicios">Servicios</a>
                <a class="s-popup-nav--link" href="#clientes">Clientes</a>
                <a class="s-popup-nav--link" href="#contacto">Contacto</a>
            </div>
        </div>
        <div class="s-popup-product">
            <div class="s-popup-product--overlay"></div>
            <div class="s-popup-product--header">
                <div class="s-popup-product--close" id="js-popup-product--close">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="s-popup-product--body">
                <div class="s-popup-product--content">
                    <h2 class="s-popup-product--title"></h2>
                    <p class="s-popup-product--description"></p>
                </div>
            </div>
        </div>
    </main>
    <footer class="s-footer">
        <div class="s-footer__copy">&copy; {{$FOOTER->title}} </div>
        <div class="s-footer__social">
        	@foreach($FOOTER->networks as $network)
        	<a href=" {{$network->url}} " target="_blank"><i class=" {{$network->icon}} "></i></a>
        	@endforeach
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

<script type="text/javascript">
    function send(){
        var url = "{{url('contacts')}}";
        var form = document.getElementById("contact-form");
        var formData = new FormData(form);

        $.ajax({
            url: url,
            method: "POST",
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                if(data.errors){
                    alert(data.errors);
                }
                else{
                    alert(data.success);
                    form.reset();
                }
            },
            error: function(data){
            }
        });
    }
</script>
</html>
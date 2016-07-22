@extends('layouts.master')

@section('content')
<section id="home">
        <div class="home-pattern"></div>
        <div id="main-carousel" class="carousel slide" data-ride="carousel"> 
            <ol class="carousel-indicators">
                <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#main-carousel" data-slide-to="1"></li>
                <li data-target="#main-carousel" data-slide-to="2"></li>
            </ol><!--/.carousel-indicators--> 
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/1.jpg)"> 
                    <div class="carousel-caption"> 
                        <div> 
                            <h2 class="heading animated bounceInDown">Inventario Turístico</h2> 
                            <p class="animated bounceInUp">Visita Chiapas</p> 
                            <a class="btn btn-default slider-btn animated fadeIn" href="#map">Ver mapa</a> 
                        </div> 
                    </div> 
                </div>
                <div class="item" style="background-image: url(images/slider/2.jpg)"> 
                    <div class="carousel-caption"> <div> 
                        <h2 class="heading animated bounceInDown">Conoce nuestra riqueza</h2> 
                        <p class="animated bounceInUp">¿Qué esperas para conocernos?</p> <a class="btn btn-default slider-btn animated fadeIn" href="#map">Ver mapa</a> 
                    </div> 
                </div> 
            </div> 
            <div class="item" style="background-image: url(images/slider/3.jpg)"> 
                <div class="carousel-caption"> 
                    <div> 
                        <h2 class="heading animated bounceInRight">Explora nustras tradiciones</h2> 
                        <p class="animated bounceInLeft">Elige tu ruta</p> 
                        <a class="btn btn-default slider-btn animated bounceInUp" href="#map">Ver mapa</a> 
                    </div> 
                </div> 
            </div>
        </div><!--/.carousel-inner-->

        <a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div> 

</section><!--/#home-->

<section id="about-us">
    <div class="container">
     <div id="map"></div>

        </div>
    </section><!--/#about-us-->


       

        <section id="portfolio">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2 class="title-one">Visita Chiapas</h2>
                        <p>Haz de Chiapas el destino de tus siguientes vacaciones y prepara tus sentidos para una experiencia llena de magia, color y calidez. ¡Ven y enamórate de Chiapas!
</p>
                    </div>
                </div>
               
                <div class="portfolio-items">
                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/a.jpg" alt=""></div> 
                                <div class="mask text-center">
                                    <h3>Lagos de Montebello</h3>
                                    <h4>Comitán</h4>                                   
                                    <a href="images/portfolio/ba.png" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 portfolio-item jooma">
                            <div class="view efffect" >
                                <div class="portfolio-image">
                                    <img src="images/portfolio/bb.jpg" alt="">
                                </div> 
                                <div class="mask text-center">
                                    <h3>Catedral de San Cristobal</h3>
                                    <h4>San Cristobal de las Casas</h4>                                   
                                    <a href="images/portfolio/bb.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                            <div class="view efffect">
                                <div class="portfolio-image">
                                    <img src="images/portfolio/c.jpg" alt="">
                                </div> 
                                <div class="mask text-center">
                                <h3>Cañon del Sumidero</h3>
                                <h4>Chiapa de Corzo</h4>                               
                                <a href="images/portfolio/bc.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 portfolio-item megento">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/d.jpg" alt="">
                            </div> 
                            <div class="mask text-center">
                                <h3>Ruinas de Palenque</h3>
                                <h4>Palenque</h4>                               
                                <a href="images/portfolio/bd.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/e.jpg" alt="">
                            </div> <div class="mask text-center">
                            <h3>Parque de la Marimba</h3>
                            <h4>Tuxtla Gutiérrez</h4>                           
                            <a href="images/portfolio/be.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                    <div class="view efffect">
                        <div class="portfolio-image">
                            <img src="images/portfolio/f.png" alt="">
                        </div> 
                        <div class="mask text-center">
                            <h3>Cascadas de Agua Azul</h3>
                            <h4>Ococingo - Palenque</h4>                           
                            <a href="images/portfolio/bf.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 portfolio-item html">
                    <div class="view efffect">
                        <div class="portfolio-image">
                            <img src="images/portfolio/g.jpg" alt="">
                        </div> 
                        <div class="mask text-center">
                            <h3>Ruta del Café</h3>
                            <h4>Tapachula</h4>
                           
                            <a href="images/portfolio/bg.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 portfolio-item joomla">
                    <div class="view efffect">
                        <div class="portfolio-image">
                            <img src="images/portfolio/h.jpg" alt=""></div> 
                            <div class="mask text-center">
                                <h3>Puerto Arista</h3>
                                <h4>Tonalá</h4>
                                
                                <a href="images/portfolio/bh.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/i.jpg" alt="">
                            </div> 
                            <div class="mask text-center">
                                <h3>Cristo de Copoya</h3>
                                <h4>Copoya</h4>
                               
                                <a href="images/portfolio/bi.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/j.jpg" alt=""></div> 
                                <div class="mask text-center">
                                    <h3>Centro de Comitán</h3>
                                    <h4>Comitán</h4>
                                   
                                    <a href="images/portfolio/bj.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 portfolio-item joomla">
                            <div class="view efffect">
                                <div class="portfolio-image">
                                    <img src="images/portfolio/k.jpg" alt=""></div> 
                                    <div class="mask text-center">
                                        <h3>Ambar</h3>
                                        <h4>Simojovel</h4>
                                       
                                        <a href="images/portfolio/bk.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 portfolio-item megento">
                                <div class="view efffect">
                                    <div class="portfolio-image">
                                        <img src="images/portfolio/l.jpg" alt=""></div> 
                                        <div class="mask text-center">
                                            <h3>Sima de las Cotorras</h3>
                                            <h4>Coita</h4>
                                            
                                            <a href="images/portfolio/bl.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </section> <!--/#portfolio-->


                        <section id="contact">
                            <div class="container">
                                <div class="row text-center clearfix">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="contact-heading">
                                            <h2 class="title-one">Contactanos</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="contact-details">
                                    <div class="pattern"></div>
                                    <div class="row text-center clearfix">
                                        <div class="col-sm-6">
                                            <div class="contact-address"><address><p><span>Secretaría</span> del Turismo</p><strong>Torre Chiapas, Nivel 5 <br>Tuxtla Gutiérrez, Chiapas.</strong></address>
                                                <div class="social-icons">
                                                    <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <div id="contact-form-section">
                                                <div class="status alert alert-success" style="display: none"></div>
                                                <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control name-field" required="required" placeholder="Tu Nombre"></div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Correo Electrónico">
                                                        </div> 
                                                        <div class="form-group">
                                                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
                                                        </div> 
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                        </div>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </section> <!--/#contact--> 
@endsection

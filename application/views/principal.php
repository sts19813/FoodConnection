<!DOCTYPE html>


<html>

    <head>
        <meta charset="UTF-8">
        <title>FoodConnection</title>
        <link rel="stylesheet" href=<?php echo base_url("assets/css/bootstrap.css"); ?> >
        <link rel="stylesheet" href=<?php echo base_url("assets/css/style-portfolio.css"); ?> > 
        <link rel="stylesheet" href=<?php echo base_url("assets/css/picto-foundry-food.css"); ?> >
        <link rel="stylesheet" href=<?php echo base_url("assets/css/jquery-ui.css"); ?> >
        <link rel="stylesheet" href=<?php echo base_url("assets/css/normalize.css"); ?> >
        <link rel="stylesheet" href=<?php echo base_url("assets/css/main.css"); ?> >
          <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>


    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">FoodConnection</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">Inicio</a></li>
                            <li><a class="color_animation" href="#story">Nosotros</a></li>
                            <li><a class="color_animation" href="#pricing">Elige</a></li>
                            <li><a class="color_animation" href="#beer">Opción4</a></li>
                            <li><a class="color_animation" href="#bread">Opción5</a></li>
                            <li><a class="color_animation" href="#featured">Opción6</a></li>
                            <li><a class="color_animation" href="#reservation">Opción7</a></li>
                            <li><a class="color_animation" href="#contact">Opción8</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> FoodConnection</h2>
                    <h2 class="white second-title">" Cultura en tu paladar "</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>¿Quienes somos?</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">FoodConnection es una empresa dedicada a conectar a las personas através de la comida. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="<?php echo base_url("assets/images/kabob.jpg"); ?>" width="250" height="220">
                       <img src="<?php echo base_url("assets/images/limes.jpg"); ?>" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="<?php echo base_url("assets/images/radish.jpg"); ?>"  width="250" height="220">
                       <img src="<?php echo base_url("assets/images/corn.jpg"); ?>"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Variedad</span> de cultura.</h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">Todos</li>
                                <li class="filter" data-filter="breakfast">Desayunos</li>
                                <li class="filter" data-filter="special">Especiales</li>
                                <li class="filter" data-filter="desert">Postres</li>
                                <li class="filter" data-filter="dinner">Cenas</li>
                            </ul><!-- @end #filter-list -->    
                            <ul id="portfolio">
                                <li class="item breakfast"><img src="<?php echo base_url("assets/images/food_icon01.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item dinner special"><img src="<?php echo base_url("assets/images/food_icon02.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner breakfast"><img src="<?php echo base_url("assets/images/food_icon03.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item special"><img src="<?php echo base_url("assets/images/food_icon04.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item dinner"><img src="<?php echo base_url("assets/images/food_icon05.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item special"><img src="<?php echo base_url("assets/images/food_icon06.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert"><img src="<?php echo base_url("assets/images/food_icon07.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item desert breakfast"><img src="<?php echo base_url("assets/images/food_icon08.jpg"); ?>" alt="Food" >
                                    <h2 class="white">$38</h2>
                                </li>
                            </ul><!-- @end #portfolio -->
                        </div><!-- @end #w -->
                    </div>
                </div>
            </div>  
        </section>


        <!-- ============ Our Beer  ============= -->


        <section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1>Los mejores <span>Lugares</span>Para ti.</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-5">
                   <div class="img-section">
                       <img src="<?php echo base_url("assets/images/beer_spec.jpg"); ?>" width="100%">
                   </div>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-1">
                    <h1>Mejores vinos y cervesas</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text">Here at Restaurant we’re all about the love of beer. New and bold flavors enter our doors every week, and we can’t help but show them off. While we enjoy the classics, we’re always passionate about discovering something new, so stop by and experience our craft at its best.</p>
                </div>
            </div>
        </section>


       <!-- ============ Our Bread  ============= -->


        <section id="bread" class=" description_content">
            <div  class="bread background_content">
                <h1>Nuestro menu de desayuno<span>xd</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Nuestros Postres</h1>
                    <div class="icon-bread fa-2x"></div>
                    <p class="desc-text">bore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url("assets/images/bread1.jpg"); ?>" width="260" alt="Bread">
                    <img src="<?php echo base_url("assets/images/bread1.jpg"); ?>" width="260" alt="Bread">
                </div>
            </div>
        </section>


        
        <!-- ============ Featured Dish  ============= -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>¨Platillos mas utilizados<span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>La magia de los platillos</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">bore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url("assets/images/slider2.jpg"); ?>"  alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url("assets/images/slider2.jpg"); ?>" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url("assets/images/slider3.JPG"); ?>"alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============ Reservation  ============= -->

        <section  id="reservation"  class="description_content">
            <div class="featured2 background_content">
                <h1>Reserva un lugar!</h1>
            </div>
            <div class="text-content container"> 
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
                                                <input type="text" name="state" id="state" required="required" class="form" placeholder="State" />
                                                <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="Reservation Date" />
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" />
                                                <input type="text" name="guest" id="guest" required="required" class="form" placeholder="Guest Number" />
                                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                            </div>

                                            <div class="col-xs-6 ">
                                                <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Reservar</button> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <!-- Message -->
                                        <div class="right-text">
                                            <h2>Horario</h2><hr>
                                            <p>Lunes a viernes: 7:30 AM - 11:30 AM</p>
                                            <p>Sabado y Domingo: 8:00 AM - 9:00 AM</p>
                                            <p>Lunes a Viernes: 12:00 PM - 5:00 PM</p>
                                            <p>Lunes a Sabado: 6:00 PM - 1:00 AM</p>
                                            <p>Lunes a Domingo: 5:30 PM - 12:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>

        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">Siguenos</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">o contactanos</span>
                    <span class="social_info"><a class="color_animation" href="tel:883-335-6524">99-11-11-72-69</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.664063989472!2d91.8316103150038!3d24.909437984030877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505558dd0be6a1%3A0x65c7e47c94b6dc45!2sTechnext!5e0!3m2!1sen!2sbd!4v1444461079802" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div><!-- End Right Inputs -->
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" class="form-btn">Envianos un mensaje</button> 
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; ITS Motul, <a href="https://themewagon.com/">Marzo 2019</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Regresar Inicio <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Construido con <a href="#" target="_blank">codeigniter</a></p></div>
            </div>
        </footer>



<?php
footer_assets();
?>

    </body>
</html>
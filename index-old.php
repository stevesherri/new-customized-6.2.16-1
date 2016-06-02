<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QPC Card Builder -- Home</title>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic|Oswald:400,700|Indie+Flower|Bitter:400,400italic,700|Passion+One:400,700,900|Anton|Libre+Baskerville:400,400italic,700|Crimson+Text:400,600,600italic,700,700italic|Play:400,700|Francois+One|Questrial|Orbitron:400,500,700,900|Dancing+Script:400,700|Sigmar+One|Chewy|Work+Sans:400,600,500,700,800,900|Lobster+Two:400,400italic,700,700italic|Archivo+Black|Bevan|Alfa+Slab+One|Great+Vibes|Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">

  </head>
  <body id="home">
  	<div class="phone_bar">
    	<section class="container">
        	<h2  style="float:right;">407-298-3579</h2>
    		<img src="images/phone.png" style="max-height:25px; margin-top:25px;"/>
            
        </section>
    </div>
  	<section class="container">

    	<div class="content row">
        	<section class="col-lg-2">
                <img src="images/QPC_Logo.png" style="max-height:50px; margin:5px;"/>
            </section>
        	<section class="topnav col-lg-10">
            	
            	<div class="navbar navbar-right">
                	<ul class="nav navbar-nav">
                    	<li><a href="#">Add An Image</a></li>
               			<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Add/Edit Text <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropDownMenu">
                            	<li class="divider"></li>
                            	<li><a tabindex="-1" href="">ONE</a></li>
                                <li><a tabindex="-1" href="">TWO</a></li>
                                <li><a tabindex="-1" href="">THREE</a></li>
                            </ul>
                         </li>
                    </ul>
                </div>
            </section><!-- END TOP NAV -->
            
            <section class="container hidden-sm slideshow">
            	aaa
            </section>
            <section class="container">
                <button class="btn get_quote" style="float:right;">Get a Quote Now!!!</button>
                <h3 class="offer hidden-sm">We offer the best prices for all your needs!</h3>
                    
            </section>
            
        	<section class="main col-lg-12">
            	<? include("includes/content.php"); ?>
            </section> <!-- MAIN -->
            
        </div> <!-- CONTENT -->

   	</section> <!-- CONTAINER -->
    
    <section class="container">
    	<footer class="row">
        	<nav class="col-lg-12">
            	<ul class="breadcrumb">
        			<li><a href="#">One</a></li>
        			<li><a href="#">Two</a></li>
        			<li><a href="#">Three</a></li>
        		</ul><!-- BREADCRUMBS -->
            </nav><!-- NAV -->
        </footer><!-- FOOTER -->
    </section> <!-- CONTAINER -->

    <script src="js/bootstrap.js"></script>
    <script src="js/myscripts.js"></script>
   
  </body>
</html>
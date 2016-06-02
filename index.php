<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Untitled Document</title>
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/mystyles.css">
    </head>
    
    <body>
    	<div class="phone_bar"> <!-- BLUE BAR WITH PHONE -->
            <section class="container">
                <h3  style="float:right; margin:10px 0 10px 25px;">407-298-3579</h3>
                <img src="images/phone.png" style="max-height:25px; margin-top:10px;"/>
            </section>
        </div> <!-- END PHONE BAR -->
        
        <header class="container">
        	<section class="col-sm-2">
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
        </header> <!-- END HEADER -->
        
        <section class="slideshow">
        	<div class="content container">
            	<div class="row" style="padding-bottom:25px;" >
                	<section class="col-sm-12">
                    	<div class="carousel slide featured" data-ride="carousel" id="featured" style="margin:0;">
                        	<ol class="carousel-indicators">
                            	<li data-target="#featured" data-slide-to="0" class="active"></li>
                            	<li data-target="#featured" data-slide-to="1"></li>
                            </ol>
                        	<div class="carousel-inner">
                            	<div class="item active">
                                	<img class="img-rounded-bottom" src="images/carousel/Playing-cards-banner.jpg" alt="Low 10 Deck Minimum"/>
                                </div><!-- END SLIDE 1 -->
                                <div class="item">
                                	<a href="#"><img class="img-rounded-bottom" src="images/carousel/Custom-playing-cards-banne2.jpg" alt="Get A Quote"/></a>
                                </div><!-- END SLIDE 2 -->
                            </div> <!-- END CAROUSEL INNER -->
                            <!--
                            <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
                            	<span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#featured" role="button" data-slide="next">
                            	<span class="glyphicon glyphicon-chevron-right"></span>
                            </a> -->
                        </div> <!-- END CAROUSEL -->
                    </section> <!-- END COLUMN -->
                </div><!-- END ROW -->
            </div> <!-- END CONTENT CONTAINER -->
        </section> <!-- SLIDE SHOW -->
        
        <script src="js/bootstrap.js"></script>
        <script src="js/myscripts.js"></script>
    </body>
</html>
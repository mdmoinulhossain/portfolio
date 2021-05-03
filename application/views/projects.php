<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MD.MOINUL HOSSAIN</title>
    <link rel="icon" href="<?php echo base_url(); ?>/assets/images/lion.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="moinul" href="<?php echo base_url(); ?>">Moinul</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <i class="fas fa-bars" style="color: #fff"></i> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link"><span>Home</span></a></li>
	          
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
            <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>


<!-- <section id="home-section" class="hero">
		<div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	        
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

		          	<div style="padding-left: 400px; padding-top: 0;">
		          	    <p class="mmbt">
			            	<a href="#" class="mmbt">
			            		
			            	My
			            	</a>
			            	<a href="#" class="mmbt">
			            		
			            	 works
			            	</a>
			            	<a href="#" class="mmbt">
			            		
			            	are 
			            	</a>
			            	<a href="#" class="mmbt">
			    
			            	Here
			            	</a>
			            </p>
		            </div>
		          </div>
	        	</div>
	        
	      </div>
	    </div>
    </section> -->


<section class="ftco-section ftco-project mt-5" id="projects-section">
    <div class="container">
    	<div class="row">
    			<?php foreach($projects->result() as $row) :?>

    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url(); ?>/assets/images/projects/<?php echo $row->pic; ?>);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="<?php echo $row->link; ?>" target="_blank"><?php echo $row->des; ?></a>
	    					</h3>
	    					<span><?php echo $row->h1; ?></span>
	    				</div>
    				</div>
  				</div>
  				<?php  endforeach ; ?>
    		</div>
    </div>
</section>


<?php include_once('footer.php'); ?>
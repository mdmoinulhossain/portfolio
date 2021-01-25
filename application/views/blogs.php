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

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="moinul" href="<?php echo base_url(); ?>">Moinul</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link"><span>Home</span></a></li>
	          
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

<section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Blogs</h1>
            <h2 class="mb-4">Blogs</h2>
            <p>All Blog is here! </p>
          </div>
        </div>

            <div class="row d-flex">
                <?php foreach($blogs->result() as $row) :?>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="<?php echo $row->link; ?>" class="block-20" style="background-image: url('<?php echo base_url(); ?>/assets/images/blogs/<?php echo $row->pic; ?>');" target='_blank'>
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <div class="d-flex align-items-center mb-3 meta">
                      <p class="mb-0">
                        <span class="mr-2"><?php echo $row->date; ?></span>
                        <a href="https://www.facebook.com/mmoinulh100" class="mr-2" target='_blank'><?php echo $row->name; ?></a>
                        <a href="<?php echo $row->link; ?>" class="meta-chat" target='_blank'> link</a>
                      </p>
                    </div>
                    <h3 class="heading"><a href="<?php echo $row->link; ?>" target='_blank'><?php echo $row->h1; ?></a></h3>
                    <p><?php echo $row->des; ?>
                    <span id="demo"><?php echo $row->desde; ?></span></p>
                    <a class="show" onclick="read()" href="javascript:void();">Read More...</a>
                  </div>
                </div>
              </div>
              <?php  endforeach ; ?>
            </div>
      </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function read() {
  /*var srcElement = document.getElementById("demo");
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';            
					}
					return false;
				}*/
  //document.getElementById("demo").innerHTML = "<?php echo $row->desde; ?>";
      
}

$(".show").on('click', function(){

$(this).parent().toggleClass("show");
var TextReplace = $(this).parent().hasClass("show") ? "Read Less" : "Read More...";
$(this).text(TextReplace);

});

</script>


<?php include_once('footer.php'); ?>

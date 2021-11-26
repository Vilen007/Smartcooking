<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nutrient</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
	<link href="assets/css/element.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Geostar+Fill|Leckerli+One|Montez" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/ekko-lightbox.js"></script>

  </head>
<body>
<section id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand heading_tag" href="<?php echo base_url()?>home">Nutrient </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="tag_menu active_tab" href="<?php echo base_url()?>home">HOME</a>                    </li>
                     
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>ingredients">Ingredients</a>                    </li>
                    
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>recipies">Recipies</a>                    </li>
						<?php if($this->session->userdata('id')) { ?>
							<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/welcome">Dashboard</a>                    </li>
						<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/logout">Logout</a>                    </li>
						
					<?php }  else {?>	
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/signup">Sign Up</a>                    </li>
						
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/login">Login</a>                    </li>
						<?php } ?>
                </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>

<section id="header_mini">
    <div class="container">
	  <div class="row">
	          <div class="header_mini clearfix">
			      <h1><a class="heading_tag" href="index.html">Nutrient</a></h1>
			  </div>
	                <a id="menu-toggle" href="#" class="btn btn-warning btn-lg toggle"><i class="fa fa-toggle-on"></i></a>
		  
			         <div id="sidebar-wrapper" class="">
						  <ul class="sidebar-nav">
							<a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-remove"></i></a>
							<li class="sidebar-brand">
							  <a class="heading_tag" href="<?php echo base_url()?>home">Nutrient</a></li>
								 <li>
                        <a class="tag_menu active_tab" href="<?php echo base_url()?>home">HOME</a>                    </li>
					 
						<li>
                        <a class="tag_menu" href="<?php echo base_url()?>ingredients">Ingredients</a>                    </li>
                    
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>recipies">Recipies</a>                    </li>
						<?php if($this->session->userdata('id')) { ?>
							<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/logout">Logout</a>                    </li>
						<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/welcome">Dashboard</a>                    </li>
						
					<?php }  else {?>	
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/signup">Sign Up</a>                    </li>
						
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>user/login">Login</a>                    </li>
						<?php } ?>
					          
						  </ul>
			         </div>
					 
	   </div>
	</div>
  </section>

<section id="center">
 <div class="center_main clearfix">
   <div class="container">
  <div class="row">
   <div class="center text-center clearfix">
     <h2 class="heading_tag">We’ve Some Quality Of Food </h2>
	 <h1>Smart Cooking</h1>
	 <h3>We provide you our best recipies, quick Remedies. You can search our food red recipies by ingredients you have!!</h3>
   </div>
  </div>
 </div>
 </div>
</section>

<section id="about_home">
 <div class="about_home_main clearfix">
  <div class="container">
	  <div class="row">
		   <div class="about_home text-center clearfix">
			<h2><i class="fa fa-apple"></i></h2>
			<h1>WELCOME TO SMART COOKING!</h1>
			<h3 class="heading_tag">Make your food perfect </h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero.<br> Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br> Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta.<br> Mauris massa. Vestibulum lacinia arcu eget nulla!</p>
		   </div>
	  </div>
 </div>
 </div>
</section>



<section id="offer_home">
 <div class="container">
  <div class="row">
    <div class="about_home text-center clearfix">
			<h2><i class="fa fa-apple"></i></h2>
			<h1>Our Food Categories</h1>
			<h3 class="heading_tag">Check This Out</h3>
		   </div>
    <div class="offer_home  clearfix">
	 <div class="col-sm-4">
	  <div class="offer_home_inner text-center">
	   <a href="#"><img class="img-rounded" src="assets/img/7.jpeg" width="100%" height="400px"></a>
	   <h3 style="color:white">Russian</h3>
	   <p class="heading_tag">Taste you Love!!</p>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="offer_home_inner text-center">
	   <a href="#"><img class="img-rounded" src="assets/img/8.jpeg" width="100%" height="400px"></a>
	   <h3 style="color:white">Chinesse</h3>
	   <p class="heading_tag">Best Chinese Recipies!!</p>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="offer_home_inner text-center">
	   <a href="#"><img class="img-rounded" src="assets/img/9.jpeg" width="100%" height="400px"></a>
	   <h3 style="color:white">Desi Food</h3>
	   <p class="heading_tag">Must Try Recipies!!</p>
	  </div>
	 </div>
	</div>
	<div class="offer_home_1 text-center  clearfix">
	  <h4><a href="<?php echo base_url()?>recipies">SEE DISHES</a></h4>
	</div>
  </div>
 </div>
</section>


<section id="footer">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
     <div class="footer text-center">
	    <p> © 2013 Your Website Name. All Rights Reserved | Design by Smart Cooking</p>
	 </div>
   </div>
  </div>
 </div>
</section>

<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpAnimatedHeader.js"></script>
<script type="text/javascript">
	  $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
	</script>
<script type="text/javascript">
	$(document).ready(function() {              
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var $this = $(this),
        c = $this.data('count');    
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });      
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
}); 

	</script>
</body>
       
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nutrient</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css"') ?> rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" />
	<link href="<?php echo base_url('assets/css/element.css') ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Geostar+Fill|Leckerli+One|Montez" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<style>
  .badge{
    background-color : powderblue;
    color: black;
    font-size : 20px;
    margin-bottom: 15px
  }
  .badge a{
    color: black;
  }
</style>
  </head>
<body>
<section id="header" class="header_menu">
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
                        <a class="tag_menu" href="<?php echo base_url()?>home">HOME</a>                    </li>
                     
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>ingredients">Ingredients</a>                    </li>
          <li>
                        <a class="tag_menu" href="<?php echo base_url()?>ingredients/useringre">User Ingredients</a>                    </li>
					
                        <li>
                        <a class="tag_menu" href="<?php echo base_url()?>recipies">Recipies</a>                    </li>
                       <?php if($this->session->userdata('id')) { ?>
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
							  <a class="navbar-brand heading_tag" href="<?php echo base_url()?>home">Nutrient </a>
								 <li>
                                 <li>
                        <a class="tag_menu" href="<?php echo base_url()?>home">HOME</a>                    </li>
                     
					<li>
                        <a class="tag_menu" href="<?php echo base_url()?>ingredients">Ingredients</a>                    </li>
                        <li>
                        <a class="tag_menu" href="<?php echo base_url()?>ingredients/useringre">User Ingredients</a>                    </li>
                        <li>
                        <a class="tag_menu" href="<?php echo base_url()?>recipies">Recipies</a>                    </li>
                        <?php if($this->session->userdata('id')) { ?>
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
					 
	   </div>
	</div>
  </section>
<br><br><br><br><br><br><br><br> 
<h1>Ingredients</h1>
<br><br>
<div class="container">
     <div class="row">
     <?php foreach($ingre as $i){ ?>
      <div class="col-md-2">
      <span class="badge rounded-pill bg-primary"><?= anchor("ingredients/getuserrecipe/{$i->ingre_name}",$i->ingre_name) ?></span>
      </div>
  <?php } ?>
  </div>
  </div>
<br><br>
<section id="footer">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
     <div class="footer text-center">
	    <p> © 2013 Your Website Name. All Rights Reserved | Design by <a href="http://www.templateonweb.com">TemplateOnWeb</a></p>
	 </div>
   </div>
  </div>
 </div>
</section>

<script src="<?php echo base_url('assets/js/classie.js') ?>"></script>

<script src="<?php echo base_url('assets/js/cbpAnimatedHeader.js') ?>"></script>

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

</body>
       
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nutrient</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.min.css')?>" />
	<link href="<?= base_url('assets/css/element.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Geostar+Fill|Leckerli+One|Montez" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<script src="<?= base_url('assets/js/jquery-2.1.1.min.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
.comment{
  border-radius:50px;
  background-color: rgb(234, 234, 234);;
  padding: 15px;

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
                        <a class="tag_menu" href="<?php echo base_url()?>home">HOME</a>                    </li>
                        </ul>
			         </div>
					 
	   </div>
	</div>
  </section>
  
<section>
    <div class="container">
        <br><br><br><br>
        <img src="<?= $name->image_path ?>" class="img-fluid" width="100%" height="500px" alt="...">
        <br><br>
        <h1 style="color:blue"> Recipe Name : </h1><h2 style="text-align:center"><?= $name->name ?></h2> <br> <br>
        <h1  style="color:blue"> Recipe Remedy : </h1> <br> <center><h4 ><?= $remed->remedi ?></h4></center> <br> <br>
        <h1  style="color:blue"> Recipe Ingredients : </h1> <br>
        <ol  style="margin-left:45%">
        <?php foreach($ingre as $i){ ?>
               <h4 ><li><?= $i->ingre_name ?></li></h4>
                <?php }  ?>
        </ol>

    </div>
</section>

<section>
<div class="container">
  <h1 style="color:blue"> Comments : </h1>
  <?php if($this->session->userdata('id')  ) { ?>
      <?php echo form_open("recipies/usercomments/{$name->id}") ?> 
      <?php echo form_hidden('user_id',$this->session->userdata("id")); ?>
      <div class="row">
      <div class="col-md-9">
          <div class="form-group">
              <?php echo form_input(['class'=>'form-control', 'value'=>set_value('coment'), 'name'=>'coment', 'placeholder'=>'Write your comment' ]) ?>
          </div>
      </div>
      <div class="col-md-3">
      <?php echo form_submit(['class'=>'btn btn-primary' ,'value'=>'Submit' ]) ?>
      </div>
  <?php } ?>
</div>
</section>
<section>
  <div class="container">
      <?php foreach($cmnt as $i) { 
          foreach($user as $u){
        if($i->user_id == $u->id){
          $username = $u->username;
        } }?>
      <?php  if($i->article_id == $name->id){ ?>

      <div class="row">
      <div class="col-md-10">
        <strong style="font-size: 25px;"><?php echo $username ?> </strong> <small
          class="badge badge-secondary">3 min ago</small>
          <div class="mx-3">
          <p class="comment my-2"> <?= $i->coment ?> </p>
        </div>
      </div>
      </div>

        <br>
      <?php } } ?>
  </div>
</section>




  <section id="footer">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
     <div class="footer text-center">
	    <p> © 2013 Your Website Name. All Rights Reserved | Design by Smart Cooking Team</p>
	 </div>
   </div>
  </div>
 </div>
</section>

<script src='<?= base_url("assets/js/classie.js") ?>'></script>

<script src='<?= base_url("assets/js/cbpAnimatedHeader.js")?>'></script>

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
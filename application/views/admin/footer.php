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
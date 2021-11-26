<section>
<?php include('header.php'); ?>

<div class="container" style="margin-top:150px">
<h1>Add Recipe</h1><br>
    <?php echo form_open_multipart('admin/adminrecipeintodb') ?> 
    <?php echo form_hidden('admin_id',$this->session->userdata("admin_id")); ?>
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Recipe name: </label>
            <?php echo form_input(['class'=>'form-control', 'value'=>set_value('name'), 'name'=>'name', 'placeholder'=>'Recipe Name' ]) ?>
        </div>
    </div>
    <div class="col-md-6" style="margin-top:48px">
        <?php echo form_error('name') ?>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-6" id="addmore">
    <label class="form-label">Ingredients </label>
        <input class="form-control" type="text" name="ingredient[]" id="name" placeholder="Enter Ingredients" >
    </div>
    <div class="col-md-2">
    <!-- <?php echo form_error('ingredient') ?> -->
        <button name="add" id="add" class="btn btn-dark">Add More</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label class="form-label">Recipe Remedy: </label>
        <?php echo form_textarea(['class'=>'form-control', 'value'=>set_value('remedi'), 'name'=>'remedi', 'placeholder'=>'Your Recipe Remedy' ]) ?>
    </div>
    </div>
    <div class="col-md-6" style="margin-top:48px">
        <?php echo form_error('remedi') ?>
    </div>
</div>
   <br>
   <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="body">Your Recipe Pic</label>
  
   <?php  echo form_upload(['name'=>'userfile']); ?>
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
   <?php if(isset($upload_error)) { echo $upload_error;  }  ?>
  </div>
   </div>
    <br>
    <?php echo form_submit(['class'=>'btn btn-primary' ,'value'=>'Submit' ]) ?>
    <?php echo form_reset(['class'=>'btn btn-danger', 'value'=>'Reset' ]) ?>
    <?php echo form_close() ?>
</div>

<?php include('footer.php'); ?>
</section>
  
<script>
      $(document).ready(function(){
          let max = 8;
          var i = 1;
          $('#add').click(function(e){
              e.preventDefault();
              if(i < max){
                  $('#addmore').append('<div><br><input class="form-control" type="text" placeholder="Enter Ingredients" name="ingredient[]" /><a href="#" class="remove_field">Remove</a></div>')
                    i++;
              }
          })
          $('#addmore').on('click',".remove_field",function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
          })
      })
  </script>
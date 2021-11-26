<section>
<?php include('header.php'); ?>
<div class="container" style="margin-top:150px">
<h1>Add Recipe</h1><br>
<?php $idi = [] ?>
    <?php echo form_open_multipart("user/updateuserrecipe/{$name->id}") ?>
    
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Recipe name: </label>
            <?php echo form_input(['class'=>'form-control', 'value'=>set_value('name',$name->name) , 'name'=>'name', 'placeholder'=>'Recipe Name' ]) ?>
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
    <?php foreach($ingre as $i){
        array_push($idi, $i->id);
        ?>
        <?php echo form_input(['class'=>'form-control', 'value'=>set_value('name',$i->ingre_name) , 'name'=>'ingredient[]', 'placeholder'=>'Enter Ingredients' ]) ?>
     <?php }  ?>
    </div>
    <div class="col-md-2">
    <!-- <?php echo form_error('ingredient') ?> -->
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label class="form-label">Recipe Remedy: </label>
        <?php echo form_textarea(['class'=>'form-control','value'=>set_value('remedi',$reme->remedi), 'name'=>'remedi', 'placeholder'=>'Your Recipe Remedy' ]) ?>
    </div>
    </div>
    <div class="col-md-6" style="margin-top:48px">
        <?php echo form_error('remedi') ?>
    </div>
</div>
   <br>
   <?php echo form_hidden('ingre_id', $idi) ?>
    <?php echo form_submit(['class'=>'btn btn-primary' ,'value'=>'Submit' ]) ?>
    <?php echo form_reset(['class'=>'btn btn-danger', 'value'=>'Reset' ]) ?>
    <?php echo form_close() ?>
</div>
<?php include('footer.php'); ?>
</section>

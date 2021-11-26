<?php 
    include "header.php"
?>
<section>
    <img src="<?= base_url('assets/img/dashboard.jpeg')?>" class="img-fluid"  width="100%" height="500px">
</section>
<section style="margin-top:23px">
   <center> <h1>User-Recipies</h1></center>
</section>
<section>
<div class="container my-4">
        <div class="table" >
            <br>
            <table>
                <thead>
                    <tr>
                        <th style="padding:24px">ID</th>
                        <th style="padding:24px">Recipe Name</th>
                        <th style="padding:24px">Edit</th>
                        <th style="padding:24px">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($recipe)) { 
                        $count = 0;
                    foreach ($recipe as $i) { ?>
                    <tr>
                        <td style="padding:24px"><?php echo ++$count ?></td>
                        <td style="padding:24px"><?= $i->name; ?></td>
                        <td style="padding:24px"><?= anchor("user/edituserrecipe/{$i->id}",'Edit',['class'=>'btn btn-primary']); ?></td>
                        <td style="padding:24px"><?= anchor("user/deluserrecipe/{$i->id}",'Delete',['class'=>'btn btn-danger']); ?></td>
                    </tr>
                    <?php } } 
                        else{ ?>
                            <tr>
                                <td colspan="3">No Data Available</td>
                            </tr>
                    <?php    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php 
    include "footer.php"
?>
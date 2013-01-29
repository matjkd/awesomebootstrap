<?= form_open_multipart("admin/submit_content") ?> 

<p>
    Title:<br/>
    <?= form_input('title', set_value('title')) ?>
</p>

<p>
    Menu link (not required field):<br/>
    <?= form_input('menu', set_value('menu')) ?>
</p>




<?php
if (!isset($category)) {
    $category = "";
}
?>

<p>
    Category:<br/>
    <input type="text" name="category"  value="<?= set_value('category', $category) ?>"  disable="disabled" onFocus="this.blur();"><br/>
</p>

<p class="Image">
    <?= form_label('Image') ?> <br/>

<?= form_upload('file') ?>
</p>

<?php if ($category == "gallery") { ?>

    <p>
        Gallery:<br/>

<select name="gallery">
        <?php
       		foreach($galleries as $row):?>
          <?php if($selectedGallery == $row->gallery_id) {
          	 $selected = "selected";
		  } else {
		  	 $selected = "";}
		  ?>
 <option <?=$selected?> value="<?=$row->gallery_id?>" ><?=$row->gallery_title?></option>
		<?endforeach;
        ?>
       </select>
  
    </p>

<?php } ?>

<p>
    Content:<br/>
    <textarea cols=75 rows=20 name="content" id="content"  class='wymeditor'></textarea>

</p>
<input type="submit" name="upload" class="wymupdate" />

<?= form_close() ?> 

<?= form_open_multipart("admin/submit_theme") ?> 
  <fieldset>
    <legend>Add a theme</legend>
    <label>Theme Name</label>
    <input type="text" name="themename" placeholder="theme name">
    
     <label>Screenshot</label>
    <?= form_upload('file') ?>
 
     <label>Theme URL</label>
    <input type="text" name="themeurl" placeholder="theme url">
    
     <label>Theme type</label>
    <input type="text" name="themetype" placeholder="theme type">
    
     <label>Theme price</label>
    <input type="text" name="themeprice" placeholder="theme price">
    
    
    
    <label>Currency</label>
    <input type="text" name="currency" placeholder="currency">
    
     <label>Affiliate</label>
    <input type="text" name="affiliate" value="?ref=matjkd">
    
      <label>website</label>
    <input type="text" name="website" value="www.wrapbootstrap.com">
    
    
    <label>Description</label>
    <textarea name="description"></textarea>
    <button type="submit" class="btn">Submit</button>
  </fieldset>
</form>
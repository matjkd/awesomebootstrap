

<?php 

$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "you are logged in. <a href='".base_url()."user/login/logout'>logout</a>";
		}	
		else
		{ ?>
			
			
<?=form_open(base_url().'user/login/validate_credentials')?>
  <fieldset>
  	
    <legend>Login</legend>
    <label>Username</label>
    <input type="text" name="username" placeholder="Username">
    <label>Password</label>
    <input type="password" name="password" placeholder="Password">
    <button type="submit" class="btn">Submit</button>
    
  </fieldset>
  
</form>

<?php }?>
 <?php $this->datestring = "%l %j%S %M  %Y";?>


        <div class="row">
            <section id="page-sidebar" class="pull-right span8">
<?php foreach($blog as $row):?>
	
	<?php 
	$unix = $row->date_added;
			$timeTrim = mdate($this->datestring, $unix);
			
	 ?>
                <article class="blog-post">
                    <div class="row">
                        <div class="span8">
                            <h3 class="post-title"><a href="<?=base_url()?>blog/viewblog/<?=$row->menu?>"> <?=$row->title?></a></h3>
                            
                            <ul class="post-meta">
                                <li><i class="icon-calendar"></i> <a href="#"><?=$timeTrim?></a></li>
                                <li><i class="icon-user"></i> <a href="#"><?=$row->added_by?></a></li>
                                <li><i class="icon-list-alt"></i> <a href="#">News</a>, <a href="#">Web Design</a></li>
                                <li><i class="icon-tag"></i> <a href="#">CSS3</a> <a href="#">HTML5</a> <a href="#">Responsive</a></li>
                                <li><i class="icon-comment"></i> <a href="#">0 Comments</a></li>
                                
                                 <?php
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in == true) {
            echo "<li><a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this page</a></li>";
        }
        ?>
                            </ul>
                           
                            <div class="post-content">
                              <?=$row->content?>
                              
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach;?>

                <hr />

              

             
            </section>
            <!--sidebar-->
            <aside id="sidebar" class="pull-right span4">
            	
            	<section class="hidden-tablet">
            		<div>
            		<?=$this->load->view('ads/medrectangle')?>
</div>
            		
            	</section>
           
           
          

            </aside>
        </div>

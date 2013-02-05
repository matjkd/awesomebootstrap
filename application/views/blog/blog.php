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
           
            <!--twitter -->
            <section id="twitter-sidebar">
                <h3 class="widget-title">Twitter</h3>
                <div class="twitter"></div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $(".twitter").tweet({
                            join_text: "auto",
                            username: "matjkd",
                            avatar_size:40,
                            count: 3,
                            auto_join_text_default: "we said,",
                            auto_join_text_ed: "we",
                            auto_join_text_ing: "we were",
                            auto_join_text_reply: "we replied",
                            auto_join_text_url: "we were checking out",
                            loading_text: "loading tweets..."
                        });
                    });
                </script>
            </section>
            <section>
                <h3 class="widget-title">Latest Themes</h3>
                <div id="latestwork-sidebar" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="active item"><img src="example/latest3.jpg" alt="photo"/></div>
                        <div class="item"><img src="example/latest4.jpg" alt="photo"/></div>
                        <div class="item"><img src="example/latest5.jpg" alt="photo"/></div>
                    </div>
                    <a class="carousel-control left" href="#latestwork-sidebar" data-slide="prev"></a>
                    <a class="carousel-control right" href="#latestwork-sidebar" data-slide="next"></a>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.carousel').carousel({
                            interval: 5000
                        })
                    });
                </script>
            </section>
          

            </aside>
        </div>

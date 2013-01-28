 <div class="row">
            <div class="span12">
                <!--filter-->
                <ul id="filtrable">
                    <li class="current all"><a href="#all">All</a></li>
                    <li class="html"><a href="#html">Html</a></li>
                    <li class="css"><a href="#css">Wordpress</a></li>
                    <li class="php"><a href="#php">Joomla</a></li>
                    <li class="javascript"><a href="#javascript">Free</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <section class="row portfolio filtrable clearfix">
        	
        	
        	<?php foreach($themes as $row): ?>
            <article data-id="id-1" data-type="javascript html php" class="span3 bg-color-blue">
                <div class="inner-image">
                    <a href="<?=$row->theme_url?>" target="_blank">
                        <img src="https://s3-eu-west-1.amazonaws.com/awesomebootstrap/themes/<?=$row->theme_image?>" alt="photo"/>
                        <span class="frame-overlay"></span>
                    </a>
                </div>
                <div class="inner-text">
                    <h4 class="title"><a href="./blog-single.html"><?=$row->theme_name?></a></h4>
                    <p>Per insolens urbanitas pris tantas corpora cum commune dignissim pro delectus salutatus ever labitur.</p>
                </div>
            </article>
            
            <?php endforeach;?>
          
            </section>
      
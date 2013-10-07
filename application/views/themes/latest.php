 <div class="row">
 
 	
            <div class="span12">
                <!--filter-->
                <ul id="filtrable">
                    <li class="current all"><a href="#all">All</a></li>
                    <li class="html"><a href="#html">Html</a></li>
                    <li class="css"><a href="#css">CSS</a></li>
                    <li class="less"><a href="#less">LESS</a></li>
                    <li class="free"><a href="#free">Free</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <section class="row portfolio filtrable clearfix">
        	
        	
        	<?php foreach($themes as $row): ?>
            <article data-id="id-1" data-type="<?=$row->theme_type?>" class="span3 bg-color-blue">
                <div class="inner-image">
                    <a href="<?=$row->theme_url?><?=$row->theme_affiliate?>" target="_blank">
                        <img src="<?=$row->theme_image?>" alt="<?=$row->theme_name?>"/>
                        <span class="frame-overlay"></span>
                    </a>
                </div>
                <div class="inner-text">
                    <h4 class="title"><a target="_blank" href="<?=$row->theme_url?><?=$row->theme_affiliate?>"><?=$row->theme_name?></a></h4>
                    <p><?=$row->description?></p>
                    <br/>
                   <a target="_blank" href="http://<?=$row->theme_source?>"><?=$row->theme_source?></a>
                </div>
            </article>
            
            <?php endforeach;?>
          
            </section>
      
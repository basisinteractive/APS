<style type="text/css">
.wrap{max-width:1000px !important;}
.galleryItem a{ border-bottom:none !important;}
.qlink-link-wrap a{ border-bottom:none !important;}
.wrap.clearfix { margin-left: auto !important;  margin-right: auto !important; margin-top: -4px !important; max-width: 960px !important;}
#block-service-links-service-links{ display:none;}
#main{margin:0 !important;}
img{ padding:0 !important;}
h3{ margin-bottom:1em !important;text-transform:none;}
*, *:before, *:after{ box-sizing: content-box !important;}
#content .block{ padding: 0px !important; }
.title_thumb{height:30px; width:288px !important; margin: 0px !important; background: rgba(255, 255, 255, 0.75); text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1) !important; position: relative; color:#000000 !important; padding-top:10px; text-transform:uppercase; }



div#video-overlay-text {width: 288px;height:30px; background: rgba(255, 255, 255, 0.75); text-align: center; font-size: 30px; color: #f58023; top: 125px; text-transform:uppercase; position: absolute; padding-top:6px; font: 22px 'HelvNeueLt',arial,serif !important; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);}
</style>

<div id="mediaWrap">

 
<?php foreach($results as $result){ 
$result_video = get_video_details_cat($result->category_id);?>

  <div class="box">
  <div id="titleHeadingArea" class="title-wrap">
  <h3 class="title"><?php echo $result->category_name; ?></h3>
  </div>
  
  <?php 
  if(!empty($result_video))
  {
  foreach($result_video as $video){
	  if($video->video_is_file !="2"){
	 
		/*$video_thumb_img_url = $video->video_thumb_img;
		$img_url = "http://www.mydomain.com/uploads/".$filename;
		$myimg = image_load($img_url);
		if ($myimg){
  			$myimg_scaled = image_scale_and_crop($myimg, 100, 80);
  			print '<img src="'.$myimg_scaled.'">';
		}else { print 'error'; }*/
	?>
  <div id="pin-content">
  <div class="pin-box masonry-brick">
  <div class="galleryItem"> <a href="<?php echo $GLOBALS['base_url'].'/mediapage/details/'.$video->video_id;?>"><?php /*?><img src="<?php echo $video->video_thumb_img;?>" alt="1"><?php */?><img src="<?php print $video->video_thumb_img; ?>" alt="video thumb"></a>
  <div id="video-overlay-text" style="display:none;">Video</div>
  </div>
   <span><?php echo $video->video_duration;?></span>
   
   
  <h3 style="text-shadow:none;"><?php echo $video->video_title;?></h3>
  <p><?php echo substr($video->video_short_description,0,200);?>..</p>
  </div>
  </div>
  <?php }else{?>
  	<?php
		/*$video_thumb_img_url = $video->video_thumb_img;
		$img_url = "http://www.mydomain.com/uploads/".$filename;
		$myimg = image_load($img_url);
		if ($myimg){
  			$myimg_scaled = image_scale_and_crop($myimg, 100, 80);
  			print '<img src="'.$myimg_scaled.'">';
		}else { print 'error'; }*/
	?>
  <div id="pin-content">
  <div class="pin-box masonry-brick">
  <div class="galleryItem"> <a href="<?php echo $GLOBALS['base_url'].'/mediapage/details/'.$video->video_id;?>"><?php /*?><img src="<?php echo $video->video_thumb_img;?>" alt="1"><?php */?><img src="<?php print $video->video_infographic_img; ?>" alt="video thumb"></a><h3 class="title_thumb" style="position:absolute;">Infographic</h3>
  </div>
   <h3><?php echo $video->video_title;?></h3>
   <p class="infoGraphicThumb"><?php echo substr($video->video_short_description,0,200);?>..</p>
  </div>
  </div>
  <?php 
	  
  }
	  }
  }else{
  echo  '<div id="pin-content">No video(s) under this category</div>';
  }
  ?>  
 
	
	<div class="clear"></div>
  <div class="qlink-wrap">
  
  </div>
  
  </div>
 <?php
 
  }?>

  </div>

 <br /><br /><br /><br /><br /><br /> 
</div>

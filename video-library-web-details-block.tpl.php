<?php //echo '<pre>'; print_r($video_details); echo '</pre>';?>
<style>
.wrap{margin:0 !important;}
.wrap p { clear:both;}
.wrap.clearfix { margin-left: auto !important;  margin-right: auto !important; margin-top: -4px !important; max-width: 960px !important;}
.video-box img{max-width:none !important;padding:0 !important;}
#main{margin-top:0;}
img{ padding:0 !important;}
#meet-platform{ display:none;}
div#vid_cmt h4 {margin: 0px;}
div#vid_cmt {border: 1px solid rgba(9, 9, 9, 0.23);}
</style>
<script type="text/javascript" src="<?php echo $GLOBALS['base_url'].'/'.drupal_get_path('module', 'video_library_web')?>/js/jquery-1.8.2.min.js"></script>

<script type="text/javascript" src="<?php echo $GLOBALS['base_url'].'/'.drupal_get_path('module', 'video_library_web')?>/js/flowplayer.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {    
//$("#flwpl").css("display",'block');
	//$(".flowplayer").hide();	
	$(".ply").click(function(e) {
        
		$("#flwpl").css("display",'block');
		$("#overlap-screen").hide();
		
		/*if($('iframe').attr('height') != 'undefined')
		{
			videoUrl = $('#loadVideo').attr("data-video-src");
			alert(videoUrl);
			$("iframe").attr("src", videoUrl);
		}
		else
		{	
			$(".fp-ui").click();
		}*/
		
    });
	
});

</script>
<?php if(!empty($video_details)){?>


		<?php if($video_details['video_is_file']!="2"){ ?><div id="gradientVideo"></div><div class="banner-area">
            <div class="wrapper">
            
                <div id="overlap-screen">
                    <div id="banner-bg-image">
                        
                        <a class="ply" href="#"><img class="button" id="play-button" src="<?php echo $GLOBALS['base_url'].'/'.drupal_get_path('module', 'video_library_web')?>/images/playicon.png" /></a>
                        
                        <img class="bIMg" src="<?php echo $video_details['video_big_img']?>" alt="" />
                        
                        <div id="banner-overlap-text">
                            <h2><?php echo substr($video_details['video_title'],0,40);?>..</h2>
                            <h3><?php echo substr($video_details['video_short_description'],0,50);?>..</h3>
                        </div>
                      
                       
                    </div>
                </div>
                
                <div id="player">
                    <div id="flwpl">
                    <?php if($video_details['video_is_file']==0)
                    {
                        $patterns = '/width=".*?"/';
                        $replacements = 'width="1000"';
                        $video_embed_code = preg_replace($patterns, $replacements, $video_details['video_embed_code']);
                        $patterns = '/height=".*?"/';
                        $replacements = 'height="399"';
                        $video_embed_code = preg_replace($patterns, $replacements, $video_embed_code);
                        
                        preg_match('/src="([^"]+)"/', $video_embed_code, $match);
                        $url = $match[1];
                        
                        echo '<button id="loadVideo" data-video-src="http'.$url.'?rel=0&autoplay=1" style="display:none;">Load video</button>';
                        
                        echo $video_embed_code;
                    }
                    else
                    {?>
                        <!--<iframe width="1000" height="399" src="//www.youtube.com/embed/3CwQjsdE-1Q" frameborder="0" allowfullscreen></iframe>-->
                        <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="">
                            <video>
                                <source type="video/webm" src="<?php echo $video_details['video_filename3'];?>">
                                <source type="video/mp4" src="<?php echo $video_details['video_filename1'];?>">
                                <source type="video/ogv" src="<?php echo $video_details['video_filename2'];?>">
                            </video>
                        </div>
             <?php  }?>
                    </div>
                </div>
                
            </div>
	<?php } ?>
</div>


			<?php if($video_details['video_is_file']!="2"){ ?> <div id="mainOverlay"><div class="content-area">
	
    <div class="content-area-wrraper">
    
    	 <div class="content-area-left"><?php
				$vid=$video_details['video_id'];
				get_videocount($vid);
				$video_count= $video_details['video_count'];
				echo "Views: " .  $video_count  ;
			?><div id="donationHub"><div id="spanPayPal">
<a class="rgReview" href="http://www.guru.com/freelancers/william-baafi" target="_new">BUY APP NOW</a>
</div></div>
                    <h2 style="  background:none !important; padding:0px !important;">Documentations towards progression of Global Security</h2>
                    <div class="line"></div>
<script type="text/javascript">
   
$(document).ready(function(){
  $("#play-button").click(function(){
   $("iframe").addClass("intro");
   $(".intro").attr("id","video");
   });
});
 
  // https://developers.google.com/youtube/iframe_api_reference

        // global variable for the player
        var player;

        // this function gets called when API is ready to use
        function onYouTubePlayerAPIReady() {
          // create the global player from the specific iframe (#video)
          player = new YT.Player('video', {
            events: {
              // call this function when player is ready to use
              'onReady': onPlayerReady
            }
          });
        }

        function onPlayerReady(event) {
          
          // bind events
          var playButton = document.getElementById("play-button");
          playButton.addEventListener("click", function() {
            player.playVideo();
          });
          
        }

        // Inject YouTube API script
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>

    
                    <p><?php echo $video_details['video_short_description']; ?></p>
                    <h2 style=" background:none !important; padding:0px !important;">Relevant Rastafari Intelligence</h2>
                    <div class="line"></div>
                    <p><?php echo $video_details['speaker_bio']; ?> </p>
                    
                     <?php echo "<br><span>Released On: </span>".$video_details['video_date']; ?>
					<?php if($video_details['video_comment_det']=='1'){ ?>
                    <p style="color:#39F;">Comment</p>
                    <?php if(isset($_POST['videocommentbtn'])){global $user;
                            if ( $user->uid ) {
                              $currentuser = $user->name;
                            }
                            else {
                              $currentuser = "Anonymous user";
                            }
                    
                    $usercmt = $_POST['videocomment'];
                     insert_videocomment($vid, $currentuser, $usercmt);
                    } ?>
                    <form action="" method="post"> <textarea name="videocomment"></textarea><input type="submit" name="videocommentbtn" value="send" /> </form>
                    <div id="cmt_view"><?php get_videocomment($vid); ?></div>
               
            <?php } }else{ ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['base_url'].'/'.drupal_get_path('module', 'video_library_web')?>/css/infographics.css" media="all">
                <div id="gradientVideo"></div>
                <div id="mainInfoGraphicArea">
        
                        <div id="mainGraphicSlot">
                         <img src="<?php echo $video_details['video_infographic_img']?>" alt=""  width="970" height="780" />
                        </div>
                <h2 style="background:none !important; padding:0px !important;">Description</h2>
                    <div class="line"></div>
                    <p><?php echo $video_details['video_short_description']; ?></p>
                     <h2 style="background:none !important; padding:0px !important;">About This Data</h2>
                    <div class="line"></div>
                    <p><?php echo $video_details['about_this_data']; ?></p>
                   
                    <h2 style=" background:none !important; padding:0px !important;">Download PDF</h2>
                    <div class="line"></div>
                     <a href="<?php echo $video_details['video_infographic_pdf']; ?>" download="<?php echo $video_details['video_title'];?>">Download <?php echo $video_details['video_title'];?> PDF </a>
                     <?php echo "<br><span>Released On: </span>".$video_details['video_date']; ?>
                </div>
            <?php } ?>
            <div class="inner-page-bottom" style="margin-bottom:100px;"></div>
         </div>
	</div>
</div>
</div>
<?php }
else{
?>
<div class="content-area"> No video details</div>
<?php }?>

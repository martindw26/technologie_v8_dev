        <!-- image or video block -->
						
			<?php if (get_row_layout() == 'image_video_block'):
	            $a_picture = $a_image['sizes']['large'];
	            $a_video = get_sub_field('video');
			?>	

							<div class="row"><hr class="hr">
							
								<div class="col-lg-6">

									

											<!-- Image/Video left hand side block -->
											<img src="<?php echo $a_image; ?>" class="img-fluid mb-1">

											 <div class="videoWrapper"> 
	 										 <iframe class="rounded" width="400" height="349" src="https://www.youtube.com/embed/<?php echo $a_video; ?>?autoplay=1&mute=1&rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
											 </div><br>

									
								</div>

							</div>
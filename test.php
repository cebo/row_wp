<?php

				/** settings **/
				$images_dir = 'https://www.dropbox.com/sh/3coxz0uzkhfi9ej/AABpY7uKqCd_kGJWA0tzLYITa';
				$thumbs_dir = 'https://www.dropbox.com/sh/3coxz0uzkhfi9ej/AABpY7uKqCd_kGJWA0tzLYITa';
				$thumbs_width = 200;
				$images_per_row = 3;

				
				/** generate photo gallery **/
				$image_files = get_files($images_dir);
				if(count($image_files)) {
				  $index = 0;
				  foreach($image_files as $index=>$file) {
				    $index++;
				    $thumbnail_image = $thumbs_dir.$file;
				    if(!file_exists($thumbnail_image)) {
				      $extension = get_file_extension($thumbnail_image);
				      if($extension) {
				        make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
				      }
				    }
				    echo '<a href="',$images_dir.$file,'" class="photo-link smoothbox" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
				    if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
				  }
				  echo '<div class="clear"></div>';
				}
				else {
				  echo '<p>There are no images in this gallery.</p>';
				}

			?>
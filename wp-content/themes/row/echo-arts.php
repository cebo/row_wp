<?php
/**
 * Template Name: echo arts
 
 
 
 */

 
  query_posts(
		array(
			'loctype' => 'arts',
			'post_type' => 'locations',
  			'posts_per_page' => -1,
  			'order' => 'ASC'
		)
	);
	
  $results = array();
  $key = 0;
  $img = 1;
  $replaceWords = array("/v=/i"); 


  if(have_posts()) : while(have_posts()) : the_post();
      if (get_post_meta ($post->ID, 'cebo_youtube', $single = true) ) { 
    		$url = get_post_meta ($post->ID, 'cebo_youtube', $single = true); 
    		$url = ($url) ? str_replace("watch?", "", $url) : ""; 
    		$url = ($url) ? preg_replace($replaceWords, "v/", $url): ""; 
  	  }
  	  
  	  $taxonomy = strip_tags( get_the_term_list($post->ID, 'loctype') );
  	  
  	  
  	  $results["places"][$key]["name"] = get_the_title();
  	  $results["places"][$key]["photo"] = sp_get_image();
  	  $results["places"][$key]["desc"] = get_the_content();
  	  $results["places"][$key]["cater"] = $taxonomy;
  	  $results["places"][$key]["coords"] = get_post_meta ($post->ID, 'cebo_coordinates', $single = true);
  	  $results["places"][$key]["permalink"] = get_post_meta ($post->ID, 'cebo_outbound', $single = true);
  	  $results["places"][$key]["address"] =  get_post_meta ($post->ID, 'cebo_phone', $single = true);
  	  $results["places"][$key]["video"] = ($url != null) ? '<object style="height: 390px; width: 640px"><param name="movie" value="' . $url . '"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="' . $url . '" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360"></object>' : null;
  	  $results["places"][$key]["deal"] =  get_post_meta ($post->ID, 'cebo_hotdeal', $single = true);
  
  	  while($img <= 20) {
  	    if(sp_get_image($img)) {
  	      $results["places"][$key]["images"][$img]["src"] = sp_get_image($img);
  	      $img++;
  	    } else {
  	      break;
  	    }
  	  }	
  
  	  $key++;

  endwhile; 
  endif;

  $returnJSON = json_encode($results);
  echo $returnJSON;
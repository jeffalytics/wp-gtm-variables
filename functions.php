function word_range() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    if ($word_count < 200) { $word_range = '0-200';}
    elseif($word_count < 400) { $word_range = '200-400'; }
    elseif($word_count < 600) { $word_range = '400-600'; }
    elseif($word_count < 800) { $word_range = '600-800'; }
    elseif($word_count < 1000) { $word_range = '800-1000'; }
    elseif($word_count < 1200) { $word_range = '1000-1200'; }
    elseif($word_count < 1400) { $word_range = '1200-1400'; }
    elseif($word_count < 1600) { $word_range = '1400-1600'; }
    elseif($word_count < 1800) { $word_range = '1600-1800'; }
    elseif($word_count < 2000) { $word_range = '1800-2000'; }
    elseif($word_count < 2200) { $word_range = '2000-2200'; }
    elseif($word_count < 2400) { $word_range = '2200-2400'; }
    elseif($word_count < 2600) { $word_range = '2400-2600'; }
    elseif($word_count < 2800) { $word_range = '2600-2800'; }
    elseif($word_count < 3000) { $word_range = '2800-3000'; }
    elseif($word_count < 3200) { $word_range = '3000-3200'; }
    elseif($word_count < 3400) { $word_range = '3200-3400'; }
    elseif($word_count < 3600) { $word_range = '3400-3600'; }
    elseif($word_count < 3800) { $word_range = '3600-3800'; }
    elseif($word_count < 4000) { $word_range = '3800-4000'; }
    elseif($word_count >= 4000) { $word_range = '4000+'; }
    return $word_range;
}

function word_count() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    return $word_count;
}


function post_year() {
	$year_published = the_date( 'Y', $before, $after, $echo );
	return $year_published;
}

function tag_manager_variables() {
	$url = 'http://'. $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	echo "
	<script>
	  dataLayer = [{
	    'wordCount': '". word_count() ."',
	    'wordRange': '". word_range() ."',
	    'postYear': '". post_year() ."'
	  }];
	</script>
	";		
}
add_action ( 'wp_head', 'tag_manager_variables' );
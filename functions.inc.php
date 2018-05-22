<?php

function generateLink($url, $label, $class) {
   $link = '<a href="' . $url . '" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function outputPostRow($number)  {
    include("travel-data.inc.php");
	$theconment ='<div class="row"><div class="col-md-4">';
	$postId = "post.php?id=".${"postId".$number};
    $thumb = '<img src="images/'.${"thumb".$number}.'" alt="'.${"title".$number}.'" class="img-responsive">';
    $userId = "user.php？id=".${"userId".$number};
    $userName = ${"userName".$number};
    $date = ${"date".$number};
    $excerpt = ${"excerpt".$number};
    $reviewsNum = ${"reviewsNum".$number};
    $reviewsRating = ${"reviewsRating".$number};
	$theconment .= generateLink($postId,$thumb,"").'</div><div class="col-md-8"> <h2>'.${"title".$number}.'</h2><div class="details">Posted by '.generateLink($userId,"Leonie Kohler","").'<span class="pull-right">'.$data.'</span><p class="ratings">'.constructRating($reviewsRating).' '.$reviewsNum.' '.'Reviews</p></div><p class="excerpt">'.$excerpt.'</p><p>'.generateLink($postId,"Read more","btn btn-primary btn-sm").'</p></div></div><hr/>';
	echo $theconment;
}

/*
  Function constructs a string containing the <img> tags necessary to display
  star images that reflect a rating out of 5
*/
function constructRating($rating) {
    $imgTags = "";
    
    // first output the gold stars
    for ($i=0; $i < $rating; $i++) {
        $imgTags .= '<img src="images/star-gold.svg" width="16" />';
    }
    
    // then fill remainder with white stars
    for ($i=$rating; $i < 5; $i++) {
        $imgTags .= '<img src="images/star-white.svg" width="16" />';
    }    
    
    return $imgTags;    
}

?>
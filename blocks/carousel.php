<?php
	$num_posts=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM gallery WHERE galleryName='$galleryName'")) or die(mysql_error());
    $num_posts = $num_posts["COUNT(*)"];
    $resultPicture = mysql_query("Select pictureName, pictureDescription, pictureDatas, portrait, fileName  
	from gallery where galleryName = '$galleryName' order by indexOnPage LIMIT 6") or die(mysql_error());
    switch ($galleryName) {
        case 'heritage':
            $folderName = 'bbhs';
            break;
        case 'penink':
            $folderName = 'pen_ink';
            break;
        case 'canada':
            $folderName = 'canada_wide';
            break;
        case 'worldwide':
            $folderName = 'world_wide';
            break;
        default:
            $folderName = $galleryName;
    }
    $linkName = $galleryName;
    if ($linkName === 'canada') {
        $linkName = 'canadawide';
    } elseif ($linkName === 'heritage') {
        $linkName = 'bbhs';
    } ;
    printf('<div class="carousel-link"><a href="'.$linkName.'.php">View all '.$num_posts.'</a></div>');
	while ( $data = mysql_fetch_array($resultPicture)) {
        printf("<li>
                    <a class='lightgallery-slide-item' href='gallery/".$folderName."/watercolour/".$data['fileName']."'>
                        <figure>
                            <div class='img-container'>
                                <img src='gallery/".$folderName."/thumbs/".$data['fileName']."' alt='".$data['']."'>
                            </div>
                            <figcaption>
                               <h3>$data['pictureName']</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>", 
                $folderName,
                $data['fileName'], 
                $data['pictureDescription']
        );
    }
    printf('<div class="carousel-link"><a href="'.$linkName.'.php">View all '.$num_posts.'</a></div>');
?>							

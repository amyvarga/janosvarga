<!--
	PHP Document for HappySlaks.com of Janos Varga 
	contentgallery.php - Content all Gallery pages
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: April 24, 2016	
-->
<div id='welcomtext' class="gallery">		
    <h2><?php echo $header_1 ?></h2>
    <article>
        <ul class="gallery-list lightgallery">
<?php
    // number of pictures in Gallery for navigation
    $num_posts=mysqli_fetch_array(mysqli_query($db, "SELECT COUNT(*) FROM gallery WHERE galleryName='$galleryName'")) or die(mysql_error());
    $num_posts = $num_posts["COUNT(*)"];
        
    // get datas of pictures from database
    $resultPicture = mysqli_query($db, "Select pictureName, pictureDescription, pictureDatas, portrait, fileName from gallery where galleryName = '$galleryName' order by indexOnPage") or die(mysql_error());
    $data = mysqli_fetch_array($resultPicture);	
        
    //number of picture and numbers Next and Prev pictures for navigation
    $num_image = 0;
    do {
        $num_image = $num_image+1;
        if ($num_image == 1) {
            $num_prev = $num_posts;
        } else {
            $num_prev = $num_image-1;
        }			
        if ($num_image == $num_posts) {
            $num_next = 1;
        } else {
            $num_next = $num_image+1;
        }	
        // separate landscape and portrait pictures
        print("<li class='col-lg-4 col-md-3 col-sm-6 col-xs-12 no-gutter' >");
        // output pictures to page
        printf("
                <a class='lightgallery-slide-item' href='gallery/".$imageLocation."/watercolour/".$data['fileName']."'>
                    <figure>
                        <div class='img-container'>
                            <img src='gallery/".$imageLocation."/thumbs/".$data['fileName']."' alt='".ucfirst($data['pictureName'])."'>
                        </div>
                        <figcaption>
                            <h3>".$data['pictureName']."</h3>
                            <p>".$data['pictureDescription']."</p>
                            <p>".$data['pictureDatas']."</p>
                        </figcaption>
                    </figure>
                </a>
            </section>
        </li>", $num_image, $imageLocation, $data["fileName"], $data["pictureName"], $data["pictureName"], $data["pictureDescription"], $data["pictureDatas"], $num_image, $imageLocation, $data["fileName"], $data["pictureName"],$num_prev,$num_next);
        }
        while ( $data = mysqli_fetch_array($resultPicture));
        
    ?>							
        </ul>			
    </article>
</div> 

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>B&B social sharing</title>

    <meta name="description" content="BB description tag">

    <meta property="og:title" content="BB posting example"/>
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Parse is a complete technology stack to power your app's backend." />
    <meta property="og:url" content="http://bb.vardumper.com"/>
    <meta property="og:image" content="http://bb.vardumper.com/imagemap/images/bike.jpg"/>

<!--    <meta property="og:site_name" content="BB project"/>-->
<!--    <meta property="fb:app_id" content="{your_app_id}"/>-->
<!--    <meta property="music:creator" content="http://samples.ogp.me/390580850990722"/>-->
<!--    <link rel="opengraph" href={DESTINATION_URL}/>-->
</head>
<body>

<?php

if (isset($_GET['act'])) {
    echo '<h1>TEST</h1>';
}

$fb1 = 'http://bb.vardumper.com/img_1.html';
$fb2 = 'http://bb.vardumper.com/img_2.html';

$name = 'ButchersAndBicycles';
//$url = 'http://www.butchersandbicycles.com';
$url = 'http://bb.vardumper.com/social/share.php';
$media = 'http://www.butchersandbicycles.com/images/about-img.jpg';
?>
<ul>
    <li><a target="_blank" href="https://twitter.com/home?status=<?=$name;?>+<?=$url;?>">TW</a></li>
    <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?=$url;?>">FB</a></li>
    <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?=$fb1;?>">FB page 1</a></li>
    <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?=$fb2;?>">FB page 2</a></li>
    <li><a target="_blank" href="https://plus.google.com/share?url=<?=$url;?>">G+</a></li>
    <li><a target="_blank" href="https://plus.google.com/share?url=<?=$fb1;?>">G+ 2</a></li>
    <li><a target="_blank" href="http://www.stumbleupon.com/submit?url=<?=$url;?>&title=<?=$name;?>">STUP</a></li>
    <li><a target="_blank" href="http://www.stumbleupon.com/submit?url=<?=$fb1;?>&title=<?=$name;?>">STUP 2</a></li>
    <li><a href="//www.pinterest.com/pin/create/button/?url=<?=$url;?>&media=<?=$media;?>&description=<?=$name;?>" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a></li>
</ul>


<!--<a href="http://www.pinterest.com/pin/create/button/
        ?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F
        &media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg
        &description=Next%20stop%3A%20Pinterest"
   data-pin-do="buttonPin"
   data-pin-config="above">
    <img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" />
</a>-->


<!--<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
<!-- Please call pinit.js only once per page -->
<!--<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>-->

<!--<a href="//www.pinterest.com/pin/create/button/?url=<?/*=$url;*/?>&media=<?/*=$media;*/?>&description=<?/*=$name;*/?>" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>-->
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>

</body>
</html>
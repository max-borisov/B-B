<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>B&B social sharing</title>

    <link rel="stylesheet" type="text/css" href="share.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="share.js"></script>

    <meta name="description" content="BB description tag">
    <meta property="og:title" content="BB posting example"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="We are working hard to make the Mk1 available on export markets as soon as possible. Please follow our Facebook page to get updates on availability."/>
    <meta property="og:url" content="http://bb.vardumper.com"/>
    <meta property="og:image" content="http://bb.vardumper.com/imagemap/images/bike.jpg"/>

    <!--    <meta property="og:site_name" content="BB project"/>-->
    <!--    <meta property="fb:app_id" content="{your_app_id}"/>-->
    <!--    <meta property="music:creator" content="http://samples.ogp.me/390580850990722"/>-->
    <!--    <link rel="opengraph" href={DESTINATION_URL}/>-->
</head>
<body>

<?php

$fb1 = 'http://bb.vardumper.com/img_1.html?act=1';
$fb2 = 'http://bb.vardumper.com/img_2.html';

$name = 'ButchersAndBicycles';
//$url = 'http://www.butchersandbicycles.com';
//$url = 'http://bb.vardumper.com/social/share.php';
$url = 'http://bb.vardumper.com';
$media = 'http://www.butchersandbicycles.com/images/about-img.jpg';
$media_2 = 'http://bb.vardumper.com/img/img_2.png';
?>
<ul>
    <li><a target="_blank" href="https://twitter.com/home?status=<?= $name; ?>+<?= $url; ?>">TW</a></li>
    <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?= $url; ?>">FB</a></li>
    <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?= $fb1; ?>">FB page 1</a></li>
    <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?= $fb2; ?>">FB page 2</a></li>
    <li><a target="_blank" href="https://plus.google.com/share?url=<?= $url; ?>">G+</a></li>
    <li><a target="_blank" href="https://plus.google.com/share?url=<?= $fb1; ?>">G+ 2</a></li>
    <li><a target="_blank" href="http://www.stumbleupon.com/submit?url=<?= $url; ?>&title=<?= $name; ?>">STUP</a></li>
    <li><a target="_blank" href="http://www.stumbleupon.com/submit?url=<?= $fb1; ?>&title=<?= $name; ?>">STUP 2</a></li>
    <li>
        <a href="//www.pinterest.com/pin/create/button/?url=<?= $url; ?>&media=<?= $media_2; ?>&description=<?= $name; ?>"
           data-pin-do="buttonPin" data-pin-config="none"><img
                src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png"/></a></li>
</ul>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>

<?php
//$shareUrl = urlencode('http://bb.vardumper.com');
$shareUrl = 'http://bb.vardumper.com';
$shareTitle =htmlspecialchars('Butchers&Bicycles');
$shareDesc = 'Our first cargo bike — simply called the Mk I – is for anyone who loves cycling. With it, we intend to challenge the perception of how fun and easy riding a cargo bike can be without compromising usability.

It has long been established that the bicycle is in fact an actual alternative to the car and that the two-wheeler is, in many cities, actually even faster. But although there are many obvious benefits of cargo bikes, as we know them, they have so far lagged the joy of cycling. We have set out to change that.';
//$shareTitle = urlencode('Butchers and Bicycles');
?>

<div id="share" data-title="<?=$shareTitle;?>">
    <a
        href="https://twitter.com/home?status=<?=urlencode($shareTitle . ' ' . $shareUrl);?>"
        title="Share this item on twitter" class="pop share-square share-square-twitter"
        style="display: inline-block;"></a>

    <a
        href="https://twitter.com/intent/tweet?url=<?=urlencode($shareTitle . ' ' . $shareUrl);?>&text=<?=urlencode($shareDesc);?>"
        title="Share this item on twitter" class="pop share-square share-square-twitter"
        style="display: inline-block;"></a>

    <a
        href="http://www.facebook.com/sharer.php?u=<?=urlencode($shareUrl)?>&amp;title=<?=urlencode($shareTitle)?>"
        title="Share this item on facebook" class="pop share-square share-square-facebook"
        style="display: inline-block;"></a>

    <a
        href="https://plus.google.com/share?url=<?=urlencode($shareUrl);?>"
        title="Share this item on googleplus" class="pop share-square share-square-googleplus"
        style="display: inline-block;"></a>

    <a
        href="http://www.stumbleupon.com/submit?url=<?=urlencode($shareUrl)?>&amp;title=<?=$shareTitle?>"
        title="Share this item on stumbleupon" class="pop share-square share-square-stumbleupon"
        style="display: inline-block;"></a>

    <a
        href="https://www.pinterest.com/pin/create/link/?url=<?=($shareUrl);?>&media=<?=urlencode($media);?>&description=<?=urlencode($shareDesc);?>"
        title="Share this item on pinterest" class="pop share-square share-square-pinterest"
        style="display: inline-block;"></a>

    <!--<a
        href="#"
        title="Share this item on instagram" class="pop share-square share-square-instagram"
        style="display: inline-block;"></a>-->

    <div style="clear: both;"></div>
</div>

<!--<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>-->

</body>
</html>
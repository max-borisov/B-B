<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>B&B social sharing</title>

    <link rel="stylesheet" type="text/css" href="./share.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="./share.js"></script>

    <meta name="description" content="BB description tag">
    <meta property="og:title" content="BB posting example"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="We are working hard to make the Mk1 available on export markets as soon as possible. Please follow our Facebook page to get updates on availability."/>
    <meta property="og:url" content="http://bb.vardumper.com"/>
    <meta property="og:image" content="http://bb.vardumper.com/imagemap/images/bike.jpg"/>
</head>
<body>

<?php
$shareUrl = urlencode('http://bb.vardumper.com');
$shareTitle = urlencode('Butchers&Bicycles');
$shareDesc = urlencode('Our first cargo bike — simply called the Mk I – is for anyone who loves cycling. With it, we intend to challenge the perception of how fun and easy riding a cargo bike can be without compromising usability.');
?>

<div id="share" data-title="<?=$shareTitle;?>">
    <a
        href="https://twitter.com/home?status=<?=$shareTitle . '+' . $shareUrl;?>"
        title="Share this item on twitter" class="pop share-square share-square-twitter"
        style="display: inline-block;"></a>

    <!--<a
        href="https://twitter.com/intent/tweet?url=<?/*=$shareTitle . '+' . $shareUrl;*/?>&text=<?/*=$shareDesc;*/?>"
        title="Share this item on twitter" class="pop share-square share-square-twitter"
        style="display: inline-block;"></a>-->

    <a
        href="http://www.facebook.com/sharer.php?u=<?=$shareUrl;?>&amp;title=<?=$shareTitle;?>"
        title="Share this item on facebook" class="pop share-square share-square-facebook"
        style="display: inline-block;"></a>

    <a
        href="https://plus.google.com/share?url=<?=$shareUrl;?>"
        title="Share this item on googleplus" class="pop share-square share-square-googleplus"
        style="display: inline-block;"></a>

    <a
        href="http://www.stumbleupon.com/submit?url=<?=$shareUrl;?>&amp;title=<?=$shareTitle;?>"
        title="Share this item on stumbleupon" class="pop share-square share-square-stumbleupon"
        style="display: inline-block;"></a>

    <a
        href="https://www.pinterest.com/pin/create/link/?url=<?=$shareUrl;?>&media=<?=$media;?>&description=<?=$shareDesc;?>"
        title="Share this item on pinterest" class="pop share-square share-square-pinterest"
        style="display: inline-block;"></a>

    <!--<a
        href="#"
        title="Share this item on instagram" class="pop share-square share-square-instagram"
        style="display: inline-block;"></a>-->

    <div style="clear: both;"></div>
</div>

</body>
</html>
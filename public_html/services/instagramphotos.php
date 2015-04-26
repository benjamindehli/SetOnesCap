<script src="../scripts/masonry.pkgd.min.js"></script>
<script src="../scripts/imagesloaded.pkgd.min.js"></script>

<?php include("./service-variables.php"); ?>

<?php

$accessToken = $instagramAccessToken; // Your API Client ID
$userId = $instagramUserId; // ID of the user you are fetching the information for


$instagram_url = "https://api.instagram.com/v1/users/" . $userId . "/media/recent?access_token=" . $accessToken . "";

$images_json = file_get_contents($instagram_url);
$images = json_decode($images_json);
?>
<div class="line-through">
    <span></span>
    <h2>Latest instagram photos</h2>
</div>

<div id='news-posts' class='js-masonry' data-masonry-options='{ "itemSelector": ".news-post" }'>

    <?php
    foreach ($images->data as $image) {
        if ($image->type == "image") {
            $postDate = date("F j, Y", $image->created_time);
            ?>

            <div class="col-3 news-post" itemscope itemtype="http://schema.org/Article">
                <div class="panel bg-noise bg-white fg-black no-padding">

                    <?php
                    echo "<div class='no-padding fb-thumb' style='max-height: 640px;'>";
                    echo "<span itemprop='thumbnail'>";

                    echo "<img src='" . $image->images->standard_resolution->url . "' alt='" . $image->caption->text . "' height='640' width='640' />";

                    echo "</span>";
                    echo "</div>";
                    ?>
                    <div class=''>
                        <p class="fb-date"><span itemprop="datePublished"><?php echo "$postDate"; ?></span></p>

                        <p><span itemprop="articleBody"><?php echo $image->caption->text ?></span></p>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php
        }
    }
    ?>
</div>
<script>
    $(window).load(function () {
        var $container = $('#news-posts').masonry();
        $container.imagesLoaded(function () {
            $container.masonry();
        });
    });
</script>
<header>
    <nav id="menu" class="fg-black bg-white fixed">
        <div class="content">
            <a href="http://www.setonescap.com/"><img src="/images/template/logo-horizontal.png" width="226" height="60" alt="Set Ones Cap logo, drawing of a bird with a hat" class="logo-horizontal"/></a>
            <a href="http://www.setonescap.com/"><img src="/images/template/logo-vertical.png" width="31" height="60" alt="Set Ones Cap logo, drawing of a bird with a hat" class="logo-vertical"/></a>
            <ul class="float-right">
                <?php
                __getLinkList($rootURL);
                ?>
            </ul>
        </div>
    </nav>
</header>
<div class="content">

    <section class="col-12 fg-black header" data-speed="1.4" data-type="background">
        <!--  <section class="col-12 fg-black header header-<?php echo $headerNo; ?>" data-speed="1.4" data-type="background">-->
        <div class="header-text bg-white fg-setonescap-red">
            <h1><?php __getTitle($pageId); ?></h1>

            <p class="credit-text"></p>
        </div>
    </section>


    <main>
        <div class="col-12 breadcrumbs">
            <?php if ($pageTitle != 'home') { ?>
                <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="http://www.setonescap.com" itemprop="url">
                        <span itemprop="title">Set One's Cap</span>
                    </a>

                    &rsaquo;
                </div>
                <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="http://www.setonescap.com/<?php echo $pageTitle; ?>/" itemprop="url">
                        <span itemprop="title"><?php echo ucfirst($pageTitle); ?></span>
                    </a>

                </div>
            <?php } ?>
        </div>
        <?php include("content/" . $pageFile); ?>
    </main>
    <div class="col-12 bg-noise bg-black fg-white bottom-col">
        <div class="col-12 text-center sociallinks">
            <div class="line-through">
                <span></span>

                <h2>Get in touch</h2>
            </div>

            <a href="https://www.facebook.com/setonescap" target="_blank" class="facebook" title="Check out Set One's Cap at Facebook">
                <div class="fa-stack fa-2x">
                    <span class="fa fa-square-o fa-stack-2x"></span>
                    <span class="fa fa-facebook fa-stack-1x"></span>
                </div>
                <p>Facebook</p>
            </a>
            <a href="https://twitter.com/setonescap" target="_blank" class="twitter" title="Check out Set One's Cap at Twitter">
                <div class="fa-stack fa-2x">
                    <span class="fa fa-square-o fa-stack-2x"></span>
                    <span class="fa fa-twitter fa-stack-1x"></span>
                </div>
                <p>Twitter</p>
            </a>
            <a href="http://instagram.com/setonescap" target="_blank" class="instagram" title="Check out Set One's Cap at Instagram">
                <div class="fa-stack fa-2x">
                    <span class="fa fa-square-o fa-stack-2x"></span>
                    <span class="fa fa-instagram fa-stack-1x"></span>
                </div>
                <p>Instagram</p>
            </a>
            <a href="https://www.youtube.com/user/setonescap" target="_blank" class="youtube" title="Check out Set One's Cap at YouTube">
                <div class="fa-stack fa-2x">
                    <span class="fa fa-square-o fa-stack-2x"></span>
                    <span class="fa fa-youtube fa-stack-1x"></span>
                </div>
                <p>YouTube</p>
            </a>
            <a href="https://soundcloud.com/setonescap" target="_blank" class="soundcloud" title="Check out Set One's Cap at SoundCloud">
                <div class="fa-stack fa-2x">
                    <span class="fa fa-square-o fa-stack-2x"></span>
                    <span class="fa fa-soundcloud fa-stack-1x"></span>
                </div>
                <p>Soundcloud</p>
            </a>
            <a href="https://plus.google.com/+Setonescap" target="_blank" class="google-plus" title="Check out Set One's Cap at Google Plus">
                <div class="fa-stack fa-2x">
                    <span class="fa fa-square-o fa-stack-2x"></span>
                    <span class="fa fa-google-plus fa-stack-1x"></span>
                </div>
                <p>Google+</p>
            </a>

        </div>

        <div class="col-12">
            <div class="line-through">
                <span></span>

                <h3>Subscribe to our newsletters</h3>
            </div>
            <form action="//setonescap.us11.list-manage.com/subscribe/post?u=aaa5751df5aedfb525de2a85c&amp;id=8d64514e26" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                <div class="input-field-group">
                    <input type="email" value="" name="EMAIL" class="required email input-field" id="mce-EMAIL" placeholder="Your email">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button bg-setonescap-red raised">
                </div>
                <div style="position: absolute; left: -5000px;">
                    <input type="text" name="b_aaa5751df5aedfb525de2a85c_8d64514e26" tabindex="-1" value="">
                </div>

            </form>
        </div>


        <div itemscope itemtype="http://data-vocabulary.org/Person" class="col-4">
            <h3>Web:</h3>

            <p><span itemprop="name">Benjamin Dehli</span></p>

            <div itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address" class="no-padding">
                <p><span itemprop="street-address">Margretes veg 15</span></p>

                <p><span itemprop="postal-code">3804</span> <span itemprop="locality">B&oslash; i Telemark</span></p>

                <p><span itemprop="country-name">Norway</span></p>
            </div>
            <p>Phone: +47 92 29 27 19</p>

            <p>E-mail: web@setonescap.com</p>
        </div>
        <div itemscope itemtype="http://data-vocabulary.org/Person" class="col-4">
            <h3>Management / Booking:</h3>

            <p><span itemprop="name">Jon F. Leiulfsrud</span></p>

            <div itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address" class="no-padding">
                <p><span itemprop="street-address">Smalvollveien 44</span></p>

                <p><span itemprop="postal-code">0667 Oslo</span></p>

                <p><span itemprop="country-name">Norway</span></p>
            </div>
            <p>Phone: +47 90 10 92 84</p>

            <p>E-mail: jon@compro.no</p>
        </div>
        <div class="col-4">
            <h3>For everything else:</h3>

            <p>Feel free to contact us at</p>

            <p>post@setonescap.com</p>
        </div>


    </div>
    <footer class="bg-white fg-black">
        <div class="col-6">© 2014
            <a href="https://plus.google.com/+Setonescap" target="_blank" rel="publisher">Set One's Cap</a></div>
        <div class="col-6 text-right">
            Website by:
            <a href="https://plus.google.com/+BenjaminDehli1/" target="_blank" rel="author">Benjamin Dehli</a>
        </div>
    </footer>


    <div class="clearfix"></div>
</div>

<script>
    $(document).ready(function () {
        resizeDiv();
    });

    window.onresize = function (event) {
        resizeDiv();
    }

    function resizeDiv() {
        var vpw = $(window).width();
        var vph = $(window).height();
        $('.header').css({'height': vpw / 2.8 + 'px'});
    }
</script>
<script type="text/javascript" src="/scripts/jquery.slicknav.min.js"></script>

<script type="text/javascript" src="/scripts/showPhoto.min.js"></script>
<script type="text/javascript" src="/scripts/parallax.min.js"></script>
<script type="text/javascript" src="/scripts/activeLinks.min.js"></script>

<script>
    $(document).ready(function () {
        $('#menu').slicknav();
    });
</script>


</body>
</html>


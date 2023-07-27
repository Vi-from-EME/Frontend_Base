<?php 
$isVideo = 0;


$mainBannerImages = array(
    array(
        'img_lg_url' => 'https://place-hold.it/1920x700/777/fff&fontsize=36',
        'img_md_url' => 'https://place-hold.it/1200x525/777/fff&fontsize=36',
        'img_sm_url' => 'https://place-hold.it/320x315/777/fff&fontsize=36',
    ),
    array(
        'img_lg_url' => 'https://place-hold.it/1920x700/666/ceea5a&fontsize=36',
        'img_md_url' => 'https://place-hold.it/1200x525/666/ceea5a&fontsize=36',
        'img_sm_url' => 'https://place-hold.it/320x315/666/ceea5a&fontsize=36',
    ),
    array(
        'img_lg_url' => 'https://place-hold.it/1920x700/076795/fff&fontsize=36',
        'img_md_url' => 'https://place-hold.it/1200x525/076795/fff&fontsize=36',
        'img_sm_url' => 'https://place-hold.it/320x315/076795/fff&fontsize=36',
    ),
    array(
        'img_lg_url' => 'https://place-hold.it/1920x700/8f2707/fff&fontsize=36',
        'img_md_url' => 'https://place-hold.it/1200x525/8f2707/fff&fontsize=36',
        'img_sm_url' => 'https://place-hold.it/320x315/8f2707/fff&fontsize=36',
    ),
    array(
        'img_lg_url' => 'https://place-hold.it/1920x700/ccc/333&fontsize=36',
        'img_md_url' => 'https://place-hold.it/1200x525/ccc/333&fontsize=36',
        'img_sm_url' => 'https://place-hold.it/320x315/ccc/333&fontsize=36',
    )
);
?>


<div class="emeslider-wrapper">
    <div id="eme-slider-wrap-full-screen">
        <div id="eme-slider-v2" class="<?php echo ( $isVideo != 1 )? "owl-carousel owl-theme no-vid" : "gh-video-banner" ?>">

            <?php if( $isVideo == 1 ): ?>
            <video 
                id="gh_home_plyr" 
                playsinline
                data-poster="">
                <source 
                    src="https://thema-collection.imgix.net/2022/10/corp-thema-web-clip.mp4" 
                    type="video/mp4" />

                <!-- Captions are optional -->
                <!-- <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default /> -->
            </video>
            <?php else: ?>
 
            <?php foreach ($mainBannerImages as $keyBanner => $bannerImg): ?>
                <div class="item">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php echo $bannerImg['img_lg_url'] ?>">
                        <source media="(min-width: 768px)" srcset="<?php echo $bannerImg['img_md_url'] ?>">
                        <img class="img-fluid" src="<?php echo $bannerImg['img_sm_url'] ?>" alt="banner" title="">
                    </picture>
                </div>
            <?php endforeach ?>


            <?php endif; ?>

        </div>
    </div>
</div>
<section class="module video-block">
    <div class="container">
        <div class="Headline">
            <?php $headline = the_field('headline'); ?>
            <?php echo esc_html($headline) ?>
        </div>

        <div class="video-thumbnail">
            <?php
            $video_url = get_field('video');
            if ($video_url):
                preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video_url, $matches);
                $video_id = $matches[1];
                $thumbnail_url = 'https://img.youtube.com/vi/' . $video_id . '/hqdefault.jpg';
                ?>

                <a href="<?php echo esc_url($video_url); ?>" target="_blank">
                    <img src="<?php echo esc_url($thumbnail_url); ?>" alt="YouTube Video Thumbnail">
                    <div class="icon-background">
                        <div class="icon-arrow"></div>
                    </div>
                </a>


            <?php endif; ?>
        </div>

        <div class="text">
            <?php $text = the_field('text'); ?>
            <?php echo esc_html($text) ?>
        </div>
    </div>


</section>
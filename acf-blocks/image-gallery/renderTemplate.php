<section class="module image-gallery">
    <div class="container gradient-border-shadow">
        <?php $image_gallery_images = get_field('image_gallery'); ?>
        <?php if ($image_gallery_images): ?>
        <?php foreach ($image_gallery_images as $image_gallery_image): ?>
        <div class="image-wrapper">
            <img class="single-img" src="<?php echo esc_url($image_gallery_image['sizes']['medium']); ?>"
                alt="<?php echo esc_attr($image_gallery_image['alt']); ?>" />
            <p class="caption">
                <?php echo esc_html($image_gallery_image['caption']); ?>
            </p>
            <span class="close fa fa-close"></span>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

    </div>

</section>

<section class="module image-gallery">
    <div class="container gradient-border-shadow Simplelightbox">
        <?php $image_gallery_images = get_field('image_gallery'); ?>

        <?php if ($image_gallery_images): ?>
        <?php foreach ($image_gallery_images as $image_gallery_image): ?>
        <a class="" href="<?php echo esc_url($image_gallery_image['sizes']['large']); ?>"
            title="<?php echo esc_html($image_gallery_image['caption']); ?>">
            <img class="single-img" src=" <?php echo esc_url($image_gallery_image['sizes']['medium']); ?>"
                alt="<?php echo esc_html($image_gallery_image['alt']); ?>" />
        </a>
        <?php endforeach; ?>
        <?php endif; ?>

    </div>

</section>
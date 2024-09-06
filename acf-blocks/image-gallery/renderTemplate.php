


<section class="module image-gallery">
    <div class="container gradient-border-shadow Simplelightbox">
        <div class="gallery-wrapper"> <!-- Galerie-Container -->
        <?php $image_gallery_images = get_field('image_gallery'); ?>

        <?php if ($image_gallery_images): ?>
        <?php foreach ($image_gallery_images as $image_gallery_image): ?>
        <div>
        <a class="" href="<?php echo esc_url($image_gallery_image['sizes']['large']); ?>"
        title="<?php echo esc_html($image_gallery_image['caption']); ?>">
        
            <img class="single-img" src=" <?php echo esc_url($image_gallery_image['sizes']['medium']); ?>"
                alt="<?php echo esc_html($image_gallery_image['alt']); ?>" />
                
        </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="buttons-slider">
    <button class="button-slider left">
        <span class="dashicons dashicons-arrow-left-alt2"></span>
    </button>
    <div class="image-circle-gallery">
    <?php $position = 1; ?>
        <?php foreach ($image_gallery_images as $image_gallery_image): ?>
        <span class="collected-image-circle" id="circle_<?php echo $position?>"></span>
        <?php $position++; ?>
        <?php endforeach; ?>
    </div>
    <button class="button-slider right">
        <span class="dashicons dashicons-arrow-right-alt2"></span>
    </button>
</div>
<?php endif; ?>
        <?php $image_gallery_text = get_field('image_gallery_text'); ?>
        <?php if ($image_gallery_text): ?>
            <div class="text_wrapper">
                <?php the_field( 'image_gallery_text' ); ?>
            </div>
        <?php endif; ?>
        
</section>
<a class="miniature film col-12 <?php  
    if ($args['small']) echo 'col-md-6 col-lg-4';
    else echo 'col-lg-6';
?> p-4 text-center text-md-left">
    <div class="box" style="background-image: url(<?php echo $args['image'] ?>)"
        data-link="<?php echo $args['link'] ?>" data-title="<?php echo $args['title'] ?>">
        <div class="play-icon-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/play-icon.png" alt="Zobacz film!" class="play-icon">
        </div>
    </div>
    <h3 class="pt-3"><?php echo $args['title']; ?></h3>
</a>
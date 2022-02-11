<a href="<?php echo $args['link'] ?>" class="miniature col-12 <?php 
    if ($args['small']) echo 'col-md-6 col-lg-4';
    else echo 'col-lg-6';
?> p-4 text-center text-md-left" <?php if ($args['catalog']) echo 'target="_blank"'; ?>>
    <div class="box<?php if ($args['catalog']) echo ' ar8'; ?>" style="background-image: url(<?php echo $args['image'] ?>)">
        <div class="box-content">
            <?php if (isset($args['date'])) echo '<p>'.$args['date'].'</p>'; ?>
            <h3><?php echo $args['title'] ?></h3>
        </div>
    </div>
</a>
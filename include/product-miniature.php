<?php if (!isset($args['wait-box'])) $args['wait-box'] = false; ?>

<a href="<?php echo $args['link']; ?>" class="miniature
<?php if (!$args['wait-box']) echo ' col-12 col-md-4 col-xl-3 ';
else echo ' col-md-4 ' ?>
py-4 px-2 text-center text-md-left">
    <div class="box ar8" style="background-image: url(<?php echo $args['image']; ?>)">
        <div class="box-content">
            <h3><?php echo $args['title']; ?></h3>
        </div>
    </div>
</a> 
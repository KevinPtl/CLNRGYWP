<?php
    $cat_args=array(
        "orderby" => "name",
        "order" => "ASC"
    );
    $categories=get_categories($cat_args);
    
    foreach ($categories as $category) {
?>
    <a 
        role="button"
        <?php if (is_category($category->name)) { echo 'class="active"'; } ?>
        href="<?php echo get_category_link($category->term_id) ?>">
        <?php echo $category->name ?>
    </a>
<?php } ?>
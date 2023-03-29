<?php if (paginate_links()) { ?>
    <div class="pagination">
        <?php echo paginate_links(array(
            'prev_text' => 'Précédent',
            'next_text' => 'Suivant'
        )); ?>
    </div>
<?php }?>
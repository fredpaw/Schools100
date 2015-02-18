    <div class="dmbs-footer">
        <?php
            global $dm_settings;
            if ($dm_settings['author_credits'] != 0) : ?>
                <div class="row dmbs-author-credits">
                    <p class="text-center"><a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by','devdmbootstrap3') ?> Danny Machal</a></p>
                </div>
        <?php endif; ?>
    </div>

</div>
<!-- end main container -->

<?php wp_footer(); ?>
</body>
<script type='text/javascript' src='http://tb.53kf.com/kf.php?arg=10061337&style=1'></script>
</html>
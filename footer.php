<div class="footer">
    
    <div class="wrap_1280">
        
        <?php
        
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_widget')):

            endif; 
        ?>

    <div class="clearfix"></div>

    <div class="copyright">

        <p>© Copyright <?php echo date("Y"); ?> | WordPress Dev Solutions. All Rights Reserved. | <a href="https://wpdevsolutions.mystagingwebsite.com/post-sitemap.xml">Sitemap</a> | <a href="/privacy-policy">Privacy Policy</a> |<a href="http://wambition.com/">Wordpress Design & Development</a> by Wambition</p>

    </div>

    <div class="clearfix"></div>

    </div>
    
    </div>

    <script type="text/javascript">
        
    jQuery(window).load(function() {
        
        var $container = jQuery('#ms-container');
        
            $container.imagesLoaded(function() {
                
                $container.masonry({
                    
                    columnWidth: '.ms-item',
                    
                    itemSelector: '.ms-item'
                    
                });
                
            });
            
    });
      
    </script>

<?php wp_footer(); ?>
    
</body>

</html>
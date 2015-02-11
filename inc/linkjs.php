<?php if (!defined('WPINC')) {die;} ?>

<!-- vgmfp - open external links in new window -->
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("a[href]").each(function(){
            $href = jQuery(this).attr("href").toLowerCase();
            if(($href.indexOf("http://")!==-1 || $href.indexOf("https://")!==-1) && $href.indexOf("<?php bloginfo('url') ?>")===-1) {
                jQuery(this).attr("rel", "external");
            }
        });

        jQuery("a[rel*=external]").click( function(e) {
            e.preventDefault();
            window.open(this.href);
        });
    });
</script>
<!-- end vgmfp - open external links in new window -->
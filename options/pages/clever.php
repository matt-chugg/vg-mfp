<?php if (!defined('WPINC')) {die;} ?>
<div class="wrap">
    <h2>Clever Stuff</h2>

    <form method="post" action="options.php">
        <?php settings_fields( 'vgmfp_clever_stuff' ); ?>
        <?php do_settings_sections( 'vgmfp_clever_stuff' ); ?>

   

            
        <table class="form-table">
            <tr valign="top">
   
                <td><fieldset>
                    <label for="vgmfp_clever_stuff_links">
                    <input name="vgmfp_clever_stuff_links" type="checkbox" id="vgmfp_clever_stuff_links" value="1" <?php echo(checked( 1, get_option( 'vgmfp_clever_stuff_links' ), false )); ?> >
                    Force all external links to open in a new window
                    </label><br>
                    
                    <label for="vgmfp_clever_stuff_disable_xml-rpc">
                    <input name="vgmfp_clever_stuff_disable_xml-rpc" type="checkbox" id="vgmfp_clever_stuff_disable_xml-rpc" value="1" <?php echo(checked( 1, get_option( 'vgmfp_clever_stuff_disable_xml-rpc' ), false )); ?> >
                    Disable XML-RPC Pingbacks
                    </label><br>
                    
                    <label for="vgmfp_clever_stuff_queries">
                    <input name="vgmfp_clever_stuff_queries" type="checkbox" id="vgmfp_clever_stuff_queries" value="1" <?php echo(checked( 1, get_option( 'vgmfp_clever_stuff_queries' ), false )); ?> >
                    Show number of queries and load time in admin bar
                    </label><br>
                    
                    <label for="vgmfp_clever_stuff_clacks">
                    <input name="vgmfp_clever_stuff_clacks" type="checkbox" id="vgmfp_clever_stuff_clacks" value="1" <?php echo(checked( 1, get_option( 'vgmfp_clever_stuff_clacks' ), false )); ?> >
                    Add X-Clacks-Overhead: GNU Terry Pratchett header
                    </label><br>
                    
                </fieldset></td>
            </tr>
        </table>
        
        <?php submit_button(); ?>
    </form>

</div>

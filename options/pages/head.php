
<div class="wrap">
    <h2>Head Options</h2>

    <form method="post" action="options.php">
        <?php settings_fields( 'vgmfp_head_options' ); ?>
        <?php do_settings_sections( 'vgmfp_head_options' ); ?>

   
        <h3>Tidy Up &lt;head&gt;</h3>
            
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Disable:</th>
                <td><fieldset>
                    <label for="vgmfp_head_hide_generator"><input name="vgmfp_head_hide_generator" type="checkbox" id="vgmfp_head_hide_generator" value="1" <?php echo(checked( 1, get_option( 'vgmfp_head_hide_generator' ), false )); ?> >Disable Generator Tag</label><br>
                    <label for="vgmfp_head_hide_prev_next"><input name="vgmfp_head_hide_prev_next" type="checkbox" id="vgmfp_head_hide_prev_next" value="1" <?php echo(checked( 1, get_option( 'vgmfp_head_hide_prev_next' ), false )); ?>>Disable Start/Prev/Next Links</label><br>
                    <label for="vgmfp_head_hide_wlw"><input name="vgmfp_head_hide_wlw" type="checkbox" id="vgmfp_head_hide_wlw" value="1" <?php echo(checked( 1, get_option( 'vgmfp_head_hide_wlw' ), false )); ?>>Disable Windows Live Writer</label><br>
                    <label for="vgmfp_head_hide_shortlink"><input name="vgmfp_head_hide_shortlink" type="checkbox" id="vgmfp_head_hide_shortlink" value="1" <?php echo(checked( 1, get_option( 'vgmfp_head_hide_shortlink' ), false )); ?>>Disable Shortlink</label><br>
                    <label for="vgmfp_head_hide_rsd"><input name="vgmfp_head_hide_rsd" type="checkbox" id="vgmfp_head_hide_rsd" value="1" <?php echo(checked( 1, get_option( 'vgmfp_head_hide_rsd' ), false )); ?>>Disable RSD Links</label><br>
                </fieldset></td>
            </tr>
        </table>
    
        



        <?php submit_button(); ?>
    </form>

</div>

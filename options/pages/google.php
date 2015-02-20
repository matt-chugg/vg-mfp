<?php if (!defined('WPINC')) {die;} ?>
<div class="wrap">
    <h2>Google Options</h2>

    <form method="post" action="options.php">
        <?php settings_fields( 'vgmfp_google_options' ); ?>
        <?php do_settings_sections( 'vgmfp_google_options' ); ?>
    
        <h3>Webmaster Tools Verification</h3>
        <p>If you have opted to verify your site using a meta tag, please enter the value for the content attribute below</p>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Verification Code</th>
                <td>
                    <input class="regular-text" type="text" name="vgmfp_google_verification" value="<?php echo htmlentities(get_option('vgmfp_google_verification')); ?>" />
                </td>
            </tr>
        </table>
    
        <hr />
    
        <h3>Google Tag Manager</h3>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Container ID</th>
                <td>
                    <input type="text"  class="regular-text"  name="vgmfp_google_container_id" value="<?php echo htmlentities(get_option('vgmfp_google_container_id')); ?>" />
                </td>
            </tr>
        </table>
    
        <hr />
    
        <h3>Authorship Tags</h3>
        <p>Tell Google who owns your content, publisher should be the URL of your Google+ business page, and <br />author should be the URL of your Google+ personal profile<br /><a target="_blank" href="http://www.google.com/webmasters/tools/richsnippets?q=<?php echo(get_site_url()); ?>">View in Google Structured Data Testing Tool</a></p>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Author</th>
                <td>
                    <input type="text"  class="regular-text"  name="vgmfp_google_author" value="<?php echo htmlentities(get_option('vgmfp_google_author')); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Publisher</th>
                <td>
                    <input type="text"  class="regular-text"  name="vgmfp_google_publisher" value="<?php echo htmlentities(get_option('vgmfp_google_publisher')); ?>" />
                </td>
            </tr>
        </table>
    
        <?php submit_button(); ?>
    </form>
</div>

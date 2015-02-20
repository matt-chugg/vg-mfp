<?php 

    $cronCounter = 0; $alternate = false;
    
    // cannot delete these
    $internalNames = array('wp_maybe_auto_update', 'wp_version_check', 'wp_update_plugins', 'wp_update_themes', 'wp_scheduled_delete', 'wp_scheduled_auto_draft_delete');

            
    

            
?>
<style type="text/css">
    table.vgmfp_crons {}
    table td  {vertical-align: middle !important;}
    .updated {margin:10px 0px !important;}

    .vgmfp_cron_main {width: 63%; margin-right: 2%; float: left;}
    
    
</style>




    

<h1>Cron Jobs</h1>

<div class='vgmfp_cron_main'>
<?php

    // do actions if necesary
    if(isset($_REQUEST["action"])) {
        if($_REQUEST["action"] == "Delete" && isset($_REQUEST["cronid"]) && $_REQUEST["cronid"] != "") {
            
            // recontruct args from array
            $args  = array();
            if(isset($_REQUEST["cronargs"]) && $_REQUEST["cronargs"] != "") {
                $args = unserialize(urldecode($_REQUEST["cronargs"])) ;
                if(!is_array($args)) {$args = array();}
            }
            // clear scheduled hook 
            wp_clear_scheduled_hook($_REQUEST["cronid"],$args);
            echo("<div class=\"updated\"><p>{$_REQUEST["cronid"]} was removed</p></div>");
        }
        
        // run it
        if($_REQUEST["action"] == "Run" && isset($_REQUEST["cronid"]) && $_REQUEST["cronid"] != "") {
            ob_start(); do_action($_REQUEST["cronid"]); ob_end_clean();
            echo("<div class=\"updated\"><p>{$_REQUEST["cronid"]} was executed</p></div>");
        }
    }

?>


<table class="wp-list-table widefat fixed vgmfp_crons" cellspacing="0">
    <thead><tr>
        <th><span>Name</span></th>
        <th><span>Schedule</span></th>
        <th><span >Interval</span></th>
        <th><span>Args</span></th>
        <th><span>Next Run</span></th>
        <th>Modify</th>
    </tr></thead>
    
    <tbody>



    <?php foreach (_get_cron_array() as $cronTime => $cronItems) { ?><?php foreach ($cronItems as $cronName => $cronArgs) { ?><?php foreach ($cronArgs as $cronID => $cronDetails) { ?>
    <tr <?php $counter++; $alternate = !$alternate; if($alternate) { ?>class="alternate" <?php } ?> >
        <td>
            <?php echo($cronName); ?>
        </td>
        <td>
            <?php echo($cronDetails["schedule"]); ?>
        </td>
        <td>
            <?php echo($cronDetails["interval"]); ?>
        </td>
        <td>
            <?php 
                // output args as joined array, create serialised version for the form
                $qsArgs = "";
            
                if(is_array($cronDetails["args"]) && count($cronDetails["args"]) > 0) {
                    $qsArgs = urlencode(serialize($cronDetails["args"]));
                    echo(join(", ",$cronDetails["args"]));
                } else {
                    echo("[null]"); 
                }
            ?>
        </td>
        <td><?php echo(date("d/m/Y @ g:i a",$cronTime)); ?></td>
        <td>
            <form>
                <input type="hidden" name="cronid" value="<?php echo($cronName); ?>" />
                <input type="hidden" name="page" value="vgmfp_cron" />
                <input type="hidden" name="cronargs" value="<?php echo($qsArgs); ?>" />
                <input type="submit" name="action" class="button action" value="Run" />
                <?php if(!in_array($cronName, $internalNames)) { ?>
                &nbsp;
                <input type="submit" name="action" class="button action" value="Delete" />
                <?php } ?>
            </form>

        </td>
    </tr>      
    <?php } ?><?php } ?><?php } ?>


    </tbody>
</table>



</div>


<div class='vgmfp_cron_right'>
    <h2>aaaa</h2>
    
</div>




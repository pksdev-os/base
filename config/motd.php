<?php
/**
 * This file contains any "Message Of The Day" Type information It will be
 * included below the log-in form on the login page.
 *
 * IMPORTANT: Local overrides MUST be placed in motd.local.php, or
 * motd-servername.php if the 'vhosts' setting has been enabled in Horde's
 * configuration.
 */

ob_start();

?>
<br />
<table width="100%"><tr><td align="center"><img src="<?php echo Horde_Themes::img('horde-power1.png') ?>" alt="Powered by Horde" /></td></tr></table>

<?php
$motd = ob_get_clean();

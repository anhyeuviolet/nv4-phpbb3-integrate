<?php

/**
 * @Project NUKEVIET 3.1
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2011 VINADES.,JSC. All rights reserved
 * @Createdate 26/01/2011, 14:40
 */
if (! defined ( 'NV_IS_MOD_USER' ))
	die ( 'Stop!!!' );

if (file_exists ( NV_ROOTDIR . '/' . $global_config['dir_forum'] . '/ucp.php' )) {
	Header ( "Location: " . $global_config ['site_url'] . "/" . $global_config['dir_forum'] . "/ucp.php?mode=sendpassword" );
	die ();
} else {
	trigger_error ( "Error no forum phpbb", 256 );
}

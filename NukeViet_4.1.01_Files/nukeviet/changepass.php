<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Createdate 14/7/2010, 2:34
 */
if (! defined ( 'NV_IS_MOD_USER' ))
	die ( 'Stop!!!' );

if (file_exists ( NV_ROOTDIR . '/' . $global_config['dir_forum'] . '/ucp.php' )) {
	Header ( "Location: " . $global_config ['site_url'] . "/" . $global_config['dir_forum'] . "/ucp.php?i=profile&mode=reg_details" );
	die ();
} else {
	trigger_error ( "Error no forum phpbb", 256 );
}


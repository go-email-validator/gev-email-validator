<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option( GEV_EMAIL_VALIDATOR_NAME );

wp_cache_flush();

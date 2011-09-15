<?php
/*
Plugin Name: Rename XMLRPC
Plugin URI: http://wordpress.org/extend/plugins/rename-xml-rpc/
Description: Make XML-RPC work if you rename the file. Some hosts block access to xmlrpc.php file making it impossible to use
Author: Jorge Bernal
Version: 1.0
Author URI: http://koke.me
*/

function rx_site_url( $url, $path, $orig_scheme, $blog_id ) {
  if ( XMLRPC_REQUEST  && $path == 'xmlrpc.php' ) {
    return preg_replace( '/xmlrpc.php$/', basename( $_SERVER['PHP_SELF'] ), $url );
  } else {
    return $url;
  }
}
add_filter( 'site_url', 'rx_site_url', 10, 4 );
?>

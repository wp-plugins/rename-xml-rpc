=== Plugin Name ===
Contributors: koke, daniloercoli, automattic
Tags: xmlrpc
Requires at least: 2.9
Tested up to: 3.2.1
Stable tag: 1.1

Make XML-RPC work if you rename the file. Some hosts block access to xmlrpc.php file making it impossible to use

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `rename-xml-rpc.php` to the `/wp-content/plugins/` directory
2. Upgrade the filename of the XML-RPC Endpoint in `rename-xml-rpc.php` (sorry there is not an option page yet!)
3. Activate the plugin through the 'Plugins' menu in WordPress
4. There is no step 4


== Changelog ==

= 1.1 =
Fix the RSD document link by using the renamed filepath 

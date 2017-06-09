<?php
/*
Plugin Name: Grid plus modal
Plugin URI: http://broarm.nl
Description: Modal toevoeging, speciaal voor Donna.
Author: Bram de Leeuw
Version: 0.1
Author URI: https://github.com/TheBnl
*/


// Derive the current path and load up Sanity
$plugin_path = dirname(__FILE__) . '/';
if (class_exists('SanityPluginFramework') != true) {
    require_once($plugin_path . 'framework/sanity.php');
}

class GridPlusModal extends SanityPluginFramework
{
    var $version = '0.1';

    var $plugin_css = array(
        '/js/thirdparty/fancybox/dist/jquery.fancybox'
    );

    var $plugin_js = array(
        '/js/thirdparty/jquery/dist/jquery.min',
        '/js/thirdparty/fancybox/dist/jquery.fancybox',
        '/js/grid-plus-modal'
    );

    function __construct()
    {
        parent::__construct(__FILE__);
    }

    function activate()
    {}


    function initialize()
    {
        $this->load_plugin_scripts();
    }
}


$gridPlusModal = new GridPlusModal();

// Add an activation hook
register_activation_hook(__FILE__, array(&$gridPlusModal, 'activate'));

// Run the plugins initialization method
add_action('init', array(&$gridPlusModal, 'initialize'));

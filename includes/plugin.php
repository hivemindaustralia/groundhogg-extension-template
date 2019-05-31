<?php

namespace GroundhoggExtension;

use Groundhogg\Admin\Admin_Menu;
use Groundhogg\DB\Manager;
use Groundhogg\Extension;

class Plugin extends Extension{

    /**
     * Include any files.
     *
     * @return void
     */
    public function includes()
    {
//        require  GROUNDHOGG_EXTENSION_PATH . '/includes/functions.php';
    }

    /**
     * Init any components that need to be added.
     *
     * @return void
     */
    public function init_components()
    {
        // TODO: Implement init_components() method.
    }

    /**
     * Get the ID number for the download in EDD Store
     *
     * @return int
     */
    public function get_download_id()
    {
        // TODO: Implement get_download_id() method.
    }

    /**
     * @return string
     */
    public function get_display_description()
    {
        // TODO: Implement get_display_description() method.
    }

    /**
     * Get the version #
     *
     * @return mixed
     */
    public function get_version()
    {
        return GROUNDHOGG_EXTENSION_VERSION;
    }

    /**
     * @return string
     */
    public function get_display_name()
    {
        return GROUNDHOGG_EXTENSION_NAME;
    }

    /**
     * @return string
     */
    public function get_plugin_file()
    {
        return GROUNDHOGG_EXTENSION__FILE__;
    }

    /**
     * Register autoloader.
     *
     * Groundhogg autoloader loads all the classes needed to run the plugin.
     *
     * @since 1.6.0
     * @access private
     */
    protected function register_autoloader()
    {
        require GROUNDHOGG_EXTENSION_PATH . 'includes/autoloader.php';
        Autoloader::run();
    }
}
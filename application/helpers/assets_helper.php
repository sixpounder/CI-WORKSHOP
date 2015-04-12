<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Asset URL
 * 
 * Create a local URL to your assets based on your basepath.
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('asset_url')) {
    function asset_url($uri = '', $group = FALSE) {
        $CI = & get_instance();
        
        if (!$dir = $CI->config->item('assets_path')) {
            $dir = 'assets/';
        }
        
        if ($group) {
            return $CI->config->base_url($dir . $group . '/' . $uri);
        } else {
            return $CI->config->base_url($dir . $uri);
        }
    }
}

/**
 * Javascript URL
 * 
 * Create a local URL to your JS assets based on your basepath.
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('js')) {
    function js($name) {
        return(asset_url('js/' . $name));
    }
}

/**
 * CSS URL
 * 
 * Create a local URL to your css assets based on your basepath.
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('css')) {
    function css($name) {
        return(asset_url('styles/' . $name));
    }
}

/**
 * IMAGE URL
 * 
 * Create a local URL to your css assets based on your basepath.
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('imgPath')) {
    function imgPath($name) {
        return(asset_url('images/' . $name));
    }
}



/* End of file assets_helper.php */
/* Location: ./application/helpers/assets_helper.php */
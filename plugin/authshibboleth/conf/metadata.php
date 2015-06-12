<?php
/**
 * Options for the authshibboleth plugin.
 *
 * @author  Ivan Novakov http://novakov.cz/
 * @license http://debug.cz/license/bsd-3-clause BSD 3 Clause
 * @link https://github.com/ivan-novakov/dokuwiki-shibboleth-auth Homepage
 *
 * @link https://www.dokuwiki.org/devel:configuration#default_settings Documentation
 */
$meta['use_dokuwiki_session'] = array('onoff');
$meta['logout_handler'] = array('string');
$meta['logout_handler_location'] = array('string');
$meta['logout_return_url'] = array('string');
$meta['shibboleth_handler_base'] = array('string');
$meta['var_remote_user'] = array('string');
$meta['var_display_name'] = array('string');
$meta['var_mail'] = array('string');
$meta['var_shib_session_id'] = array('string');
//$meta['group_source_config'] = array('multichoice', '_choices' => array('groups','entitlement','custom'));
$meta['display_name_tpl'] = array('string');
$meta['log_enabled'] = array('onoff');
$meta['log_file'] = array('string');
$meta['log_priority'] = array('multichoice', '_choices' => array('7','6','3'));
$meta['log_to_php'] = array('onoff');
$meta['login_handler'] = array('string');
$meta['login_handler_location'] = array('string');
$meta['login_target'] = array('string');

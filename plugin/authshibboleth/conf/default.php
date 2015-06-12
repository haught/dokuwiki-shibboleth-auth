<?php
/**
 * Default settings for the authshibboleth plugin.
 *
 * @author  Ivan Novakov http://novakov.cz/
 * @license http://debug.cz/license/bsd-3-clause BSD 3 Clause 
 * @link https://github.com/ivan-novakov/dokuwiki-shibboleth-auth Homepage
 * 
 * @link https://www.dokuwiki.org/devel:configuration#default_settings Documentation
 */
$conf['use_dokuwiki_session'] = true;
$conf['logout_handler'] = 'Logout';
$conf['logout_handler_location'] = '';
$conf['logout_return_url'] = '';
$conf['shibboleth_handler_base'] = '/Shibboleth.sso/';
$conf['var_remote_user'] = 'REMOTE_USER';
$conf['var_display_name'] = 'cn';
$conf['var_mail'] = 'mail';
$conf['var_shib_session_id'] = 'Shib-Session-ID';
//$conf['group_source_config'] = '';
$conf['display_name_tpl'] = '';
$conf['log_enabled'] = false;
$conf['log_file'] = '';
$conf['log_priority'] = 7;
$conf['log_to_php'] = false;
$conf['login_handler'] = 'Login';
$conf['login_handler_location'] = '';
$conf['login_target'] = '';

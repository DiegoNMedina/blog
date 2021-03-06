<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('BASE_URL') OR define('BASE_URL', (is_https() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']) . '/');
$config['base_url'] = BASE_URL;
$config['index_page'] = 'index.php';
$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = FALSE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = TRUE;
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = '';
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'diego_medina';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;
$config['author'] = 'Diego Medina.';
$config['description'] = 'Software Developer';
$config['standardize_newlines'] = FALSE;
$config['global_xss_filtering'] = FALSE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';
$config['author'] = 'Diego Medina';
$config['phone'] = '+52 221 168 5660';
$config['city'] = 'Puebla, Mexico';
$config['zip_code'] = 72310;
$config['email'] = 'contact@diegomedina.ml';
$config['website'] = 'diegomedina.ml';
$config['birthday'] = 'September 02, 1999';
$config['name'] = 'Diego Medina';
/*MUSIC*/
$config['mphone'] = '+52 222 931 9567';
$config['mcity'] = 'Puebla, Mexico';
$config['mzip_code'] = 72310;
$config['memail'] = 'migueljc99@hotmail.com';
$config['musicemail'] = 'music@diegomedina.ml';
$config['mwebsite'] = 'diegomedina.ml/music';
$config['mbirthday'] = 'February 11, 1999';
$config['mname'] = 'Miguel Ju??rez';


/*THERAPHY*/
$config['tphone'] = '+52 222 438 4592';
$config['tcity'] = 'Servicio a domicilio en todo Puebla';
$config['tzip_code'] = 72310;
$config['temail'] = 'ltfandreahm@hotmail.com';
$config['theraphymail'] = 'theraphy@diegomedina.ml';
$config['twebsite'] = 'diegomedina.ml/theraphy';
$config['tbirthday'] = 'Abril de 1992';
$config['tname'] = 'LTF. Andrea Hern??ndez';
$config['tfacebook'] = 'https://www.facebook.com/LTF-Andrea-Hern%C3%A1ndez-Medina-Terapia-F%C3%ADsica-y-Rehabilitaci%C3%B3n-112948146999862';
$config['tinsta'] = 'https://www.instagram.com/ltf.andreamedina/';


/*EJELECTRIC*/


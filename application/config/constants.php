<?php
defined('BASEPATH') or exit('No direct script access allowed');

defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', TRUE);

//File and Directory Modes
defined('FILE_READ_MODE')                       or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE')                      or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')                        or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')                       or define('DIR_WRITE_MODE', 0755);

//File Stream Modes
defined('FOPEN_READ')                           or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb');
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b');
defined('FOPEN_WRITE_CREATE')                   or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

//Exit Status Codes
defined('EXIT_SUCCESS')                         or define('EXIT_SUCCESS', 0);
defined('EXIT_ERROR')                           or define('EXIT_ERROR', 1);
defined('EXIT_CONFIG')                          or define('EXIT_CONFIG', 3);
defined('EXIT_UNKNOWN_FILE')                    or define('EXIT_UNKNOWN_FILE', 4);
defined('EXIT_UNKNOWN_CLASS')                   or define('EXIT_UNKNOWN_CLASS', 5);
defined('EXIT_UNKNOWN_METHOD')                  or define('EXIT_UNKNOWN_METHOD', 6);
defined('EXIT_USER_INPUT')                      or define('EXIT_USER_INPUT', 7);
defined('EXIT_DATABASE')                        or define('EXIT_DATABASE', 8);
defined('EXIT__AUTO_MIN')                       or define('EXIT__AUTO_MIN', 9);
defined('EXIT__AUTO_MAX')                       or define('EXIT__AUTO_MAX', 125);

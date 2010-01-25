<?php

/**
 * Production Mode
 *
 * TRUE for production, FALSE for development. In development the cache is always
 * refreshed each time you reload the CSS. In production, the cache is locked
 * and will only be recache if these conditions are met:
 *
 *		1. One of the files in the request has changed
 *		2. The cache lifetime has expired (set below)
 *
 * If the cache lifetime has expired, Scaffold will refresh the flags and
 * check each file requested for changes. If no file has changed, it uses
 * the same output file again and waits till the cache lifetime is up again.
 *
 * This means the load on your server will be much less when the site is live.
 *
 * Also, in production mode, errors are disabled and any modules which change
 * the output will not be available - like the Typography module. 
 */
$config['in_production'] = false;

/**
 * Display Errors
 *
 * When an error is found, Scaffold can display a HTML page describing the error.
 * In production mode, errors will never be shown.
 */
$config['display_errors'] = true;

/**
 * Cache Lifetime
 *
 * This has no effect when no in production mode.
 *
 * Scaffold can cache it's flags, config values and more to save on 
 * rendering time when a file isn't being recached and just being delivered
 * to the browser. Rather than finding the config files, loading modules,
 * loading flags, checking modified times etc. It can just skip straight
 * to outputting the CSS.
 *
 * This value, in seconds, determines how long the internal cache will last.
 *
 * Setting this to false means that Scaffold will check to see if the original
 * files are modified every time, resulting in a slightly slower parsing time
 * when in production.
 */
$config['cache_lifetime'] = 3600; // 3600 will check if it needs to recache every hour

/**
 * Enable Logging
 *
 * If you enable logging, errors, warnings and messages will be saved to the logs directory
 * inside the system folder.
 */
$config['enable_log'] = true;

/**
 * Error Threshold
 *
 * Set the minimum log level required to be displayed as an error. 0 will display
 * only error messages, 1 will display error AND warning messages etc.
 *
 * For example. A non-existent CSS file is an level 0 message (an error), whereas
 * a missing image is a level 1 message (a warning). Setting this to 1 will display
 * these missing images as errors.
 *
 * 0 = error
 * 1 = warning
 * 2 = message
 * 3 = debug
 */
$config['error_threshold'] = 0;

/**
 * Document Root
 *
 * The document root for the server. If you're server doesn't set the $_SERVER['DOCUMENT_ROOT']
 * variable (I'm looking at you Windows) you can manually enter in the server path 
 * to the document root. Most of the time, you won't need to touch this.
 */
$config['document_root'] = $_SERVER['DOCUMENT_ROOT'];

/**
 * System Folder
 *
 * The path to the system folder relative to where the front controller. You shouldn't
 * need to change this unless you are moving folders around. If you're calling Scaffold
 * from another class or script, you'll still need to set this. You can make it relative,
 * an absolute file path, or even relative to the document root and Scaffold
 * will take care of the rest. 
 */
$config['system'] = './';

/**
 * Cache Folder
 *
 * Sets the cache path. By default, this is inside of the system folder.
 * You can set it to a custom location here. I wouldn't recommend setting
 * this to any other folder, it just isn't usually necessary as Scaffold
 * can take care of everything internally.
 *
 * You will probably set this if you're using Scaffold within another framework.
 */
$config['cache'] = './cache/';

/**
 * Disable Modules
 *
 * If a particular module isn't taking your fancy, you can just disable it
 * here. You might get some unexpected results by doing so. I wouldn't recommend
 * disabling any of the major modules (Nested Selectors, constants, mixins), as
 * you might get some unexpected results. 
 */
$config['disable'] = array();

$config['disable_flags'] = true;
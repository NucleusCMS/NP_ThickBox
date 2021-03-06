<?php
define ('DEBUG_ON', false);                       // Enable debug logging to web server error log (STDERR)
define ('DEBUG_LEVEL', 1);                        // Debug level 1 is less noisy and 3 is the most noisy
define ('DISPLAY_ERROR_MESSAGES', true);          // Display error messages. Set to false to turn off errors (good for production websites)

// Image size and defaults
define ('DEFAULT_Q', 85);                         // Default image quality
define ('DEFAULT_ZC', 1);                         // Default zoom/crop setting
define ('DEFAULT_F', '');                         // Default image filters
define ('DEFAULT_S', 0);                          // Default sharpen value
define ('DEFAULT_CC', 'ffffff');                  // Default canvas colour
define ('DEFAULT_WIDTH', 240);                    // Default thumbnail width
define ('DEFAULT_HEIGHT', 240);                   // Default thumbnail height
define ('MAX_WIDTH', 1920);                       // Maximum image width
define ('MAX_HEIGHT', 1920);                      // Maximum image height

define ('NOT_FOUND_IMAGE', '');                   // Image to serve if any 404 occurs 
define ('ERROR_IMAGE', '');                       // Image to serve if an error occurs instead of showing error message 
define ('PNG_IS_TRANSPARENT', FALSE);             // Define if a png image should have a transparent background color.
                                                  // Use False value if you want to display a custom coloured canvas_colour 

define ('MEMORY_LIMIT', '50M');                   // Set PHP memory limit

// Image fetching and caching
define ('FILE_CACHE_ENABLED', TRUE);                 // Should we store resized/modified images on disk to speed things up?
define ('FILE_CACHE_TIME_BETWEEN_CLEANS', 60*60*24); // How often the cache is cleaned 

define ('FILE_CACHE_MAX_FILE_AGE', 60*60*24);        // How old does a file have to be to be deleted from the cache
define ('FILE_CACHE_SUFFIX', '.cache.txt');             // What to put at the end of all files in the cache directory so we can identify them
define ('FILE_CACHE_PREFIX', 'tt');                  // What to put at the beg of all files in the cache directory so we can identify them
define ('FILE_CACHE_DIRECTORY', './cache');          // Directory where images are cached.
                                                     // Left blank it will use the system temporary directory (which is better for security)
define ('MAX_FILE_SIZE', 10485760);                  // 10 MB is 10485760. This is the max internal or external file size that we'll process.
define ('WAIT_BETWEEN_FETCH_ERRORS', 3600);          // Time to wait between errors fetching remote file

// Browser caching
define ('BROWSER_CACHE_MAX_AGE', 60*60*24*10);       // Time to cache in the browser
define ('BROWSER_CACHE_DISABLE', false);             // Use for testing if you want to disable all browser caching



// If ALLOW_EXTERNAL is true and ALLOW_ALL_EXTERNAL_SITES is false,
// then external images will only be fetched from these domains and their subdomains. 
define ('ALLOW_EXTERNAL', false);            // Allow image fetching from external websites.
                                             // Will check against ALLOWED_SITES if ALLOW_ALL_EXTERNAL_SITES is false
define ('ALLOW_ALL_EXTERNAL_SITES', false);  // Less secure. 

$ALLOWED_SITES = array ();

/*
$ALLOWED_SITES = array (
    'flickr.com',
    'staticflickr.com',
    'picasa.com',
    'img.youtube.com',
    'upload.wikimedia.org',
    'photobucket.com',
    'imgur.com',
    'imageshack.us',
    'tinypic.com',
);
*/

<?php die() ; ?>

Server Variables
    SERVER_SOFTWARE = cpsrvd 11.66.0.34
    DOCUMENT_ROOT = /home/feueac/public_html
    LSWCP_TAG_PREFIX = 8b9

LSCache Plugin Options
    version = 1.5
    radio_select = 1
    purge_upgrade = true
    cache_priv = true
    cache_commenter = true
    cache_rest = true
    cache_page_login = true
    timed_urls = 
    timed_urls_time = 
    cache_favicon = true
    cache_resources = true
    mobileview_enabled = false
    mobileview_rules = false
    cache_uri_priv = 
    cache_browser = false
    login_cookie = 
    check_advancedcache = true
    debug = 0
    admin_ips = 127.0.0.1
    debug_level = false
    log_file_size = 30
    heartbeat = true
    debug_cookie = false
    collaps_qs = false
    log_filters = false
    log_ignore_filters = gettext
gettext_with_context
get_the_terms
get_term
    log_ignore_part_filters = i18n
locale
settings
option
    public_ttl = 604800
    private_ttl = 1800
    front_page_ttl = 604800
    feed_ttl = 0
    403_ttl = 3600
    404_ttl = 3600
    500_ttl = 3600
    purge_by_post = A.F.H.M.PGS.PGSRP.PT.T
    excludes_uri = 
    excludes_qs = 
    excludes_cat = 
    excludes_tag = 
    css_minify = false
    css_combine = false
    css_http2 = false
    css_exclude = 
    js_minify = false
    js_combine = false
    js_http2 = false
    js_exclude = 
    optimize_ttl = 604800
    html_minify = false
    optm_qs_rm = false
    optm_ggfonts_rm = false
    optm_css_async = false
    optm_js_defer = false
    optm_emoji_rm = false
    optm_excludes = 
    optm_exclude_jquery = true
    cdn = false
    cdn_ori = 
    cdn_url = 
    cdn_inc_img = false
    cdn_inc_css = false
    cdn_inc_js = false
    cdn_filetype = .aac
.css
.eot
.gif
.jpeg
.js
.jpg
.less
.mp3
.mp4
.ogg
.otf
.pdf
.png
.svg
.ttf
.woff
    cdn_exclude = 
    cdn_remote_jquery = false
    media_img_lazy = false
    media_img_lazy_placeholder = 
    media_iframe_lazy = false
    hash = vmbJRl6Io65DB3Y2nUGlb2GKOEmaAg96
    nocache_cookies = 
    nocache_useragents = 
    crawler_include_posts = true
    crawler_include_pages = true
    crawler_include_cats = true
    crawler_include_tags = true
    crawler_excludes_cpt = 
    crawler_order_links = date_desc
    crawler_usleep = 500
    crawler_run_duration = 400
    crawler_run_interval = 600
    crawler_crawl_interval = 302400
    crawler_threads = 3
    crawler_load_limit = 1
    crawler_domain_ip = 
    crawler_custom_sitemap = 
    crawler_cron_active = false
    esi_enabled = false
    esi_cached_admbar = true
    esi_cached_commform = true

Wordpress Specific Extras
    wordpress version = 4.9.1
    locale = en_US
    active theme = Victory
    active plugins = array (
  0 => 'add-from-server/add-from-server.php',
  1 => 'addthis-follow/addthis-follow.php',
  2 => 'addthis/addthis_social_widget.php',
  3 => 'advanced-custom-fields-pro/acf.php',
  4 => 'ajax-load-more/ajax-load-more.php',
  5 => 'all-in-one-wp-migration/all-in-one-wp-migration.php',
  6 => 'animate/animate.php',
  7 => 'contact-form-7/wp-contact-form-7.php',
  8 => 'disqus-comment-system/disqus.php',
  9 => 'duplicate-post/duplicate-post.php',
  10 => 'media-element-html5-video-and-audio-player/mediaelement-js-wp.php',
  11 => 'revslider/revslider.php',
  12 => 'slicknav-mobile-menu/slicknav-mobile-menu.php',
  13 => 'upload-max-file-size/upload_max_file_size.php',
  14 => 'wp-clone-by-wp-academy/wpclone.php',
  15 => 'wp-editor/wpeditor.php',
  16 => 'wp-file-manager/file_folder_manager.php',
)

/home/feueac/public_html/victory/.htaccess contents:
# BEGIN LSCACHE
## LITESPEED WP CACHE PLUGIN - Do not edit the contents of this block! ##
<IfModule LiteSpeed>
RewriteEngine on
CacheLookup on
RewriteRule .* - [E=Cache-Control:no-autoflush]
RewriteRule min/\w+\.(css|js) - [E=cache-control:no-vary]

### marker CACHE RESOURCE start ###
RewriteRule wp-content/.*/[^/]*(responsive|css|js|dynamic|loader|fonts)\.php - [E=cache-control:max-age=3600]
### marker CACHE RESOURCE end ###

### marker FAVICON start ###
RewriteRule favicon\.ico$ - [E=cache-control:max-age=86400]
### marker FAVICON end ###

</IfModule>
## LITESPEED WP CACHE PLUGIN - Do not edit the contents of this block! ##
# END LSCACHE

# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /victory/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /victory/index.php [L]
</IfModule>


# END WordPress



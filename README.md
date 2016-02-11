# Jobplanet ID Blog
### Custom Rss
First thing you need to do is create the new RSS feed in your theme’s. Edit at wp-content/themes/[your-theme]/functions.php
```
add_action('init', 'customRSS');
function customRSS(){
        add_feed('full', 'customRSSFunc');
}
```

> The above code triggers the customRSS function, which adds the feed. The add_feed function has two arguments, feedname(full), and a callback function. The feedname will make up your new feed url yourdomain.com/feed/feedname and the callback function will be called to actually create the feed. Make a note of the feedname, as you’ll need this later on.

Once you have initialized the feed, you’ll need to create the callback function to produce the required feed, using the following code in your theme’s functions.php file or in a site specific plugin:

```
function customRSSFunc(){
    get_template_part('rss', 'full');
}
```
> Save this file in your theme folder as the slug-name.php template file configured in the get_template_part function.

add file wp-content/themes/[your-theme]/rss-full.php 

```
<?php
/**
 * Template Name: Custom RSS Template - Feedname
 */
$postCount = 10; // The number of posts to show in the feed
$posts = query_posts('showposts=' . $postCount);
header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>';
?>
<rss version="2.0"
        xmlns:content="http://purl.org/rss/1.0/modules/content/"
        xmlns:wfw="http://wellformedweb.org/CommentAPI/"
        xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:atom="http://www.w3.org/2005/Atom"
        xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
        xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
        <?php do_action('rss2_ns'); ?>>
<channel>
        <title><?php bloginfo_rss('name'); ?> - Feed</title>
        <link><?php bloginfo_rss('url') ?></link>
        <description><?php bloginfo_rss('description') ?></description>
        <language>id-id</language>
        <?php while(have_posts()) : the_post(); ?>
                <item>
                        <title><?php the_title_rss(); ?></title>
                        <link><?php the_permalink_rss(); ?></link>
                        <guid><?php the_permalink_rss(); ?></guid>
                        <pubDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_post_time('Y-m-d H:i:s', true), false); ?></pubDate>
                        <description><![CDATA[<?php the_excerpt_rss() ?>]]></description>
                        <content:encoded><![CDATA[<?php htmlspecialchars(the_content(), ENT_NOQUOTES, "UTF-8"); ?>]]></content:encoded>
                        <?php rss_enclosure(); ?>
                        <?php do_action('rss2_item'); ?>
                </item>
        <?php endwhile; ?>
</channel>
</rss>
```
Settings -> Permalinks. Once here, just click Save Changes, which will flush the rewrite rules.

<!--
How to Disable Disqus on Custom Post Types in WordPress

We recently switched from WordPress comments to Disqus comment system on WPBeginner. One of our users pointed out that comments on our custom post types comments weren’t migrated properly. For a temporary solution, we simply disabled Disqus on certain custom post types. In this article, we will show you how to disable Disqus on custom post types in WordPress.
Disqus not showing comments on our custom post types was an error on our part. When importing comment to Disqus, we couldn’t use the normal sync feature because of the size of our site. We had to generate an export file and send it to Disqus to pre-import the comments. This meant that we only did this for posts and not other post types. So when Disqus showed 0 comments on a custom post type item that had 50+ comments, it really was because Disqus didn’t know that it had any comments because we didn’t tell that to Disqus.
So in other words, if you were going to disable Disqus on custom post types because it didn’t work, then maybe you should check your import settings first. But if you want to disable Disqus on custom post types for some other reason, then follow along.
Before you make any changes make sure that you have enabled syncing between Disqus and WordPress. It is also recommended that you always make a complete WordPress backup of your site before making any big changes.
-->
<?php
add_filter( 'comments_template' , 'wpb_block_disqus', 1 );
function wpb_block_disqus($file) {
if ( 'custom_post_type_name' == get_post_type() )
remove_filter('comments_template', 'dsq_comments_template');
return $file;

}
?>
<!--
Don’t forget to replace custom_post_type_name with the name of your custom post type. This code simply adds a filter to check for a specific custom post type and disable Disqus comment template display.
We hope this article helped you disable Disqus on custom post types in WordPress. Also check out how we prevented Disqus from overriding Comments count in WordPress.
If you liked this article, then subscribe to our YouTube Channel or join us on Twitter and Google+.-->

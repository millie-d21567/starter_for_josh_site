<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
/* Variable for alternating comment background */
$oddcomment = 'alt';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
<h3 id="comments"><?php comments_number('No Comments', '1 Comment', '% Comments');?></h3>
<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>
<li class="<?php /* Separate admin comments */ if ($comment->user_id) echo 'authcomment'; else echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
<div class="commentmetadata">
<span class="comment-author"><?php comment_author_link() ?></span>
<span class="comment-date"><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></span>
                
<?php if ($comment->comment_approved == '0') : ?>
<span class="comment-mod"><em>Your comment is awaiting moderation.</em></span>
<?php endif; ?>
</div>
            
<div class="comment-text">
<?php comment_text() ?>
</div>
<div style="clear:both;"></div>
</li>
<?php /* Changes every other comment to a different class */
if ('alt' == $oddcomment) $oddcomment = '';
else $oddcomment = 'alt';
?>
<?php endforeach; /* end for each comment */ ?>
</ol>

<?php else : /* this is displayed if there are no comments so far */ ?>
    
<h3 id="comments">No comments</h3>
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
<p class="nocomments">No comments yet.</p>
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
<?php endif; ?>

<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
    <h3 id="respond">Leave a Comment</h3>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
<label for="url"><small>Website</small></label></p>
<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>
    l    

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
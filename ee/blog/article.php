<!DOCTYPE html>
<head>
{exp:channel:entries channel="blog" status="open" limit="1" track_views="one" disable="category_fields|member_data|pagination"}
<title>{title} | Blog | Firebrand Media | Martinsburg, WV</title>
{exp:seo_lite entry_id="{entry_id}"}

<meta name="viewport" content="width = 1100" />

{css_js}

</head>
<body>

{header}

<div id="entry_title">

<h2>{title}</h2>

</div>

<div id="content" class="group">

<div id="entry">

<div id="entry_supplemental">

<ul>
{if logged_in}<li>{exp:edit_this:entry entry_id="{entry_id}" channel_id="{channel_id}" author_id="{author_id}"}</li>{/if}
<li><strong>Author:</strong> <a href="#author_details">{author}</a></li>
<li><strong>Published:</strong> {entry_date format="%m/%d/%Y"}</li>
<li><strong>Viewed:</strong> {view_count_one} time(s)</li>
<li><strong>Categorized:</strong> {categories}<a href="{path='blog/category/'}">{category_name}, </a> {/categories}</li>
<li><strong>Share:</strong> {if blog_short}{blog_short}{if:else} {blog_shortcut}{/if}</li>
</ul>
{/exp:channel:entries}
</div>

<div id="entry_navigation">
<ul>
<li>{exp:channel:prev_entry channel="blog"}Prev entry <a href="{path='blog/article'}">{title}</a>{/exp:channel:prev_entry}</li>
<li><a href="{path='blog/index'}">Back to the Blog</a></li>
<li>{exp:channel:next_entry channel="blog"}Next entry: <a href="{path='blog/article'}">{title}</a>{/exp:channel:next_entry}</li>
</ul>
</div>

{exp:channel:entries channel="blog" status="open" limit="1" disable="categories|category_fields|member_data|pagination"}

{blog_excerpt}

{if blog_image}
{blog_image}
{exp:ce_img:pair src="{blog_featured_image}" width="450" height="300"}
<img class="{blog_image_alignment}" src="{made}" />
{/exp:ce_img:pair}
{/blog_image}
{/if}

{exp:ee_syntax:add_head}
{exp:ee_syntax:filter}
{blog_body}
{/exp:ee_syntax:filter}

{if blog_image_gallery}
<h3>Related Images</h3>
<div id="image_gallery" class="group">
{blog_image_gallery}
<li class="{switch='left|right'}">{exp:ce_img:pair src="{blog_gallery}" width="500"}<img src="{made}" alt="{blog_gallery_alt}" />{/exp:ce_img:pair}<em>{blog_gallery_alt}</em></li>
{/blog_image_gallery}

</div>
{/if}
{/exp:channel:entries}

<div id="comments">
<!--Comments-->
<h3>Comments</h3>
{if no_results}  <p>There are no comments for this entry yet. Start the discussion by adding your comment below.</p>  {/if}
{exp:threaded_comments:display}
<ul>
{comments}
{thread_start}
<ul>
{/thread_start}
<li>
<div class="comment_text" class="group">{comment}</div>
<img class="gravatar_image" src="{exp:gravatar email="{email}" rating="PG" size="40" default="http://firebrand-media.com/images/ui/gravatar_missing.png"}" /><p class="comment_author">{url_as_author} --- <a href="javascript:void(0)" class="reply" rel="{comment_id}">Reply to this comment</a> <a href="javascript:void(0)" class="quote reply" rel="{comment_id}">Quote and reply</a> </p>
</li>
{thread_end}
</ul>
{/thread_end}
{/comments}
</ul>
{/exp:threaded_comments:display}

<p class="add_comment"><a href="javascript:void(0)" class="reply" rel="0">Add a Comment</a></p>
<!--Comments-->

<!--Comment Form-->

{exp:threaded_comments:form}
{if logged_out}
<pre><li class="screen-reader">
  <label for="honeepot">Don't put anything here</label>
  <input type="text" name="honeepot" id="honeepot" />
</li></pre>
<p><label for="comment-author">Name</label><input type="text" name="name" /> </p>
<p><label for="comment-email">Email</label><input type="text" name="email" /> </p>
{/if}

<p><label for="comment-comment">Comment</label><textarea name="comment" id="comment-comment" cols="22" rows="5" tabindex="4"></textarea></p>

{if logged_out}
	<p class="checkboxes"><label for="save_info">Remember my personal information?</label><input type="checkbox" id="save_info" name="save_info" value="yes" {save_info} /></p>
{/if}

	<p class="checkboxes"><label for="notify_me">Notify me of follow-up comments?</label><input type="checkbox" id="notify_me" name="notify_me" value="yes" {notify_me} /></p>

<p><input class="btn" type="submit" name="submit" value="submit" /></p>
{/exp:threaded_comments:form}

{!-- this code will set proper parent_id and move the form --}
<style type="text/css">
#comment_form {display: none;}
</style>
<script type="text/javascript">
$(document).ready(function(){
  $('.reply').click(function() {
    $('#comment_form input[name=parent_id]').val($(this).attr('rel'));
    $('#comment_form').insertAfter( // Insert the comment form after...
    $(this)
    .parent() // The containing p tag
    );
    $('#comment_form').show();
  });
  $('.quote').click(function() {
    $('#comment_form textarea[name=comment]').val('[quote]'+
    $(this).parent().parent().find('.comment-text').text()+
    '[/quote]'
    );
  });
});
</script>
<!--<h4>Add A Comment</h4>
{exp:threaded_comments:form entry_id="{segment_4}" parent_id="{segment_5}"}

{if error}
	<p class="error">{error_text}</p>
{if:else}
{if logged_out}
	<p><label for="comment-author">Name</label><input type="text" name="name" id="comment-author" onfocus="if
	(this.value==this.defaultValue) this.value='';" value="Name" tabindex="1" /><abbr>Required</abbr></p>
	<p><label for="comment-email">Email</label><input type="text" name="email" id="comment-email" onfocus="if
	(this.value==this.defaultValue) this.value='';" value="Email" tabindex="2" /><abbr>Required</abbr></p>
{/if}

<p><label for="comment-comment">Comment</label><textarea name="comment" id="comment-comment" cols="22" rows="5" tabindex="4" ></textarea></p>

{if logged_out}
	<p class="checkboxes"><label for="save_info">Remember my personal information?</label><input type="checkbox" id="save_info" name="save_info" value="yes" {save_info} /></p>
{/if}

	<p class="checkboxes"><label for="notify_me">Notify me of follow-up comments?</label><input type="checkbox" id="notify_me" name="notify_me" value="yes" {notify_me} /></p>

{if captcha}
    <p><label>Anti-Spam Text:</label>{captcha}</p>
	<p><label for="captcha">Please enter the word you see in the image above:</label><input type="text" name="captcha" value="" maxlength="20" /></p>
{/if}
	<p class="submit"><button class="btn" type="submit" name="submit" value="submit" id="comment-submit" tabindex="5" >Submit Your Comment</button></p>
{/if}

{/exp:threaded_comments:form}-->

<!--Comment Form-->
</div>

<div id="entry_navigation_bottom">
<ul>
<li>{exp:channel:prev_entry channel="blog"}Prev entry <a href="{path='blog/article'}">{title}</a>{/exp:channel:prev_entry}</li>
<li><a href="{path='blog/index'}">Back to the Blog</a></li>
<li>{exp:channel:next_entry channel="blog"}Next entry: <a href="{path='blog/article'}">{title}</a>{/exp:channel:next_entry}</li>
</ul>
</div>

{exp:channel:entries channel="blog" status="open" limit="1" disable="categories|category_fields|member_data|pagination"}

<div id="author_details">
{if photo}
<img class="author_image" src="{photo_url}" width="{photo_image_width}" height="{photo_image_height}" alt="{author}'s photo" />
{/if}
{if avatar}
<img class="author_image" src="{avatar_url}" width="{avatar_image_width}" height="{avatar_image_height}" alt="{author}'s avatar" />
{/if}
<ul>
<li><strong>Author:</strong> {author}</li>
<li><strong>About Me:</strong> {bio}</li>
{if url}<li><strong>@</strong><a href="{url}" title="Visit {author}'s website.">gbradhopkins</a></li>{/if}
</ul>

{/exp:channel:entries}


</div>

</div>

</div>

{recent_entries}

{footer}

</body>
</html>

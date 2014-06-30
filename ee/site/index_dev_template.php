<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Web Development, Graphic Design, Printing | Firebrand Media | Martinsburg, WV</title>

<meta name="viewport" content="width=1100" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="google-site-verification" content="wWPZO7VtkRo3BuzzNvYw1dgUKurJmqzH5FQOYFDSDsM" />

{css_js_homepage}

</head>
<body>


{header}

<!--Fullscreen Background Image-->
{exp:channel:entries channel="portfolio" category="18" orderby="random" limit="1"}
<script>
$( function() {
  $.vegas({
    src:'{portfolio_image_main}',
    valign:'top', // top, center, bottom or %
    align:'center' // left, center, right or %
  })('overlay', {
    src:'/images/overlays/01.gif'
  });
});
</script>


<!--Fullscreen background image created using Vegas JQuery Plugin - http://vegas.jaysalvat.com/documentation/setup/-->

<div id="homepage_content" class="group">
	<div id="homepage_featured_project" class="group">
		<h2>Featured: {title}</h2>
		{exp:trunchtml chars="800" inline="..."}{portfolio_brief}
		{/exp:trunchtml}
		<p><a href='{title_permalink='stuffwevedone/project'}'> Read about {title}</a></p>
		{/exp:channel:entries}

		<div class="homepage_recent">
			<h3>Recent</h3>
			<ul>
			{exp:channel:entries  channel="blog"  orderby="date" dynamic="off" limit="1" disable="member_data|pagination|category_fields|custom_fields"}
			<li><i class="{categories limit="1"}{category_url_title}{/categories}"></i><a href="{title_permalink='blog/article'}" title="Read {title}">{title}</a></li>
			{/exp:channel:entries}
			{exp:channel:entries  channel="portfolio"  orderby="date" dynamic="off" limit="1" disable="member_data|pagination|category_fields|custom_fields"}
			<li><i class="{categories limit="1" show="not 18"}{category_url_title}{/categories}"></i><a href="{title_permalink='stuffwevedone/project'}" title="{portfolio_tooltip}">{title}</a></li>
			{/exp:channel:entries}
			</ul>
		</div>

	</div>

	<div id="footer_homepage">
		<div id="footer_content" class="group">
		<div id="email_footer">
		{exp:mailinglist:form list="fire_starters"}
		<div class="group">
		<h5>Sign Up for our Email Newsletter</h5>
		<label>Email Address:</label> <input type="text" name="email" value="{email}" class="txt">
		<p><input type="submit" value="Subscribe" class="button" /></p>
		</div>
		{/exp:mailinglist:form}
		</div>
		<div id="footer_contact">
		<ul>
		<li><strong>Firebrand Media, LLC</strong></li>
		<li>304.839.9583</li>
		<li>&copy; Copyright {current_time format="%Y"}, All Rights Reserved</li>
		<li><a href="http://www.firebrand-media.com">firebrand-media.com</a></li>
		<li>Martinsburg, WV</li>
		</ul>
		</div>

		<div id="footer_social">
		<ul>
		<li><a href="mailto:contact@firebrand-media.com" title="Email Us!"><img src="/images/ui/social_email.gif" /></a></li>
		<li><a href="http://www.twitter.com/firebrandmedia" title="Follow Firebrand Media on Twitter."><img src="/images/ui/social_twitter.gif" /></a></li>
		<li><a href="http://firebrand-media.com/site/rss" title="Subscribe to the Firebrand Media RSS feed."><img src="/images/ui/social_rss.gif" /></a></li>
		<li><a href="http://www.delicious.com/firebrandmedia" title="Check out our links on Del.icio.us."><img src="/images/ui/social_delicious.gif" /></a></li>
		<li><a href="http://www.facebook.com/firebrandmedia" title="Firebrand Media on Facebook."><img src="/images/ui/social_facebook.gif" /></a></li>
		<li><a href="http://www.linkedin.com/in/gbradhopkins" title="Check out my profile on LinkedIn."><img src="/images/ui/social_linked_in.gif" /></a></li>
		<li><a href="http://www.inthepanhandle.com/local/business_directory/listing/firebrand_media_llc" title="Firebrand Media on InThePanhandle.com"><img src="/images/ui/social_itp.gif" /></a></li>
		<li><a href="http://www.flickr.com/firebrandmedia" title="The Firebrand Media Flickr photostream."><img src="/images/ui/social_flickr.gif" /></a></li>
		</ul>
		</div>
		</div>
	</div>
</div>

</div>

</body>
</html>

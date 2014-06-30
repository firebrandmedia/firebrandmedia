<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

<title>Web Development, Graphic Design, Printing | Firebrand Media | Martinsburg, WV</title>

<meta name="viewport" content="width=1024" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="google-site-verification" content="wWPZO7VtkRo3BuzzNvYw1dgUKurJmqzH5FQOYFDSDsM" />

<!--CSS_JS Global Variable-->

<!-- CSS Files -->
<link rel="stylesheet" href="/css/reset.css" type="text/css" />
<link rel="stylesheet" href="/css/ie.css" type="text/css" />
<link rel="stylesheet" href="/css/firebrand-media.css" type="text/css" />

<!-- JS Files -->
<script type="text/javascript" src="/js/css_browser_selector.js"></script>
<script type="text/javascript" src="http://use.typekit.com/lda2iei.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Nivo -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery.nivo.slider.js" type="text/javascript"></script>


<!-- JScripts -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-137822-1']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--CSS_JS Global Variable-->

</head>
<body>


<!--Header Snippet-->

<div id="header_wrapper" class="group">
<div id="header">

<div id="logo" class="group"><h1><a href="{site_url}" title="Back to the Firebrand Media homepage"><img src="/images/ui/firebrand_media_logo.png" alt="Firebrand Media | Web Development, Printing, Graphic Design, Online Marketing | Martinsburg, WV"/></a></h1>
</div>

<div id="navigation">
<ul>
<li><a href="{path='stuffwedo/index'}" title="This is what we can do to help your business.">we do</a></li>
<li><a href="{path='stuffwevedone/index'}" title="Past projects that we're especially proud of.">we've done</a></li>
<li><a href="{path='stuffweteach/index'}" title="We love helping others understand how to use the internet.">we teach</a></li>
<li><a href="{path='blog/index'}" title="Fire Starters - Firebrand Media Blog">we write</a></li>
<li class="last"><a href="{path='site/contact_us'}" title="Contact Firebrand Media">contact us</a></li>
<!-- <li class="last"><a href="{path='site/project_survey'}" title="Get a free quote for your next web project">Project Survey</a></li> -->
</ul>
</div>


</div>
</div>

<!--Header Snippet-->

<div id="homepage_featured" class="group">

{exp:channel:entries channel="portfolio" limit="1" dynamic="off" disable="categories|category_fields|member_data|pagination"}
    <img class="bg" src="{portfolio_image_main}" title="{title}" />
{/exp:channel:entries}

</div>

<div id="about_us" class="group">
<p>We love the internet.  Because of that, we spend most of our time <a href="{path='stuffwedo/index'}">creating for </a>, <a href="{path='blog/index'}">writing about</a>, <a href="http://twitter.com/firebrandmedia" title="Follow Firebrand Media on Twitter"> tweeting about</a> or <a href="{path='stuffweteach/index'}">talking about</a>  the web.</p>
</div>

<!--Embeds Recent Content-->

<div id="secondary_content" class="group">

<div id="blog">
<h5>Blog</h5>
<ul>
{exp:channel:entries  channel="blog"  orderby="date" dynamic="off" limit="4" disable="member_data|pagination"}
<li class="{categories limit="1"}{category_url_title}{/categories}"><a href="{title_permalink='blog/article'}" title="Read {title}">{title}</a></li>
{/exp:channel:entries}
</ul>
</div>

<div id="recent_projects">
<h5>Recent Projects</h5>
<ul>
{exp:channel:entries  channel="portfolio"  orderby="date" dynamic="off" limit="4" disable="member_data|pagination"}
<li  class="{categories limit="1" show="not 18"}{category_url_title}{/categories}"><a href="{title_permalink='stuffwevedone/project'}" title="{portfolio_tooltip}">{title}</a></li>
{/exp:channel:entries}
</ul>
</div>

<div id="upcoming_events">
<h5>Upcoming Events</h5>
{exp:channel:entries  channel="talks"  orderby="date" sort="asc" limit="1" dynamic="off" show_future_entries="yes" show_expired="no"}
<ul>
<li>{entry_date format="%M. %d, %Y"}</li>
<li><strong>{title}</strong></li>
<li>{talk_excerpt}</li>
<li><a href="{title_permalink='stuffweteach/moreabout'}" title="More information about {title}.">Details about this event.</a></li>
</ul>

{if no_results}
<ul>
<li>Sorry, I don't have any planned events at this time.</li>
</ul>
{/if}
{/exp:channel:entries}
</div>

<div id="twitter">
{twitter}
</div>

</div>

<!--Embeds Recent Content-->

<!--Footer Snippet-->

<div id="footer" class="group">
{fire_starters_footer}
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
<li><a href="#" title="Subscribe to the Firebrand Media RSS feed."><img src="/images/ui/social_rss.gif" /></a></li>
<li><a href="http://www.delicious.com/firebrandmedia" title="Check out our links on Del.icio.us."><img src="/images/ui/social_delicious.gif" /></a></li>
<li><a href="http://www.facebook.com/firebrandmedia" title="Firebrand Media on Facebook."><img src="/images/ui/social_facebook.gif" /></a></li>
<li><a href="http://www.linkedin.com/in/gbradhopkins" title="Check out my profile on LinkedIn."><img src="/images/ui/social_linked_in.gif" /></a></li>
<li><a href="http://www.inthepanhandle.com/local/business_directory/listing/firebrand_media_llc" title="Firebrand Media on InThePanhandle.com"><img src="/images/ui/social_itp.gif" /></a></li>
<li><a href="http://www.flickr.com/firebrandmedia" title="The Firebrand Media Flickr photostream."><img src="/images/ui/social_flickr.gif" /></a></li>
</ul>
</div>
</div>

<!--Footer Snippet-->

</div>

<!-- Nivo Slider Script -->

<!-- Nivo Slider Script End -->
</body>
</html>

<!DOCTYPE html>
<head>

<title>Learn To Use Online Marketing Tools | We Teach! | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="Firebrand Media provides instruction in the use of online marketing tools for business and individuals." />
<meta name="keywords" content="blog, internet marketing, social networking, web design, graphic design" />
<meta name="viewport" content="width=1024" />

{css_js}

</head>
<body>

{header}

<div id="content" class="group">

<div id="teach_index">

<div id="teach_about">
<h2>We Teach</h2>
<p>One of our primary goals is to educate.  An educated client is a good client and we only want good clients.</p>
</div>

<div id="teach_featured">
{exp:channel:entries  channel="talks"  orderby="date" sort="asc" limit="1" dynamic="off" show_future_entries="yes" show_expired="no"}
<h3>&#8592; Featured Upcoming Event</h3>
<h4>{title}</h4>

<p>{talk_excerpt}</p>
<p><a href='{title_permalink='stuffweteach/moreabout'}'> Continue Reading {title} &#8594;</a></p>
{/exp:channel:entries}
</div>

<div class="upcoming">
<h5>Upcoming Events</h5>
{exp:channel:entries channel="talks" limit="4" sort="asc" show_future_entries="yes" show_expired="no"}
<ul>
<li><strong>{entry_date format="%m/%d/%y"}</strong><a href="{title_permalink='stuffweteach/moreabout'}" title="Read {title}">{title}</a></li>
</ul>
{/exp:channel:entries}
</div>

<div class="archives">
<h5>Recent Events</h5>
{exp:channel:entries channel="talks" limit="4" sort="desc" show_future_entries="no" show_expired="yes"}
<ul>
<li><strong>{entry_date format="%m/%d/%y"}</strong> <a href="{title_permalink='stuffweteach/moreabout'}" title="Read {title}">{title}</a></li>
</ul>
{/exp:channel:entries}
</div>

<div class="archives">
<h5>"Attendees Say"</h5>
<ul>
{exp:channel:entries  channel="testimonials"  orderby="random" dynamic="off" limit="1" category="9" disable="member_data|pagination"}
<li>{testimonial_comment}</li>
{/exp:channel:entries}
</ul>
</div>

<div class="recommended">
<h5>Recommended Reading</h5>
<ul>
{exp:channel:entries  channel="recommended"  orderby="random" dynamic="off" limit="5" disable="member_data|pagination"}
<li>{recommended_link}</li>
{/exp:channel:entries}
</ul>
</div>

</div>
</div>

{recent_entries}
{footer}


</div>
</body>
</html>

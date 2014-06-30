<!DOCTYPE html>
<head>

{exp:channel:entries channel="talks" limit="1" show_future_entries="yes" track_views="one" show_expired="yes"}
<title>{title} | We Teach | Firebrand Media | Martinsburg, WV</title>
{exp:seo_lite}
<meta name="viewport" content="width=1024" />

{css_js}

</head>
<body>

{header}

<div id="content" class="group">

<div id="entry_date">
<ul>
<li>{entry_date format="%m"}</li>
<li>{entry_date format="%d"}</li>
<li class="last">{entry_date format="%y"}</li>
</ul>
</div>

<div id="blog_entry">
<h2>{title}</h2>

<p><strong>Synopsis:</strong> {talk_excerpt}</p>


<h4>Details / Notes</h4>
{exp:allow_eecode}
{talk_body}
{/exp:allow_eecode}

{if talk_downloads}
<h3>Downloads</h3>
<ul>
{talk_downloads}
<li class="downloads"><a href="{talk_download_file}">{talk_download_title}</a></li>
{/talk_downloads}
</ul>
{/if}

<img class="content_divider" src="/images/ui/background_h5.png" />

<div id="author_details">
<h4>About the Teacher</h4>
{if photo}
<img class="author_image" src="{photo_url}" width="{photo_image_width}" height="{photo_image_height}" alt="{author}'s photo" />
{/if}
{if avatar}
<img class="author_image" src="{avatar_url}" width="{avatar_image_width}" height="{avatar_image_height}" alt="{author}'s avatar" />
{/if}
<ul>
<li><b>Teacher:</b> {author}</li>
<li><b>Bio:</b> {bio}</li>
{if url}<li><b>URL:</b> <a href="{url}" title="Visit {author}'s website.">{url}</a></li>{/if}
</ul>
{/exp:channel:entries}
</div>

<img class="content_divider" src="/images/ui/background_h5.png" />

<div id="blog_supplemental">
<h4>Past Events, Seminars and Talks</h4>
<ul>
{exp:channel:entries  channel="talks"  orderby="date" sort="desc" limit="15" dynamic="off" show_future_entries="no" show_expired="yes"}
<li><a href="{title_permalink='stuffweteach/moreabout'}" title="More information about {title}.">{title} | {entry_date format="%m/%d/%y"}</a></li>
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

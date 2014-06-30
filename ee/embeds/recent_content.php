<div id="secondary_content_wrapper">
<div id="recent_content" class="group">

<div id="blog">
<h5>Blog</h5>
<ul>
{exp:channel:entries  channel="blog"  orderby="date" dynamic="off" limit="4" disable="member_data|pagination|category_fields|custom_fields"}
<li><i class="{categories limit="1"}{category_url_title}{/categories}"></i><a href="{title_permalink='blog/article'}" title="Read {title}">{title}</a></li>
{/exp:channel:entries}
</ul>
</div>

<div id="recent_projects">
<h5>Recent Projects</h5>
<ul>
{exp:channel:entries  channel="portfolio"  orderby="date" dynamic="off" limit="4" disable="member_data|pagination|category_fields|custom_fields"}
<li><i class="{categories limit="1" show="not 18"}{category_url_title}{/categories}"></i><a href="{title_permalink='stuffwevedone/project'}" title="{portfolio_tooltip}">{title}</a></li>
{/exp:channel:entries}
</ul>
</div>

<div id="upcoming_events">
<h5>Upcoming Events</h5>
{exp:channel:entries  channel="talks"  orderby="date" sort="asc" limit="1" dynamic="off" show_future_entries="yes" show_expired="no" disable="member_data|pagination|category_fields|categories|custom_fields"}
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
</div>

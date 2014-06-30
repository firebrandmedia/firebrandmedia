<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
{exp:channel:entries channel="portfolio" limit="1" track_views="one" disable="category_fields|member_data|pagination"}
<title>{title} | Stuff We've Done | Portfolio | Firebrand Media | Martinsburg, WV</title>
{exp:seo_lite entry_id="{entry_id}"}
<meta name="viewport" content="width=1100" />

{css_js}

</head>
<body>

{header}

<div id="entry_title">

<h2>{title} {related_entries id="portfolio_related"}
{exp:ce_img:pair src="{customer_logo}" height="40"}
<img src="{made}" alt="{title} Logo" />
{/exp:ce_img:pair}

{/related_entries}</h2>

</div>

{if portfolio_image_main}
<img class="portfolio_hero" src="{portfolio_image_main}" />
{/if}


<div id="content" class="group">
<div id="portfolio_featured">

</div>

<div id="entry">

<h3>Project Overview</h3>
{portfolio_brief}

<h3>Project Details</h3>
{portfolio_description}


{if portfolio_quotes}
<h3>Our ears are burning.</h3>
<p class="portfolio_quote">{portfolio_quotes}</p>
{/if}

<div id="entry_supplemental">

<ul>
{if logged_in}<li>{exp:edit_this:entry entry_id="{entry_id}" channel_id="{channel_id}" author_id="{author_id}"}</li>{/if}
<li><strong>Published:</strong> {entry_date format="%m/%d/%Y"}</li>
<li><strong>Viewed:</strong> {view_count_one} time(s)</li>
<li><strong>Categorized:</strong> {categories}<a href="{path='blog/category/'}">{category_name}, </a> {/categories}</li>
{if blog_short}<li><strong>Share:</strong> {blog_short}</li>{/if}
</ul>
{/exp:channel:entries}

</div>

<div id="entry_navigation_bottom">
<ul>
<li>{exp:channel:prev_entry channel="portfolio"}Prev entry <a href="{path='stuffwevedone/project'}">{title}</a>{/exp:channel:prev_entry}</li>
<li><a href="{path='stuffwevedone/index'}">Back to the Portfolio</a></li>
<li>{exp:channel:next_entry channel="portfolio"}Next entry: <a href="{path='stuffwevedone/project'}">{title}</a>{/exp:channel:next_entry}</li>
</ul>
</div>


</div>

</div>

{recent_entries}

{footer}


</div>

</body>
</html>

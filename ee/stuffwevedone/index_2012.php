<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Stuff We've Done | Web, Graphic Design and Print Portfolio | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="The Firebrand Media portfolio features work from a variety of clients, showcasing the broad range of services that we offer." />
<meta name="keywords" content="web design projects, graphic design projects, printing projects, mobile apps" />
<meta name="viewport" content="width=1100" />

{css_js}

</head>
<body>

{header}

<div id="entry_title">

<h2>Stuff We've Done</h2>

</div>

<div id="content" class="group">

<div id="project_index">

<h3>Recent Work</h3>
<div id="project_featured" class="group">

{exp:channel:entries channel="portfolio" disable="categories|category_fields|member_data|pagination"}
{if portfolio_images}
<div class="featured_image">{portfolio_images limit="1"}<a href='{title_permalink='stuffwevedone/project'}'>
{exp:imgsizer:size src="{portfolio_sample_image}" height="180" width="180"}
<img src="{sized}" height="{height}" width="{width}" alt="{title}" />
{/exp:imgsizer:size}</a>{/portfolio_images}</div><div class="featured_about"><strong>{title}</strong>{exp:trunchtml chars="130" inline="…" ending="<a href='{title_permalink='stuffwevedone/project'}'> About: {title}</a>"}{portfolio_brief}{/exp:trunchtml}</div>
{/if}
{/exp:channel:entries}

</div>

<div id="clients">
{exp:channel:entries channel="customers" orderby="random" limit="13"}
{exp:imgsizer:size src="{customer_logo}" height="60" width="60"}
<img src="{sized}" height="{height}" alt="{title} Logo" />
{/exp:imgsizer:size}
{/exp:channel:entries}
</div>

<h4>Portfolio Archives</h4>

<div id="portfolio_archives" class="group">
<div class="new_media">
<h5>Online Projects</h5>
{exp:channel:entries channel="portfolio" limit="10" sort="asc" category="17|4|6" disable="category_fields|member_data|pagination"}
<ul>
<li><i class="{categories limit="1" show="not 18"}{category_url_title}{/categories}"></i><a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">{title}</a></li>
</ul>
{/exp:channel:entries}
</div>

<div class="traditional_media">
<h5>Offline Projects</h5>
{exp:channel:entries channel="portfolio" limit="10" sort="desc" show_future_entries="no" category="3|5" disable="category_fields|member_data|pagination"}
<ul>
<li><i class="{categories limit="1" show="not 18"}{category_url_title}{/categories}"></i><a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">{title}</a></li>
</ul>
{/exp:channel:entries}
</div>

<div class="web_projects">
<h5>Quick Links: Websites we've worked on</h5>
{exp:magpie url="http://www.delicious.com/v2/rss/firebrandmedia/fmsites" limit="15"}
<ul>
{items}
<li><i class="icon-compass"></i><a href="{link}">{title}</a></li>
{/items}
</ul>
{/exp:magpie}
</div>
</div>

</div>
</div>

{recent_entries}
{footer}


</div>
</body>
</html>

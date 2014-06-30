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

{exp:channel:entries channel="portfolio" limit="1" disable="categories|category_fields|member_data|pagination"}
<div class="one"><a href="{title_permalink='stuffwevedone/project'}">{exp:ce_img:pair src="{portfolio_image_main}" width="991"}
<img src="{made}" alt="{title}" title="{portfolio_tooltip}" />
{/exp:ce_img:pair}</a></div>
{/exp:channel:entries}

{exp:channel:entries channel="portfolio" offset="1" limit="32" disable="categories|category_fields|member_data|pagination"}
<div class="three_a"><a href="{title_permalink='stuffwevedone/project'}">
{exp:ce_img:pair src="{portfolio_image_main}" width="123" height="123" crop="yes"}
<img src="{made}" alt="{title}" title="{portfolio_tooltip}" />
{/exp:ce_img:pair}</a></div>
{/exp:channel:entries}

</div>

<div id="clients">
{exp:channel:entries channel="customers" orderby="random" limit="13"}
{exp:ce_img:pair src="{customer_logo}" height="60" width="60"}
<img src="{made}" alt="" width="{width}" height="{height}" alt="{title} Logo" />
{/exp:ce_img:pair}
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
<ul>
<li><i class="icon-compass"></i><a href="http://akamediamarketing.com">akamediamarketing.com</a></li>
<li><i class="icon-compass"></i><a href="http://asmarterdivorce.com">ASmarterDivorce.com</a></li>

</ul>
</div>
</div>

</div>
</div>

{recent_entries}
{footer}


</div>
</body>
</html>

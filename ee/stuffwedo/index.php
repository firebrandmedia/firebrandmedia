<!DOCTYPE html>
<head>

<title>Stuff We Do | Web Design, Graphic Design and Printing Services | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="Firebrand Media is a web and graphic design shop in Martinsburg, WV.  We spend most of our time developing and designing for small to medium sized businesses.  We also provide print services, web hosting and email marketing services." />
<meta name="keywords" content="web design, graphic design, email marketing, web hosting, web development" />
<meta name="viewport" content="width=1024" />

{css_js}

</head>
<body>

{header}

<div id="entry_title">
{exp:channel:entries channel="misc_content" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
url_title="stuff_we_do"}

<h2>{title}</h2>

</div>

<div id="content" class="group">
<div class="caption">I wear a lot of hats.</div>
{misc_images}
{exp:ce_img:pair src="{misc_image}" width="992" height="420" crop="yes"}
<img class="welcome_image" src="{made}" />
{/exp:ce_img:pair}
{/misc_images}

{/exp:channel:entries}

<div id="services_overview">


<h3><i class="icon-compass"></i>Web Dev / Design</h3>
<div class="service_description" class="group">
	<div class="about_service">
	{exp:channel:entries channel="misc_content" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
	url_title="web_design_services"}
	{misc_body}
	{/exp:channel:entries}
	</div>

	<div class="projects_list">
	<h4>Web Projects</h4>
	<ul>
	{exp:channel:entries channel="portfolio" limit="9" sort="desc" category="4"}
	<li>{portfolio_images limit="1"}<a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">
	{exp:ce_img:pair src="{portfolio_sample_image}" width="60" height="60" crop="yes"}
	<img src="{made}" alt="{title}" />{/exp:ce_img:pair}</a>{/portfolio_images}</li>
	{/exp:channel:entries}
	</ul>
	</div>

</div>

<h3><i class="icon-map"></i>Graphic Design</h3>
<div class="service_description" class="group">
	<div class="about_service">
	{exp:channel:entries channel="misc_content" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
	url_title="graphic_design_services"}
	{misc_body}
	{/exp:channel:entries}
	</div>

	<div class="projects_list">
	<h4>Graphic Design Projects</h4>
	<ul>
	{exp:channel:entries channel="portfolio" limit="9" sort="desc" category="3"}
	<li>{portfolio_images limit="1"}<a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">{exp:ce_img:pair src="{portfolio_sample_image}" width="60" height="60" crop="yes"}
	<img src="{made}" alt="{title}" />{/exp:ce_img:pair}</a>{/portfolio_images}</li>
	{/exp:channel:entries}
	</ul>
	</div>
</div>

<h3><i class="icon-print"></i>Printing</h3>
<div class="service_description" class="group">
	<div class="about_service">
	{exp:channel:entries channel="misc_content" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
	url_title="print_services"}
	{misc_body}
	{/exp:channel:entries}
	</div>

	<div class="projects_list">
	<h4>Printing Projects</h4>
	<ul>
	{exp:channel:entries channel="portfolio" limit="9" sort="desc" category="5"}
	<li>{portfolio_images limit="1"}<a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">{exp:ce_img:pair src="{portfolio_sample_image}" width="60" height="60" crop="yes"}
	<img src="{made}" alt="{title}" />{/exp:ce_img:pair}</a>{/portfolio_images}</li>
	{/exp:channel:entries}
	</ul>
	</div>
</div>

<h3><i class="icon-lamp"></i>Other Stuff</h3>
<div class="service_description" class="group">
	<div class="about_service">
	{exp:channel:entries channel="misc_content" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
	url_title="other_services"}
	{misc_body}
	{/exp:channel:entries}
	</div>

	<div class="projects_list">
	<h4>Other Projects</h4>
	<ul>
	{exp:channel:entries channel="portfolio" limit="9" sort="desc" category="not 3|5|4|18"}
	<li>{portfolio_images limit="1"}<a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">{exp:ce_img:pair src="{portfolio_sample_image}" width="60" height="60" crop="yes"}
	<img src="{made}" alt="{title}" />{/exp:ce_img:pair}</a>{/portfolio_images}</li>
	{/exp:channel:entries}
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

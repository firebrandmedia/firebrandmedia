<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{exp:channel:category_heading}{category_name}{/exp:channel:category_heading} Projects | Stuff We've Done | Portfolio | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="The Firebrand Media Blog, Fire Starters, is a blog for small businesses to help them understand and make use of the marketing tools that are available online." />
<meta name="keywords" content="blog, internet marketing, social networking, web design, graphic design" />
<meta name="viewport" content="width=1100" />

{css_js}

</head>
<body>

{header}

<div id="content" class="group">

<div id="project_index" class="group">

<div id="project_about">
<h2>Stuff We've Done</h2>
<p>This is the work that we're most proud of.</p>
</div>

<div id="project_featured">
{exp:channel:category_heading}
<!--<h3>&#8592; Featured '{category_name}' Entry</h3>-->
{/exp:channel:category_heading}

{exp:channel:entries channel="portfolio" limit="1"}
<h4>{title}</h4>

<div id="project_images_archive">
<img src="{portfolio_image_main}" />
<p class="description">{exp:tagstripper:stripAllTags}{portfolio_brief}{/exp:tagstripper:stripAllTags} <a href='{title_permalink='stuffwevedone/project'}'> Continue Reading About {title} &#8594;</a></p>
</div>

{/exp:channel:entries}
</div>


<div id="project_archives_extended">
{exp:channel:category_heading}
<h5>{category_name} Archives</h5>
{/exp:channel:category_heading}
{exp:channel:entries channel="portfolio" sort="desc"}
<ul>
<li><a href="{title_permalink='stuffwevedone/project'}" title="Read {title}">{title}:</a> <em>{exp:tagstripper:stripAllTags}{portfolio_brief}{/exp:tagstripper:stripAllTags}</em></li>
</ul>
{/exp:channel:entries}

<div class="categories">
<h5>Category Archives</h5>
{exp:channel:categories channel="portfolio" show="not 8"}
<ul>
<li><a href="{path='blog/category'}" title="View entries in the {category_name} category.">{category_name}</a></li>
</ul>
{/exp:channel:categories}
</div>

</div>


</div>
</div>

{recent_entries}
{footer}


</div>
</body>
</html>

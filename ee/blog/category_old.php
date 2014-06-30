<!DOCTYPE html>
<head>

<title>{exp:channel:category_heading}{category_name} Archives{/exp:channel:category_heading} | Fire Starters | Blog | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="The Firebrand Media Blog, Fire Starters, is a blog for small businesses to help them understand and make use of the marketing tools that are available online." />
<meta name="keywords" content="blog, internet marketing, social networking, web design, graphic design" />
<meta name="viewport" content="width=1100" />

{css_js}

</head>
<body>

{header}

<div id="blog_content" class="group">

<div id="blog_index">

<div id="blog_about">
<h2>Fire Starters</h2>
<p>{blog_tagline}</p>
</div>

<div id="blog_featured">
{exp:channel:category_heading}
<h3>&#8592; Featured '{category_name}' Entry</h3>
{/exp:channel:category_heading}

{exp:channel:entries channel="blog" limit="1"}
<h4>{title}</h4>

<p>{blog_excerpt}</p>
<p><a href='{title_permalink='blog/article'}'> Continue Reading {title} &#8594;</a></p>
{/exp:channel:entries}
</div>

<div class="archives_extended">
{exp:channel:category_heading}
<h5>{category_name} Archives</h5>
{/exp:channel:category_heading}
{exp:channel:entries channel="blog" sort="desc"}
<ul>
<li><a href="{title_permalink='blog/article'}" title="Read {title}">{title}:</a> <em>{blog_excerpt}</em></li>
</ul>
{/exp:channel:entries}
</div>

<div class="categories">
<h5>Category Archives</h5>
{exp:channel:categories channel="blog" show="not 8"}
<ul>
<li><a href="{path='blog/category'}" title="View entries in the {category_name} category.">{category_name}</a></li>
</ul>
{/exp:channel:categories}
</div>

</div>
</div>

{embed="embeds/recent_content"}
{footer}


</div>
</body>
</html>

<!DOCTYPE html>
<head>

<title>Fire Starters | Blog | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="The Firebrand Media Blog, Fire Starters, is a blog for small businesses to help them understand and make use of the marketing tools that are available online." />
<meta name="keywords" content="blog, internet marketing, social networking, web design, graphic design" />
<meta name="viewport" content="width=1100" />

{css_js}

</head>
<body>

{header}

<div id="entry_title">
<h2><i class="icon-fire"></i>We Write: Fire Starters</h2>
</div>

<div id="content" class="group">

<div id="blog_index" class="group">

{exp:channel:entries channel="blog" limit="1" disable="categories|category_fields|member_data|pagination"}
<h3><a href='{title_permalink='blog/article'}'>{title}</a></h3>
<div id="blog_featured">
{exp:trunchtml chars="800" inline="..." ending=""}
<p>{exp:tagstripper:stripAllTags}
{blog_excerpt}
{/exp:tagstripper:stripAllTags}</p>
{/exp:trunchtml}
<a href='{title_permalink='blog/article'}'> Read {title} &#8594;</a>

</div>

<div id="blog_featured_image_graphic">
{if blog_image}
{blog_image}
{exp:ce_img:pair src="{blog_featured_image}" width="450" height="300"}
<img src="{made}" />
{/exp:ce_img:pair}
{/blog_image}
{/if}
</div>

{/exp:channel:entries}

<div id="blog_archives" class="group">

<div class="archives">
<h5>Recent Entries</h5>
<ul>
{exp:channel:entries channel="blog" limit="6" offset="1" sort="desc" disable="category_fields|member_data|pagination"}
<li><i class="{categories limit="1"}{category_url_title}{/categories}"></i><a href="{title_permalink='blog/article'}" title="Read {title}">{title}</a></li>
{/exp:channel:entries}
</ul>
</div>

<div class="popular">
<h5>Most Popular Entries</h5>
<ul>
{exp:channel:entries channel="blog" limit="6" dynamic="no" orderby="view_count_one" disable="category_fields|member_data|pagination"}
<li><i class="{categories limit="1"}{category_url_title}{/categories}"></i><a href="{title_permalink='blog/article'}" title="Read {title}">{title}</a> <em>{view_count_one} views</em></li>
{/exp:channel:entries}
</ul>
</div>


<div class="categories">
<h5>Categories</h5>
<ul>
{exp:channel:categories channel="blog" show="not 8"}
<li><i class="{category_url_title}"></i><a href="{path='blog/category'}" title="View entries in the {category_name} category.">{category_name}</a></li>
{/exp:channel:categories}
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

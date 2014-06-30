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

<div id="entry_title">
{exp:channel:category_heading}
<h2><i class="{category_url_title}"></i>Writing about: {category_name}</h2>
{/exp:channel:category_heading}

</div>

<div id="content" class="group">

<div id="blog_index" class="group">

{exp:channel:entries channel="blog" limit="1" disable="categories|category_fields|member_data|pagination"}
<h3><a href='{title_permalink='blog/article'}'>{title}</a></h3>
<div id="blog_featured">

{exp:trunchtml chars="800" inline="..."}
<p>{exp:tagstripper:stripAllTags}
{blog_excerpt}
{/exp:tagstripper:stripAllTags}</p>
{/exp:trunchtml}<a href='{title_permalink='blog/article'}'> Read {title}</a>

</div>

<div id="blog_featured_image_graphic">
{if blog_image}
{blog_image}
{exp:ce_img:pair src="{blog_featured_image}" width="450" height="300"}
<img src="{made}" />
{/exp:ce_img:pair}{/blog_image}
{/if}
</div>

{/exp:channel:entries}

<div id="blog_archives" class="group">

<div class="archives">
<h5>Recent Entries</h5>
{exp:channel:entries channel="blog" limit="8" offset="1" sort="desc" paginate="bottom" disable="category_fields|member_data"}
<ul>
<li><i class="{categories limit="1"}{category_url_title}{/categories}"></i><a href="{title_permalink='blog/article'}" title="Read {title}">{title}</a></li>
</ul>

{paginate}
        <p>More Entries: Page {current_page} of {total_pages} pages {pagination_links}</p>
{/paginate}

{/exp:channel:entries}

</div>

<div class="popular">
<h5>Most Popular Entries</h5>
{exp:channel:entries channel="blog" limit="6" orderby="view_count_one" disable="category_fields|member_data|pagination"}
<ul>
<li><i class="{categories limit="1"}{category_url_title}{/categories}"></i><a href="{title_permalink='blog/article'}" title="Read {title}">{title}</a> <em>{view_count_one} views</em></li>
</ul>
{/exp:channel:entries}
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

<div class="flickr">{exp:eehive_flickr:photostream size="square" limit="13"}<a href="{flickr_url}"><img src="{flickr_img}" title="{flickr_title}" alt="{flickr_title}"/></a>{/exp:eehive_flickr:photostream}
</div>

<!--<div class="sign_up_small">
{fire_starters_sign_up}
</div>-->

</div>
</div>

{recent_entries}
{footer}


</div>
</body>
</html>

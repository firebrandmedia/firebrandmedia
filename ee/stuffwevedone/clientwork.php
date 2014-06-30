<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{exp:channel:entries  channel="customers"}{title} | Client Work | Stuff We've Done | Web, Graphic Design and Print Portfolio | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="Firebrand Media has worked with businesses and organizations of all shapes and sizes on projects ranging from one off business card orders to complex web and print projects." />
<meta name="keywords" content="blog, internet marketing, social networking, web design, graphic design" />
<meta name="viewport" content="width=1100" />

{css_js}

</head>
<body>

{header}

<div id="content" class="group">

<div id="project_index">

<div id="project_about">
<h2>Client Work</h2>
<p>A look at the type of work we do for clients.</p>
</div>

<div id="project_featured">
<h3>{customer_type}</h3>
<h4>{if customer_logo_sm}{exp:imgsizer:size src="{customer_logo_sm}" width="30" height="30" alt="{title} logo" class="logo_small"}{/if}{title}</h4>
{reverse_related_entries channel="testimonials" limit="1"}
<p class="description">{exp:tagstripper:stripAllTags}{testimonial_comment}{/exp:tagstripper:stripAllTags}</p>
{/reverse_related_entries}
</div>

<div class="projects">
<h5>{title} Projects</h5>
{reverse_related_entries channel="portfolio"}
<ul>
<li class="{categories limit="1"}{category_url_title}{/categories}"><a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">{title}</a></li>
</ul>
{/reverse_related_entries}
</div>

<div id="clients_random_project_image_gallery">
<h5>Random {title} Project Images</h5>
{reverse_related_entries channel="portfolio" limit="9"}
<ul>
{portfolio_images sort="random"}
<li><a href="{title_permalink='stuffwevedone/project'}" title="Read about the {title} project">{exp:imgsizer:size src="{portfolio_sample_image}" width="90" height="90" alt="Sample images from the {title} project"}</a></li>
{/portfolio_images}
</ul>
{if no_reverse_related_entries}
<p>No images for this customer yet.</p>
{/if}
</div>
{/reverse_related_entries}
{/exp:channel:entries}

</div>
</div>

{recent_entries}
{footer}


</div>
</body>
</html>

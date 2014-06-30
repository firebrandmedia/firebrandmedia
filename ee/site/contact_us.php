<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>I'd love to hear from you! | Contact Us | Firebrand Media | Martinsburg, WV</title>
<meta name="description" content="Firebrand Media is a small design firm based in Martinsburg, WV. Our primary focus is web development and social media but we also spend a lot of time doing graphic design, marketing and printing. " />
<meta name="keywords" content="web design, web hosting, graphic design, marketing, printing, about" />
<meta name="viewport" content="width=1100" />

{css_js}

</head>
<body>

{header}

<div id="entry_title">
{exp:channel:entries channel="misc_content" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
url_title="contact_us"}

<h2>{title}</h2>

</div>

<div id="content" class="group">
{misc_images}
{exp:ce_img:pair src="{misc_image}" width="992" height="420" crop="yes"}
<img  class="welcome_image" src="{made}" />
{/exp:ce_img:pair}
{/misc_images}

<div id="entry">
{misc_body}
{/exp:channel:entries}

</div>
</div>

{recent_entries}

{footer}


</div>
</body>
</html>

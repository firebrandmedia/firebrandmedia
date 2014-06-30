{if logged_in && member_group == "1"}
    <div style="position: absolute; top: 0; left: 0; position: fixed; background-color: #000; color: #fff; font-size: 9px; padding: 5px;">
        {elapsed_time} seconds / {total_queries} queries
    </div>
{/if}
<div id="header_wrapper" class="group">
<div id="header">

<div id="logo" class="group"><h1><a href="{site_url}" title="Back to the Firebrand Media homepage"><img src="/images/ui/firebrand_media_logo.png" alt="Firebrand Media | Web Development, Printing, Graphic Design, Online Marketing | Martinsburg, WV"/></a></h1>
</div>

<div id="navigation">
<ul>
<li><a href="{path='stuffwedo/index'}" title="This is what I can do to help your business.">we do</a></li>
<li><a href="{path='stuffwevedone/index'}" title="Past projects that I'm especially proud of.">we've done</a></li>
<!--<li><a href="{path='stuffweteach/index'}" title="I love helping others understand how to use the internet.">we teach</a></li>-->
<li><a href="{path='blog/index'}" title="Fire Starters - Firebrand Media Blog">we write</a></li>
<li><a href="{path='site/contact_us'}" title="Contact Firebrand Media">contact fm</a></li>
<li class="last"><a href="{path='site/about_firebrand_media'}" title="About Firebrand Media">about fm</a></li>
</ul>
</div>


</div>
</div>
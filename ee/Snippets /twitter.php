<h5>Tweet</h5>
<div class="ce_tweet_holder group">
    {exp:ce_tweet:user_timeline screen_name="firebrandmedia" count="1"}
    <div class="ce_tweet">
        <div class="ce_tweet_left">
            <a class="ce_tweet_username" href="http://twitter.com/{user_screen_name}" target="_blank"><img src="{user_profile_image_url}" alt="" /></a>
        </div><!-- .ce_tweet_left -->
        <div class="ce_tweet_right">
            <div class="ce_tweet_row">
                <!--<a class="ce_tweet_username" href="http://twitter.com/{user_screen_name}" target="_blank">{user_name}</a>-->
                <a class="ce_tweet_name" href="http://twitter.com/{user_screen_name}" target="_blank">@{user_screen_name}</a>
            </div><!-- .ce_tweet_row -->
            <div class="ce_tweet_row ce_tweet_text">{text}</div>
            <div class="ce_tweet_row ce_tweet_actions">
                <a class="ce_tweet_time" href="https://twitter.com/{user_screen_name}/statuses/{id_str}" title="{created_at format="%g:%i %A, %M %j%S (%T)"}" target="_blank"><span class="icon-twitter"></span> {created_at_relative}</a>
                <a class="ce_tweet_reply" href="https://twitter.com/intent/tweet?in_reply_to={id_str}" target="_blank"><span>Reply</span></a>
                <a class="ce_tweet_retweet{if retweeted} ce_tweet_retweeted{/if}" href="https://twitter.com/intent/retweet?tweet_id={id_str}" target="_blank"><span>Retweet</span></a>
                <a class="ce_tweet_favorite{if favorited} ce_tweet_favorited{/if}" href="https://twitter.com/intent/favorite?tweet_id={id_str}" target="_blank"><span>Favorite</span></a>
            </div><!-- .ce_tweet_row -->
        </div><!-- .ce_tweet_right -->
    </div><!-- .ce_tweet -->
    {/exp:ce_tweet:user_timeline}
</div><!-- .ce_tweet_holder -->
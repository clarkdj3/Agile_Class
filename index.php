<?php
$title = "Home";
include "includes/header.php";

?>

<div class="title_image">
        <img class="headerimagestyle" src="http://s-media-cache-ak0.pinimg.com/originals/cc/de/95/ccde95f5bec2cb5fba040d738cb407c1.jpg" width="700" height="400"
             align="middle" alt="Index_image"/>

        <h1 class="site_title">Destiny LiveStream <br/> and Forum</h1>
</div>
<?php



$forum_table = <<<FORUM_TABLE
 <h2>Forum Main Categories</h2>
    <table>
        <tr><td></td><td><h4><a href="introductions.php">Introduce Yourself</a></h4>New to the community? Introduce yourself!</td><td>$introduce_posts topics<br/>$introduce_replies replies</td><td></td></tr>
        <tr><td></td><td><h4><a href="general.php">General Discussion</a></h4>Anything goes!</td><td>$general_posts topics<br/>$general_replies replies</td><td></td></tr>
        <tr><td></td><td><h4><a href="feed_discussion.php">Feed Discussion</a></h4>Discussion related to any particular livestream in the site's history.</td><td>$livestream_posts topics<br/>$livestream_replies replies</td><td></td></tr>
        <tr><td></td><td><h4><a href="game_tips.php">Game Tips</a></h4>Discuss tips and strategies for Destiny.</td><td>$game_tips_posts topics<br/>$game_tips_replies replies</td><td></td></tr>

    </table>

FORUM_TABLE;

echo $forum_table;

?>
<?php
include "includes/footer.php";
?>
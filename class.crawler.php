<?php

namespace techberry\core;

require("/home/content/99/11499199/html/class.authentication.php");
require("/home/content/99/11499199/html/lib/sql-highlighter.php");

use techberry\core\authentication as auth;

class crawler extends auth
{
    public $feedURL;
    public $type;
    public $username;
    public $user_id;
    
    public $posts;
    public $count;
    public $currentLinks;
    private $sql;
    private $syntax;
    
    function __construct()
    {
        parent::__construct();
		$this->syntax = new \highlightSQL;
    }
    
    public function url($url)
    {
        $this->feedURL = $url;
        return $this;
    }
    
    public function type($type)
    {
        $this->type = $type;
        return $this;
    }
    
    public function username($username)
    {
		$this->username = $username;
        if ($stmt = $this->mysqli->prepare("SELECT id FROM users WHERE username = ? LIMIT 1"))
        {
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($user_id);
            $stmt->fetch();
            $this->user_id = $user_id;
            $stmt->close();
            if ($user_id != 0)
            {
                return $this;
            }
            else
            {
                die('Unable to parse username');
            }
        }
        else
        {
            echo '<br>Invalid parameter for username';
            return false;
        }
    }
    
    public function start()
    {
        $feed_url            = ($this->feedURL);
        $content            = file_get_contents($feed_url);
        $x                  	= new \SimpleXmlElement($content);
        $this->sql          	= 'REPLACE INTO user_wallPosts (user,from_user,post,reference) ';
        $this->posts       = array();
        /*
        Check for duplicate links in current array
        - Or the entire sql query won't execute
        */
        $this->currentLinks = array();
        switch ($this->type)
        {
            case 'youtube':
                $this->youtube_render($x);
                break;
            case 'reddit':
                $this->reddit_render($x);
                break;
            case '4chan':
                $this->fourChan_render($x);
                break;
            case '9gag':
                $this->nineGag_render($x);
                break;
            default:
                echo '<br>Invalid paramater for type';
        }
    }
    
    private function executeQuery()
    {
        //$this->sql .= " ON DUPLICATE KEY UPDATE reference=reference;";
        if ($stmt = $this->mysqli->prepare($this->sql))
        {
            $stmt->execute();
            $stmt->close();
            echo "<br>Successfully updated $this->username user - ( $this->count ) elements";
        }
        else
        {
            printf("Error: %s\n", $this->mysqli->error);
            echo "<br>Unsuccessfully updated $this->username user - ( $this->count ) elements";
			echo "<br><pre>".$this->syntax->highlight($this->sql)."</pre>";
        }
    }
    /*
    Rendering functions
    */
    private function youtube_render($x)
    {
		# EXAMPLE #
		/*
		<channel>
		..
			<item>
				<guid isPermaLink="false">tag:youtube.com,2008:video:JNeeXPddBmA</guid>
				<pubDate>Mon, 08 Sep 2014 04:40:56 +0000</pubDate>
				<atom:updated>2014-11-28T22:20:16.000Z</atom:updated>
				<category domain="http://schemas.google.com/g/2005#kind">http://gdata.youtube.com/schemas/2007#video</category>
				<title>Welcome to the School of YouTube: #LaughLearnGive</title>
				<description>
					&lt;div style="color: #000000;font-family: Arial, Helvetica, sans-serif;     font-size:12px; font-size: 12px; width: 555px;"&gt;
					&lt;table cellspacing="0" cellpadding="0" border="0"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td width="140" valign="top" rowspan="2"&gt;&lt;div style="border: 1px solid #999999; margin: 0px 10px 5px 0px;"&gt;&lt;a href="http://www.youtube.com/watch?v=JNeeXPddBmA&amp;amp;feature=youtube_gdata"&gt;&lt;img alt="" src="http://i.ytimg.com/vi/JNeeXPddBmA/default.jpg"&gt;&lt;/a&gt;&lt;/div&gt;&lt;/td&gt;
					&lt;td width="256" valign="top"&gt;&lt;div style="font-size: 12px; font-weight: bold;"&gt;&lt;a style="font-size: 15px; font-weight: bold;                  font-decoration: none;" href="http://www.youtube.com/watch?v=JNeeXPddBmA&amp;amp;feature=youtube_gdata"&gt;Welcome to the School of YouTube: #LaughLearnGive&lt;/a&gt;
					&lt;br&gt;&lt;/div&gt;
					&lt;div style="font-size: 12px; margin: 3px 0px;"&gt;&lt;span&gt;To donate to Comic Relief, click here: http://comicrelief.com/SOYT If you&amp;#39;re in the U.K., text SOYT to 70005. Texts cost &amp;pound;5 plus your standard network messag...&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;
					&lt;td style="font-size: 11px; line-height: 1.4em; padding-left: 20px;             padding-top: 1px;" width="146" valign="top"&gt;&lt;div&gt;&lt;span style="color: #666666; font-size: 11px;"&gt;From:&lt;/span&gt;
					&lt;a href="http://www.youtube.com/channel/UCBR8-60-B28hp2BmDPdntcQ"&gt;YouTube Spotlight&lt;/a&gt;&lt;/div&gt;
					&lt;div&gt;&lt;span style="color: #666666; font-size: 11px;"&gt;Views:&lt;/span&gt;
					2142620&lt;/div&gt;
					&lt;div style="white-space: nowrap;text-align: left"&gt;&lt;img style="border: 0px none; margin: 0px; padding: 0px;                    vertical-align: middle; font-size: 11px;" align="top" alt="" src="http://gdata.youtube.com/static/images/icn_star_full_11x11.gif"&gt; &lt;img style="border: 0px none; margin: 0px; padding: 0px;                    vertical-align: middle; font-size: 11px;" align="top" alt="" src="http://gdata.youtube.com/static/images/icn_star_full_11x11.gif"&gt; &lt;img style="border: 0px none; margin: 0px; padding: 0px;                    vertical-align: middle; font-size: 11px;" align="top" alt="" src="http://gdata.youtube.com/static/images/icn_star_full_11x11.gif"&gt; &lt;img style="border: 0px none; margin: 0px; padding: 0px;                    vertical-align: middle; font-size: 11px;" align="top" alt="" src="http://gdata.youtube.com/static/images/icn_star_full_11x11.gif"&gt; &lt;img style="border: 0px none; margin: 0px; padding: 0px;                    vertical-align: middle; font-size: 11px;" align="top" alt="" src="http://gdata.youtube.com/static/images/icn_star_half_11x11.gif"&gt;&lt;/div&gt;
					&lt;div style="font-size: 11px;"&gt;20784
					&lt;span style="color: #666666; font-size: 11px;"&gt;ratings&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;
					&lt;tr&gt;&lt;td&gt;&lt;span style="color: #666666; font-size: 11px;"&gt;Time:&lt;/span&gt;
					&lt;span style="color: #000000; font-size: 11px; font-weight: bold;"&gt;02:26&lt;/span&gt;&lt;/td&gt;
					&lt;td style="font-size: 11px; padding-left: 20px;"&gt;&lt;span style="color: #666666; font-size: 11px;"&gt;More in&lt;/span&gt;
					&lt;a href="http://www.youtube.com/videos?c=24"&gt;Entertainment&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;
				</description>
				<link>http://www.youtube.com/watch?v=JNeeXPddBmA&amp;feature=youtube_gdata</link>
				<author>YouTube Spotlight</author>
			</item>
		..
		</channel>
		*/
        $i = 0;
        foreach ($x->channel->item as $entry)
        {
            if ($i == 20)
            {
                // Only add 20 items per crawl
                break;
            }
            if (in_array($entry->id, $this->currentLinks))
            {
                continue;
            }
            $this->posts[]              = array(
                'title' => $entry->title,
                'link' => $entry->link
            );
            $this->currentLinks[] = $entry->id; // Held as ids
            $i++;
        }
        $i          	   = 0;
        $this->count = count($this->posts);
        foreach ($this->posts as $post)
        {
            $title   = htmlentities($post['title']);
            $link  = $post['link'];
            if ($i == 0)
            {
                // First post
                $this->sql .= 'VALUES (
									' . $this->user_id . ',
									' . $this->user_id . ',
									"' . $this->mysqli->real_escape_string($this->youtube_template($title, $link)) . '",
									"' . $link . '"
									)';
            }
            else
            {
                $this->sql .= ', (
								' . $this->user_id . ',
								' . $this->user_id . ',
								"' . $this->mysqli->real_escape_string($this->youtube_template($title, $link)) . '",
								"' . $link . '"
								)';
            }
            $i++;
        }
        $this->executeQuery();
    }
    
    public function reddit_render($x)
    {
		# EXAMPLE #
		/*
		<channel>
		...
			<item>
				<title>Never saw anything like this</title>
				<category>pics</category>
				<link>
				http://www.reddit.com/r/pics/comments/2nq5tv/never_saw_anything_like_this/
				</link>
				<guid isPermaLink="true">
				http://www.reddit.com/r/pics/comments/2nq5tv/never_saw_anything_like_this/
				</guid>
				<pubDate>Sat, 29 Nov 2014 03:25:49 +0000</pubDate>
				<description>
					<table> <tr><td> <a href="http://www.reddit.com/r/pics/comments/2nq5tv/never_saw_anything_like_this/"><img src="http://b.thumbs.redditmedia.com/in3rPZRAWrLMYmLjcy5aedNjdUzYFroMAcU6mDQaXlU.jpg" alt="Never saw anything like this" title="Never saw anything like this" /></a> </td><td> submitted by <a href="http://www.reddit.com/user/licnep1"> licnep1 </a> to <a href="http://www.reddit.com/r/pics/"> pics</a> <br/> <a href="http://imgur.com/ZaazAxU">[link]</a> <a href="http://www.reddit.com/r/pics/comments/2nq5tv/never_saw_anything_like_this/">[319 comments]</a> </td></tr></table>
				</description>
				<media:title>Never saw anything like this</media:title>
				<media:thumbnail url="http://b.thumbs.redditmedia.com/in3rPZRAWrLMYmLjcy5aedNjdUzYFroMAcU6mDQaXlU.jpg"/>
			</item>
		...
		</channel>
		*/
        $i = 0;
        foreach ($x->channel->item as $entry)
        {
            if ($i == 20)
            {
                // Only add 20 items per crawl
                break;
            }
            $hlp = $entry->xpath('media:thumbnail[1]');
            if (in_array($entry->link, $this->currentLinks))
            {
                continue;
            }
            $this->posts[]        = array(
                'link' => $entry->link,
                'title' => $entry->title,
                'image' => $hlp[0]['url']
            );
            $this->currentLinks[] = $entry->link;
            $i++;
        }
        
        $i           = 0;
        $this->count = count($this->posts);
        foreach ($this->posts as $post)
        {
            $link  = $post['link'];
            $title = htmlentities($post['title']);
            $image = $post['image'];
            if ($i == 0)
            {
                // First post
                $this->sql .= 'VALUES (
									' . $this->user_id . ',
									' . $this->user_id . ',
									"' . $this->mysqli->real_escape_string($this->reddit_template($image, $title, $link)) . '",
									"' . $this->mysqli->real_escape_string($link) . '"
									)';
            }
            else
            {
                $this->sql .= ', (
								' . $this->user_id . ',
								' . $this->user_id . ',
								"' . $this->mysqli->real_escape_string($this->reddit_template($image, $title, $link)) . '",
								"' . $this->mysqli->real_escape_string($link) . '"
								)';
            }
            $i++;
        }
        $this->executeQuery();
    }
    
    public function fourChan_render($x)
    {
		# EXAMPLE #
		/*
		<channel>
		..
			<item>
			<title>
			The Big Problem With How We Report on Sexual Assault Online
			</title>
			<link>
			http://newsfeed.time.com/2013/10/25/the-big-problem-with-how-we-report-on-sexual-assault-online/
			</link>
			<comments>
			http://newsfeed.time.com/2013/10/25/the-big-problem-with-how-we-report-on-sexual-assault-online/#comments
			</comments>
			<pubDate>Fri, 25 Oct 2013 09:45:57 +0000</pubDate>
			<dc:creator>
			<![CDATA[ Laura Stampler ]]>
			</dc:creator>
			... Category stuff ..
			<guid isPermaLink="false">http://newsfeed.time.com/?p=230467</guid>
			<description>
			<![CDATA[
			In 1964, 28-year-old Kitty Genovese was raped and stabbed to death in her home in Kew Gardens, New York while 38 neighbors reportedly ignored the sounds of her screams. Though details of the infamous event have long been questioned, it still sparked a nationwide debate over what is now known as &#8220;the bystander effect,&#8221; a psychological term used for when spectators tend towards inaction rather than intervention when others are around. This phenomenon, which was once interpreted as urban apathy, has morphed into a more active form of voyeurism with the advent of the Internet: instead of watching crimes unfold from the sidelines, people prefer to make use of the sharing devices in their pockets, opting for social media over mediation. An example of this can be found as recently as last Sunday, when footage of a man having sex with an unconscious woman lying facedown in a Chicago park was posted on the six-second video sharing app Vine. &#8220;Bruh she really just laying there lifeless,&#8221; someone tweeted along with an image taken from the video. The week before, people celebrating Ohio University&#8217;s homecoming weekend shared photos and videos online of a man publicly performing oral sex on an apparently drunk woman. The incident is now being investigated as a sexual assault. And of course there&#8217;s Steubenville, Ohio, where high school students infamously tweeted and Instagrammed images of an unconscious 16-year-old girl before and during her sexual assault. Two high school football players were found guilty of rape. With the proliferation of these images, the Internet allows bystanders who record criminal acts to reach millions through social media.  In recent weeks, some members of the mainstream news media have joined the disturbing trend themselves. On Oct. 16, BuzzFeed ran a story titled &#8220;Alleged Sexual Assault That Happened On A Sidewalk During Ohio University’s Homecoming Was Live-Tweeted&#8221; that showed the images of the alleged assault. Even though faces and genitalia were blurred out, the act, acknowledged to be potentially nonconsensual, is still largely visible. Of course, BuzzFeed wasn’t alone. A day later, the Daily Mail ran the image, as did the New York Daily News the day<img alt="" border="0" src="http://pixel.wp.com/b.gif?host=newsfeed.time.com&#038;blog=12783068&#038;post=230467&#038;subd=timenewsfeed&#038;ref=&#038;feed=1" width="1" height="1" />
			]]>
			</description>
			<wfw:commentRss>
			http://newsfeed.time.com/2013/10/25/the-big-problem-with-how-we-report-on-sexual-assault-online/feed/
			</wfw:commentRss>
			<slash:comments>0</slash:comments>
			<primary_category>Technology</primary_category>
			<primary_category_link>http://newsfeed.time.com/category/technology/</primary_category_link>
			<featured_image>
			http://timenewsfeed.files.wordpress.com/2013/10/200171617-001.jpg?w=150
			</featured_image>
			<post_thumbnail>
			<img src="http://timenewsfeed.files.wordpress.com/2013/10/200171617-001.jpg?w=360&h=240&crop=1" class="full-width" alt="Young woman using laptop"/>
			</post_thumbnail>
			<media:thumbnail url="http://timenewsfeed.files.wordpress.com/2013/10/200171617-001.jpg?w=150"/>
			<media:content url="http://timenewsfeed.files.wordpress.com/2013/10/200171617-001.jpg?w=150" medium="image">
			<media:title type="html">Young woman using laptop</media:title>
			</media:content>
			<media:content url="http://2.gravatar.com/avatar/bb9ab21e2bbc6e6ad2e77a28a03dcdbc?s=96&d=http%3A%2F%2Fs0.wp.com%2Fi%2Fmu.gif&r=G" medium="image">
			<media:title type="html">laurastampler</media:title>
			</media:content>
			</item>
		..
		</channel>
		*/
        $i = 0;
        foreach ($x->channel->item as $entry)
        {
            if ($i == 20)
            {
                // Only add 20 items per crawl
                break;
            }
            if (in_array($entry->link, $this->currentLinks))
            {
                continue; // Ignore this element as it's already in array
            }
            $this->posts[]        = array(
                'link' => $entry->link,
                'title' => $entry->title,
                'description' => $entry->description
            );
            $this->currentLinks[] = $entry->link;
            $i++;
        }
        // No need to double check duplicates as `reference`
        // is a unique collumn
        
        $i           = 0;
        $this->count = count($this->posts);
        foreach ($this->posts as $post)
        {
            $link        = html_entity_decode($post['link']);
            $title       = addslashes(htmlentities($post['title']));
            $description = html_entity_decode($post['description']);
            if ($i == 0)
            {
                // First post
                $this->sql .= 'VALUES (
									' . $this->user_id . ',
									' . $this->user_id . ',
									"' . $this->mysqli->real_escape_string($this->fourChan_template($link, $title, $description)) . '",
									"' . $this->mysqli->real_escape_string($link) . '"
									)';
            }
            else
            {
                $this->sql .= ', (
								' . $this->user_id . ',
								' . $this->user_id . ',
								"' . $this->mysqli->real_escape_string($this->fourChan_template($link, $title, $description)) . '",
								"' . $this->mysqli->real_escape_string($link) . '"
								)';
            }
            $i++;
        }
        $this->executeQuery();
    }
    
    public function nineGag_render($x)
    {
		# EXAMPLE #
		/*
		<channel>
		..
		<item>
			<guid isPermaLink="false">http://9gag.com/gag/aW0oEzA</guid>
			<title>Restoring the internet south park style</title>
			<author>contact@9gag-rss.com</author>
			<description type="html">&lt;a href='http://9gag.com/gag/aW0oEzA'&gt;&lt;img src='http://img-9gag-ftw.9cache.com/photo/aW0oEzA_460sa.gif' /&gt;&lt;/a&gt;</description>
			<link>http://9gag.com/gag/aW0oEzA</link>
			<a10:updated>2014-11-29T13:30:01.93854+01:00</a10:updated>
		</item>
		..
		</channel>
		*/
		//die(var_dump($x));
        $i = 0;
        foreach ($x->channel->item as $entry)
        {
            if ($i == 20)
            {
                // Only add 20 items per crawl
                break;
            }
            if (in_array($entry->link, $this->currentLinks))
            {
                continue; // Ignore this element as it's already in array
            }
            $this->posts[]        = array(
                'link' => $entry->link,
                'title' => $entry->title,
                'description' => $entry->description
            );
            $this->currentLinks[] = $entry->link;
            $i++;
        }
        // No need to double check duplicates as `reference`
        // is a unique collumn
        
        $i           = 0;
        $this->count = count($this->posts);
        foreach ($this->posts as $post)
        {
            $description = html_entity_decode($post['description']);
            $link        = addslashes(htmlentities($post['link']));
            $title       = html_entity_decode($post['title']);
            if ($i == 0)
            {
                // First post
                $this->sql .= 'VALUES (
									' . $this->user_id . ',
									' . $this->user_id . ',
									"' . $this->mysqli->real_escape_string($this->nineGag_template($title, $link, $description)) . '",
									"' . $this->mysqli->real_escape_string($link) . '"
									)';
            }
            else
            {
                $this->sql .= ', (
								' . $this->user_id . ',
								' . $this->user_id . ',
								"' . $this->mysqli->real_escape_string($this->nineGag_template($title, $link, $description)) . '",
								"' . $this->mysqli->real_escape_string($link) . '"
								)';
            }
            $i++;
        }
        $this->executeQuery();
    }
    /*
    Template functions
    */
    public function youtube_template($title, $link)
    {
		$link = str_replace("watch?v=","embed/",$link);
		$link = str_replace("&feature=youtube_gdata","",$link);	
		$link = str_replace("https:","",$link);	
		//https://www.youtube.com/watch?v=JNeeXPddBmA&feature=youtube_gdata -> //www.youtube.com/embed/JNeeXPddBmA
        return "<div class='pr_youtube_wrapper'><h3 class=''pr_youtube_title'>" . $title . "</h3><iframe width='560' height='315' src='" . $link . "' frameborder='0' allowfullscreen></iframe></div>";
    }
    public function reddit_template($image, $title, $link)
    {
        return "<div class=''pr_reddit_wrapper'><img src='" . $image . "'/><p class=''pr_reddit_title'><a href='" . $link . "'>" . $title . "</a></p></div>";
    }
    public function fourChan_template($link, $title, $description)
    {
        return "<div class=''pr_fourchan_wrapper'><h3 class=''pr_fourchan_title'><a href='" . $link . "'>" . $title . "</a></h3><p class=''pr_fourchan_description'>" . $description . "</p></div>";
    }
    public function nineGag_template($title, $link, $description)
    {
        return "<div class=''pr_ninegag_wrapper'><h3 class=''pr_ninegag_title'><a class=''pr_ninegag_link' href='" . $link . "'>" . $title . "</a></h3>" . $description . "</div>";
    }
}
?>
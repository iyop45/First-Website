{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
		<div id="{#prefixFollowersActivity#}main_content">
			{if $emptyActivity}
				<div style="text-align:center;
								margin:20px 0;
								font-family: arial">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAACNwAAAjcB9wZEwgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASQSURBVFiFxdd7rNdzGAfw1ydFN4zIREjmD6ZZK/fEErZGcok2t7nOppHNnVYk9+byBzqROzNzidzGInLL0NwWCROG3JtyOT7+eJ7yczrnOCcz3+237/fz+Tyf53k/9+dXaq3+z6frf8G0lDIKwzEAm2EJbqi1zlmNuNa6xj/sh5kY1GL/N7yFZ/AYFuJXDFuNx78QfnwKasZSDG44qzgT5+Jq7I73cHdLPl3W0MSTMQOPYhCW4ZlSytAGsgH4HT9iHD7DqJa8OgWglNK1lDITE9GEQ2ut72BPYYWnSym7JvkT6Jn7f2Ax1iuldF8jAKWUdTEbx2JKrfWkWmtzKaVnajkcn+Mp/IL+WIS+eBX7JKvOAyilbIq5yWR8rfXC3B+C91PwFgniI5QG4QXDcAuW11q//xvzDgTbdvgktRrbsD8OP2NOnn+NbbAhXsMKjMbJKXwhPuhUFmAHfJcmHpF7XTBVRPq0XG+GT1PrjbE+XhJZcgQOxpd4tsMAsElqtirFsC5mYTmOToD98mwQfsArIvh6p9uacaLImAc7BEAEysup+ZDc2xpvp7+nN9BOw075PTK1noW10AvPprV+xrSOArgntdwr13vjG3/l8jBMyLPemI/9c31cCmzKAOwpKmLFg+jSLgBMSi0OzPVRuZ6HobhE5P0oXJsx0Bcv4Ii8c14KvEP0mx4iPStuawTRUvi49NlRuT5NFJH5yeh47IibcCDGitrQNzV9AKfk3asatF4n3fpE7t24GgDskmYfn+sJSfwytsfl6dcLMAT34RjsgQXplrVwLy5Ny1yXPJ7KeOjR4I6RqwBgS5EmE3O9c5r9EZENV4iIvwbdcL0IuCdxhqj7C3AW1sZDCaQ7xohMmpegeuFxHNMI4GYNEZoC7xX5PiwFXJ/mv1nkeRPOx4tJt14CfgSbpmvmYSP0w4fo1tEsuAX98/syHCLy/NZ01WxslRZ5HB8koG6Ygo/TNTNFcdoXS1uV1QaA28VA0acBxARsKwaMO0WrXZH+bM73oyIYDxWl+QBMzrNFrclqqxl9JXJ4cill/VrrOenbC3AqBov2ejpOSfcQ0T4Hz2GEGEYW4fnkufrThgVGixGqf7qjV+6PEfk+W0Ndx26p5XARFwsxEH3wtMiuhzvjgo2S4Z4iAO9E9zwbLIbMRgA7JP0ZoggdlhYamlb5A00ddkGtdaloRFeKbngN7iml9Ki1vo77W1xZlu9dRb84HONFLB0p3LmkNVntDSTvCjc0pTZ3YFZOQFLjlc9P+V4g2u/FYg6YjhPy7M3OAlgszD9JlNi5whUPiwb0UwPtSgt8IubFqaIo9cEGefZGq1LamQdGp5Y7i2I0X1TF/UVlu6kF/W+peVdsLorQTqIct1oD2ktDeCff00WeXywieoGokl+0oF8mav1FtdYlolmdLYL29baE/JMLVuBukf/dcJfI8YGtAPhWjGa9SykzRDFqFoHZJoB/mgnnCje09hvZgnas+PfzfZ4vz/VDGNCWjJKXW31KKf1wkJh0NxRNaLEYOJ+rtTa3cW8d/FrbY76StgM0/+nzJ9nxzk3jhq/+AAAAAElFTkSuQmCC91e40862a0f6a0df0ce7b28840850ffd"/>
					<h3 style="font-weight: bold;
								font-size: 18px;
								margin: 8px 0 8px 0">
					This is your dashboard.</h3>
					<p style="color:#666;
								  margin-bottom:8px">
						When you follow some users, their latest posts will show up here! 
					</p>
					<a href="http://techberry.org/rankings/topFollowed"><button class="red">Get started!</button></a>
				</div>
			{else}
				<h3 class="{#prefixFollowersActivity#}title">Followers activity</h3>
				<ul id="contentList" class="{#prefixFollowersActivity#}feed">
					{foreach from=$activities item=activity}
						<li>
							<div class="{#prefixFollowersActivity#}activityBar">
								<p>
									{$activity.titleContent}
									<span class="{#prefixFollowersActivity#}timeSince">{$activity.timeSince} ago</span>
								</p>
							</div>
							<a href="http://techberry.org/user/{$activity.username}/">
								<div data-user="{$activity.username}" class="{#prefixFollowersActivity#}avatar_bubble_list miniprofile">
									<img class="{#prefixFollowersActivity#}avatar_image_list" src="{$activity.avatar}"/>
								</div>
							</a>
							<div class="{#prefixFollowersActivity#}post_content">
								<p>{$activity.content}</p>
							</div>
						</li>
					{/foreach}
				</ul>
				{if $showMoreButton}
					<div role="button" data-from="20" data-info="followers-activity" class="{#prefixForum#}loadMore tooltipWiki loadMore" data-v="user:profile:loadMore">Show more</div>
				{/if}
			</div>
		{/if}
		<script src="http://techberry.org/js/youtube.js"></script>
{/block}
{/strip}
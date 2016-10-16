{extends file='/home/content/99/11499199/html/account/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=accountContent}
<h3><p>Notifications</p></h3>
<iframe id="notification_iframe" style="width:500px;height:500px" src="http://techberry.org/frames/user.notifications.php?token={$token}&isEmbed=1"></iframe>
{/block}
{/strip}
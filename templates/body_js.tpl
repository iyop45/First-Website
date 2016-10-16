{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
<script type="text/javascript">{literal}$(".shortened").shorten(),function(){$(function(){return $(".age.now").attr("datetime",new Date),$(".age.default").age(),$(".age.tiny").age({style:"tiny"}),$(".age.expired").age({expired:"expired"}),$(".age.pending").age({pending:"pending"})})}.call(this);{/literal}</script>
<script type="text/javascript">
	{literal}
		$(document).ready(function() {
			renderYoutubeEmbed();
			$(".spoiler").spoiler();
			$(".loadMore").click(function() {
				var e = this;
				if ($(e).attr("data-first")) {
					var t = $(e).attr("data-first")
				} else {
					var t = 0
				}
				if ($(e).attr("data-n")) {
					var n = $(e).attr("data-n")
				} else {
					var n = 1
				}
				$.get("http://techberry.org/ajax/loadMore.php?info=" + $(e).attr("data-info") + "&from=" + $(e).attr("data-from") + "&first=" + t, function(t) {
					if (t == "false") {
						$("#contentList").append('<h2 class="endOfTheLine" style="text-align:center;margin-top:5px">End of the line</h2>');
						$(e).remove()
					} else {
						history.pushState("page", "", "?page=" + 20 * parseInt(n) - 10);
						$(e).attr("data-from", parseInt($(e).attr("data-from")) + parseInt(20));
						$(e).attr("data-n", +n + +1);
						$(e).attr("data-first", 0);
						$("#contentList").append(t);
						renderYoutubeEmbed();
					}
				});
			}), $(".pointsNeeded").click(function(e) {
				var t = $(this).attr("data-action");
				var dt = new Date();
				$.get("http://techberry.org/ajax/actions.php?action=" + t + "&token={/literal}{$token}{literal}&r=" + dt.getMilliseconds(), function(e) {
					if (e == "-") {
						createAlert("error", "Must be logged in to an active account"), $(this).attr("onclick", "createAlert('error','Must be logged in to an active account')")
					} else if (e == "|") {
						createAlert("error", "Locking is a permanent action"), $(this).attr("onclick", "createAlert('error','Locking is a permanent action')")
					} else if (e == "*") {
						createAlert("error", "Must be in the trusted user group or higher for your reputation to contribute to permissions"), $(this).attr("onclick", "createAlert('error','Must be in the trusted user group or higher for your reputation to contribute to permissions')")
					} else {
						createAlert("error", "Requires " + e + " points"), $(this).attr("onclick", "createAlert('error','Requires " + e + " points')")
					}
				}), e.preventDefault()
			})
		});
		$("body").htmlfeedback();
		function reportBug(){$("body").htmlfeedback("reset");exitBugReport();$("body").htmlfeedback("show");$.ajax({type:"POST",url:"http://techberry.org/frames/report.bug.php",data:{token:"{/literal}{$token}{literal}"},dataType:"text",success:function(e){$(document.body).append('<div id="bug-report">'+e+"</div>");$("#bug-report").draggable({handle:"#bug-report-handle"})},error:function(){Messenger().post({message:"Unable to load bug report form",type:"error",hideAfter:10,hideOnNavigate:true});$("body").htmlfeedback("hide");$("#bug-report").remove()}})}
		function exitBugReport(){$("body").htmlfeedback("hide");$("#bug-report").remove()}
	{/literal}
</script>
{if $alerts}
	<script type="text/javascript">
		{foreach from=$alerts item=alert}
			Messenger().post({
				message: '{$alert[0]}',
				type: '{$alert[1]}',
				hideAfter: 10,
				hideOnNavigate: true,
				showCloseButton: true
			});
		{/foreach}
	</script>
{/if}
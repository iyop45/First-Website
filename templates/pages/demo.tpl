{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<script type="text/javascript">
		{literal}
		$(function(){
			$('.graph').each(function(i,obj){
				new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.graphs.php?v="+$(this).data('v') });
			});
		});
		{/literal}
	</script>
	<p data-v="sdf" class="graph">sdfsdff</p>
{/block}
{/strip}
{block name=content}
	<div id="bug-report-handle" style="{$styles.bar}">
		<span style="{$styles.title}">Bug Report</span>
		<button style="{$styles.close}" onclick="exitBugReport()">&#10006;</button>
	</div>
	<div style="{$styles.content}">
		<p class="color-red" style="{$styles.error}">Image uploading is currently disabled</p>
		<form id="bug-report-form" method="post" action="http://techberry.org/process.bugReport.php"  enctype="multipart/form-data">
			<textarea id="bug-report-description" style="{$styles.textarea}" placeholder="Please describe the problem with as much detail as possible..."></textarea>
			<input class="blue" style="{$styles.submit}" type="submit" value="Submit"/>
		</form>
	</div>
	<script type="text/javascript">
		{literal}
			$(document).ready(function() {
				$("#bug-report-form").submit(function(e) {
					e.preventDefault();
					
					$("body").htmlfeedback("upload", {
						data: {
							"description": $('#bug-report-description').val()
						},
						url: $(this).prop("action"),
					});
					
					$("body").htmlfeedback("reset");
					exitBugReport();
					setTimeout(
					 function() 
					 {
						$("body").htmlfeedback("hide");
					 }, 2000);
					 createAlert('success','Thank you for helping us resolve these bugs :)');
				});
			});
		{/literal}
	</script>
{/block}
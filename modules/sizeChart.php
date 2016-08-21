<link href="src/css/jquery-ui.css" rel="stylesheet" />
<script src="src/javascript/jquery-ui.js"></script>
<div id="size-chart-description" style="width: 100%;">
<img class="pure-img" src="src/img/size-chart.jpg" />
</div>
<script>
$('#size-chart-description').dialog({
	autoOpen: false,
	width: 600,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$(this).dialog('close');
			}
		}
	]
});

// Link to open the dialog
$('#size-chart-link').click(function(event) {
	$('#size-chart-description').dialog('open');
	event.preventDefault();
});
</script>
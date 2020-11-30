<!-- BEGIN TITLE OVERRIDE -->
	<h1 class="page-title">~$Title~</h1>
<!-- END TITLE OVERRIDE -->
<!-- BEGIN CONTENT OVERRIDE -->
<div class="content">
	<div class="container">
		<div class="row">
			<% if $SolarPanelAction == 'index' %>
				<h3>Calculate solar panel cashback</h3>
				$SolarPanelEntryForm
			<% else %>
				<h3>Your cashback</h3>
				NZD $result
			<% end_if %>
		</div>
	</div>
</div>
<!-- END CONTENT OVERRIDE -->

<%-- Adapted from TabSet.ss (framework) --%>
<div $getAttributesHTML("class") class="ss-tabset $extraClass rightsidebar-inner">
	<ul>
	<% loop $Tabs %>
		<li class="$FirstLast $MiddleString $extraClass"><a href="#$id" id="tab-$id">$Title</a></li>
	<% end_loop %>
	</ul>

	<% loop $Tabs %>
		<% if $Tabs %>
		<div>
			$FieldHolder
		</div>
		<% else %>
			<div $AttributesHTML>
				<!-- only include holder if tab contains a rightsidebar -->
				<% loop $Fields %>
					<% if $Type=='rightsidebar' %>
					<div class="$Type-leftcol">
					<% end_if %>
				<% end_loop %>
				<!-- loop over fields -->
				<% loop $Fields %>
					$FieldHolder
				<% end_loop %>
				<!-- only include holder if tab contains a rightsidebar -->
				<% loop $Fields %>
					<% if $Type=='rightsidebar' %>
					</div>
					<% end_if %>
				<% end_loop %>
			</div>
		<% end_if %>
	<% end_loop %>
</div>

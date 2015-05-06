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
			<div $AttributesHTML huh>
				<div class="rightsidebar-leftcol">
				<% loop $Fields %>
					$FieldHolder
				<% end_loop %>
				</div>
			</div>
		<% end_if %>
	<% end_loop %>
</div>

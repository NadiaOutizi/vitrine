<label>
	<div class="oceanwp-mb-desc">
		
			<span class="butterbean-label">{{ data.label }}</span>
		

		
			<span class="butterbean-description">{{{ data.description }}}</span>
		
	</div>

	<div class="oceanwp-mb-field">
		<ul>

			
				<li class="typography-font-family">

					
						<span class="label">{{ data.family.label }}</span>
					

					<select class="widefat butterbean-select" name="{{ data.family.name }}">

						
							<option value="{{ choice }}" if choice="==" data.family.value> selected="selected" >{{ label }}</option>
						

					</select>
				</li>
			

			
				<li class="typography-font-size">

					
						<span class="label">{{ data.size.label }}</span>
					

					<input type="text" name="{{ data.size.name }}" value="{{ data.size.value }}" placeholder="<br />
<b>Fatal error</b>:  Uncaught Error: Call to undefined function esc_html_e() in C:\Xampp\htdocs\vitrine\wp-content\plugins\ocean-extra\includes\metabox\controls\typography\template.php:39
Stack trace:
#0 {main}
  thrown in <b>C:\Xampp\htdocs\vitrine\wp-content\plugins\ocean-extra\includes\metabox\controls\typography\template.php</b> on line <b>39</b><br />
">
</li>
</ul>
</div></label>
<div class="slider-holder">
	<?php echo form::open(NULL, array('method' => 'get')); ?>
		<input type="hidden" value="0" name="currentCat" id="currentCat"/>
		<fieldset>
			<label for="startDate"><?php echo Kohana::lang('ui_main.from'); ?>:</label>
			<select name="startDate" id="startDate"><?php echo $startDate; ?></select>
			<label for="endDate"><?php echo Kohana::lang('ui_main.to'); ?>:</label>
			<select name="endDate" id="endDate"><?php echo $endDate; ?></select>
		</fieldset>
	<?php echo form::close(); ?>
</div>
<div id="graph" class="graph-holder"></div>

<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fayudalaplata&amp;width=589&amp;height=395&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=false&amp;appId=171847206299593" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:589px; height:395px;" allowTransparency="true"></iframe>

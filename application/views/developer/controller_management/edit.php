<fieldset>
	<legend>edit: <?php echo $data->controller; ?></legend>
	<form action="<?php echo base_url('index.php/developer/controller_management/edit/' . $this->group->name . '/' . $data->id); ?>" method="post">
		<ul style="list-style:none;">
			<?php $field = 'controller'; $alias = $field; ?>
			<li><label><?php echo $alias; ?></label></li>
			<li><input type="text" name="<?php echo $field; ?>" value="<?php echo set_value($field, $data->$field); ?>" /></li>
			<?php echo form_error($field, '<li><font style="color:red;">', '</font></li>'); ?>
			
			<li><input type="submit" value="submit" class="btn" /></li>
		</ul>
	</form>
</fieldset>
<div class="layui-form-item">
	<label class="layui-form-label">{$label}</label>
	<div class="layui-input-block">
		 {if $multiple==true}
		 <input name="{$name}"  type="hidden" value="<?php echo implode(',', $defaultValue); ?>"/>
			<select name="js_{$name}[]"  id="{$name}[]" multiple="multiple" data-truename="{$name}" lay-ignore class="multiple" >
			{else}
				<select name="{$name}"  id="{$name}"   >
			 {/if}
			<option value="0" disabled>请选择{$label}</option> {foreach $options}
                                            <option {if isset($defaultValue)&& in_array($value['id'],$defaultValue)} selected {/if} value="{$value.id}">{$value.title}</option>
                                        {/foreach}
		</select>
		<tips class="tips">{$tips}</tips>
	</div>
</div>
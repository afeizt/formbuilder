	<div class="layui-form-item">
		<label class="layui-form-label">{$label}</label>
		<div class="layui-input-block">
            {foreach $options}
			<input type="checkbox" name="{$name}[]" title="{$value.title}" {if isset($defaultValue)&&in_array($value['id'],$defaultValue)} checked {/if} value="{$value.id}" >
            {/foreach}
		</div>
			<tips class="tips">{$tips}</tips>
	</div>
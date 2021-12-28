
		<div class="layui-form-item">
			<label class="layui-form-label">{$label}</label>
			<div class="layui-input-block">
                {foreach $options}
				<input type="radio" name="{$name}" {if in_array($value['id'],$defaultValue)} checked {/if} value="{$value.id}" title="{$value.title}" >
                {/foreach}
			</div>
				<tips class="tips">{$tips}</tips>
		</div>

<div class="layui-form-item">
	<label class="layui-form-label">{$label}</label>
	<div class="layui-input-block layuimini-upload">
		<input  name="{$name}" class="{$class}" placeholder="{$placeholder}"   value="{$articles}">
		<input  name="{$name}_id" type="hidden"   value="{$defaultValue}">
		<div class="layuimini-article-select-btn">
			<span><a class="layui-btn layui-btn-normal" id="select_{$name}" data-article-select="{$name}" data-id-select="{$name}_id" 
					data-article-number="{if $multiple!=1}one{else}multi{/if}"><i class="fa fa-list"></i> 选择文章</a></span>
		</div>
	</div>
	<tips class="tips">{$tips}</tips>
</div>

<div class="layui-form-item">
	<label class="layui-form-label">{$label}</label>
	<div class="layui-input-block layuimini-upload">
		<input  name="{$name}" class="{$class}" placeholder="{$placeholder}"   value="{$defaultValue}">
		{if $use_thumb==1}<input  name="{$name}_thumb" type="hidden"   value="{$thumb_value}">{/if}

		<div class="layuimini-upload-btn">
			<span><a class="layui-btn" data-upload="{$name}" data-upload-number="{if $multiple!=1}one{else}multi{/if}" {if $use_thumb==1}data-thumb="{$name}_thumb"{/if}
			{if $add_watermark==0} data-nowatermark="true" {/if}
					data-upload-exts="{$uploadAllowExt}"><i class="fa fa-upload"></i> {if $multiple==1}多文件{/if}上传</a></span>
			<span><a class="layui-btn layui-btn-normal" id="select_{$name}" data-upload-select="{$name}" {if $use_thumb==1}data-thumb-select="{$name}_thumb"{/if}  ts-selected="<?php echo str_replace("|",",",$defaultValue);?>"	data-upload-number="{if $multiple!=1}one{else}multi{/if}"><i class="fa fa-list"></i> 选择</a></span>
		</div>
	</div>
	<tips class="tips">{$tips}</tips>
</div>
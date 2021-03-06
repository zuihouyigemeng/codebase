<div class="page">
	<div class="pageContent">
		<form method="post" action="<?php echo CHtml::normalizeUrl(array('func/add'));?>" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
			<div class="pageFormContent" layoutH="58">

				<div class="unit">
					<label>所属模块：</label>
					<select name="data[Module_ID]">
						<?php
							foreach ($modulesArr as $modules) {
						?>
							<option value="<?php echo $modules['module_id'];?>"><?php echo $modules['module_name'];?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="divider"></div>

				<div class="unit">
					<label>功能名称：</label>
					<input type="text" class="required" size="50" name="data[Function_Name]" />
				</div>
				<div class="divider"></div>

				<div class="unit">
					<label>功能函数描述：</label>
					<textarea name="data[Desciption]" cols="50" rows="3" class="textInput required"></textarea>
				</div>
				<div class="divider"></div>

				<div class="unit">
					<label>函数参数：</label>
					<input type="text" size="50" name="data[Parameter]" class="required"/>
				</div>
				<div class="divider"></div>
				
				<div class="unit">
					<label>函数返回值：</label>
					<input type="text" size="50" name="data[ReturnValue]" class="required"/>
				</div>
				<div class="divider"></div>
				
				<div class="unit">
					<label>是否启用：</label>
					<select name="data[Enabled]">
						<option value="1">是</option>
						<option value="0">否</option>
					</select>
				</div>
				<div class="divider"></div>
				
			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
					<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div>
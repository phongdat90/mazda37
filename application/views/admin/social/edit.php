<!-- head -->
<br></br>

<div class="line"></div>

<div class="wrapper">
      <div class="widget">
           <div class="title">
			<h6>Cập nhật thông tin social</h6>
		   </div>
 
      <form id="form" class="form" method="post" action="">
          <fieldset>
                <div class="formRow">
                	<label for="param_name" class="formLeft">Tên:<span class="req">*</span></label>
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo $info->name?>" name="name"></span>
                    
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('name')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
            <div class="formRow">
                	<label for="param_username" class="formLeft">Link:<span class="req">*</span></label>
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true" value="<?php echo $info->link?>" id="param_username" name="link"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('link')?></div>
                	</div>
                	<div class="clear"></div>
            </div>

           
                
                
              <div class="formSubmit">
	           			<input type="submit" class="redB" value="Cập nhật">
	           	</div>
          </fieldset>
      </form>
      
      </div>
</div>

<!-- head -->
<?php $this->load->view('admin/slide/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
    
	   	<!-- Form -->
		<form enctype="multipart/form-data" method="post" action="" id="form" class="form">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
						<h6>Cập nhật Slide</h6>
					</div>
					
				    <ul class="tabs">
		                <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
					</ul>
					
					<div class="tab_container">
					     <div class="tab_content pd0" id="tab1" style="display: block;">
					         <div class="formRow">
                            	<label for="param_name" class="formLeft">Tên slide<span class="req">*</span></label>
                            	<div class="formRight">
                            		<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo $slide->name?>" name="name"></span>
                            		<span class="autocheck" name="name_autocheck"></span>
                            		<div class="clear error" name="name_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
                            
                            <div class="formRow">
  <label class="formLeft">Hình ảnh: (934 X 280)<span class="req">*</span></label>
  <div class="formRight">
    <div class="left">
        <!-- <input type="file" name="image" id="image" size="25"> -->
        <input type="text" name="image" id="image" value="<?php echo $slide->image_link ?>" size="50">
        
        <?php if($slide->image_link != ''): ?>
        <img src="<?php echo $slide->image_link ?>" width="100px" alt=""  style="display: block">
        <?php endif ?>
    </div>
    <input type="button" id="btn-browse-image" datainput="image" onclick="BrowseServer(this)" value="Browse" style="display: inline-block;">
    <input type="button" id="btn-delete-image"  value="Delete" style="display: inline-block;">
    <div class="clear error" name="image_error"></div>
    
  </div>
  <div class="clear"></div>
  <script>
    jQuery(document).ready(function($) {
      $( document ).on( 'click', '#btn-delete-image', function() {
      var deleteSure = confirm("Bạn chắc chắn muốn xóa");

      if (deleteSure == true) {
        console.log(jQuery(this).parent().parent().find('.formRight'));
        if(jQuery(this).parent().parent().find('.formRight').length == 1){
          jQuery(this).parent().find('img').remove();
          jQuery(this).parent().find('input[type=text]').attr('value','');
        }
        else
          jQuery(this).parent().remove();
      }
      
    });
    });
  </script>
</div>
                             
                               <div class="formRow">
                            	<label for="param_name" class="formLeft">Link:</label>
                            	<div class="formRight">
                            		<span class="oneTwo"><input type="text" _autocheck="true" id="param_link" value="<?php echo $slide->link?>" name="link"></span>
                            		<span class="autocheck" name="name_autocheck"></span>
                            		<div class="clear error" name="name_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
                            
                             <div class="formRow">
                            	<label for="param_name" class="formLeft">Mô tả:</label>
                            	<div class="formRight">
                            		<span class="oneTwo"><input type="text" _autocheck="true" id="param_info" value="<?php echo $slide->info?>" name="info"></span>
                            		<span class="autocheck" name="name_autocheck"></span>
                            		<div class="clear error" name="name_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
                            
                            <div class="formRow">
                            	<label for="param_name" class="formLeft">Thứ tự hiển thị:</label>
                            	<div class="formRight">
                            		<span class="oneTwo"><input type="text" _autocheck="true" id="param_sort_order" value="<?php echo $slide->sort_order?>" name="sort_order"></span>
                            		<span class="autocheck" name="name_autocheck"></span>
                            		<div class="clear error" name="name_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
                            
                            
				         <div class="formRow hide"></div>
						 </div>
						
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" class="redB" value="Cập nhật">
	           			<input type="reset" class="basic" value="Hủy bỏ">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
<div class="clear mt30"></div>

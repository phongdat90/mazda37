<!-- head -->

<?php $this->load->view('admin/product/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
    
	   	<!-- Form -->
		<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('product/add')?>" id="form" class="form">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
						<h6>Thêm mới Sản phẩm</h6>
					</div>
					
				    <ul class="tabs">
		                <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
		                <li class=""><a href="#tab2">SEO Onpage</a></li>
		                <li class=""><a href="#tab3">Nội Dung</a></li>
		                
					</ul>
					
					<div class="tab_container">
					     <div class="tab_content pd0" id="tab1" style="display: block;">
<div class="formRow">
	<label for="param_name" class="formLeft">Tên:<span class="req">*</span></label>
	<div class="formRight">
		<span class="oneTwo"><input type="text" value="<?php echo set_value('name'); ?>" _autocheck="true" id="param_name" name="name"></span>
		<span class="autocheck" name="name_autocheck"></span>
		<div class="clear error" name="name_error"><?php echo form_error('name')?></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_name" class="formLeft">Slug:</label>
	<div class="formRight">
		<span class="oneTwo"><input type="text" value="<?php echo set_value('slug'); ?>" _autocheck="true" id="param_name" name="slug"></span>

		<span class="autocheck" name="name_autocheck"></span>
		<div class="clear error" name="name_error"><?php echo form_error('slug')?></div>
	</div>
	<p class="formRight">Nhập slug nếu muốn thay đổi</p>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_name" class="formLeft">Mã sản phẩm:</label>
	<div class="formRight">
		<span class="oneTwo"><input type="text" value="<?php echo set_value('ma_sp'); ?>" _autocheck="true" id="param_name" name="ma_sp"></span>
		<span class="autocheck" name="name_autocheck"></span>
		<div class="clear error" name="name_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
	<div class="formRight">
		<div class="left">
    		<!-- <input type="file" name="image" id="image" size="25"> -->
    		<input type="text" name="image" id="image" value="" size="50">
    		<p>Để hiển thị tốt kích thước ảnh tối thiểu 400 X 300</p>
		</div>
		<input type="button" id="btn" datainput="image" onclick="BrowseServer(this)" value="Browse" style="display: inline-block;">
		<input type="button" id="btn-delete-image"  value="Delete" style="display: inline-block;">

		<div class="clear error" name="image_error"><?php echo form_error('image')?></div>
		
	</div>
	<div class="clear"></div>

</div>

<div class="formRow">
	<label class="formLeft">Ảnh kèm theo:</label>
	<div class="formRight">
		<div class="left">
    		<!-- <input type="file" name="image" id="image" size="25"> -->
    		<input type="text" name="image_list[]" id="image_list1" value="" size="50">
    		<p>Để hiển thị tốt kích thước ảnh tối thiểu 400 X 300</p>
		</div>
		<input type="button" id="btn" datainput="image_list1" onclick="BrowseServer(this)" value="Browse" style="display: inline-block;">
		<input type="button" id="btn-delete-image"  value="Delete" style="display: inline-block;">

		<div class="clear error" name="image_list_error"></div>
	</div>


	
	<span class="add-image btn-add-image">Add image</span>
	<div class="clear"></div>
</div>

<script>
	jQuery(document).ready(function($) {
		var idInput = 1;
		jQuery('.btn-add-image').on('click',function(){
			var inputAdd = jQuery(this).parent().find('.formRight').eq(0).clone(true);
			var lastIdInput = inputAdd.find('input[type=text]').attr('id');
			lastIdInput = lastIdInput.replace(/[^0-9]/g,'');
			lastIdInput = parseInt(lastIdInput) + idInput;
			
			inputAdd.find('input[type=text]').attr('id','image_list'+lastIdInput);
			inputAdd.find('input[type=button]').attr('datainput','image_list'+lastIdInput);
			inputAdd.find('input[type=text]').attr('value','');
			inputAdd.insertBefore(this);
			idInput++;


		});
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



<!-- Price -->
<div class="formRow">
	<label for="param_price" class="formLeft">
		Giá :
	</label>

<div class="formRight">
		<span class="oneTwo">
			<input type="text" value="<?php echo set_value('price'); ?>" _autocheck="true" class="format_number" id="param_price" style="width:100px" name="price">
			<img src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" class="tipS" original-title="Giá bán sử dụng để giao dịch">
		</span>
		<span class="autocheck" name="price_autocheck"></span>
		<div class="clear error" name="price_error"></div>
	</div>
	<div class="clear"></div>
</div>
<!-- Price -->
<div class="formRow">
	<label for="param_price" class="formLeft">
		Discount:
		<span class="req">*</span>
	</label>
    <div class="formRight">
		<span class="oneTwo">
			<input type="text" value="<?php echo set_value('discount'); ?>" _autocheck="true" class="format_number" id="param_price" style="width:100px" name="discount">
			
		</span>
		<span class="autocheck" name="discount_autocheck"></span>
		<div class="clear error" name="discount_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_name" class="formLeft">Tinh trang:</label>
	<div class="formRight">
		<span class="oneTwo"><input type="text" _autocheck="true" id="param_ma_sp" value="<?php echo set_value('status');?>" name="status"></span>
		<span class="autocheck" name="status_autocheck"></span>
		<div class="clear error" name="status_error"></div>
	</div>
	<div class="clear"></div>
</div>


<div class="formRow">
	<label for="param_cat" class="formLeft">Thể loại:<span class="req">*</span></label>
	<div class="formRight">
	    <select name="catalog"  class="left" >
			<option value=""></option>
				<!-- kiem tra danh muc co danh muc con hay khong -->
				<?php foreach ($catalogs as $row):?>
				<?php if(count($row->subs) >= 1):?>
  				<optgroup label="<?php echo $row->name?>">
  				    <?php foreach ($row->subs as $sub):?>
           			<option value="<?php echo $sub->id?>"> <?php echo $sub->name?> </option>
	                <?php endforeach;?>
           		</optgroup>
           		<?php else:?>
           		  <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
           		<?php endif;?>
           		<?php endforeach;?>
		</select>
		<span class="autocheck" name="cat_autocheck"></span>
		<div class="clear error" name="cat_error"><?php echo form_error('catalog')?></div>
	</div>
	<div class="clear"></div>
</div>

<!-- warranty -->
<div class="formRow">
	<label for="param_warranty" class="formLeft">
		Hãng sản xuất :
	</label>
	<div class="formRight">
		<span class="oneFour">
			<input type="text" value="<?php echo set_value('hsx'); ?>" id="param_hsx" name="hsx" />
		</span>
		<span class="autocheck" name="hsx_autocheck"></span>
		<div class="clear error" name="hsx_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_warranty" class="formLeft">
		Sản phẩm nổi bật :
	</label>
	<div class="formRight">
		<select name="noi_bat" id="noi_bat">
			<option value="0">Không</option>
			<option value="1">Có</option>
		</select>
		<div class="clear error" name="hsx_error"></div>
	</div>
	<div class="clear"></div>
</div>


<!-- warranty -->
<div class="formRow">
	<label for="param_warranty" class="formLeft">
		Bảo hành :
	</label>
	<div class="formRight">
		<span class="oneFour">
			<input type="text" id="param_warranty" name="warranty" value="">
		</span>
		<!-- <textarea name="warranty" id="warranty"><?php //echo set_value('warranty'); ?></textarea> -->
		<span class="autocheck" name="warranty_autocheck"></span>
		<div class="clear error" name="warranty_error"></div>
	</div>
	<div class="clear"></div>
</div>
<!-- <script>CKEDITOR.replace( 'warranty' );</script> -->


<div class="formRow">
	<label for="param_sale" class="formLeft">Tặng quà:</label>
	<div class="formRight">
	<span class="oneFour">
			<input type="text" id="param_warranty" name="gifts" value="">
	</span>
	<!-- <textarea cols="" rows="4" id="param_gifts" name="gifts"><?php //echo set_value('gifts'); ?></textarea> -->
		<span class="autocheck" name="sale_autocheck"></span>
		<div class="clear error" name="sale_error"></div>
	</div>
	<div class="clear"></div>
</div>
<!-- <script>CKEDITOR.replace( 'param_gifts' );</script>	 -->
<div class="formRow hide"></div>
 </div>
 
 <div class="tab_content pd0" id="tab2" style="display: none;">
					     			
<div class="formRow">
	<label for="param_site_title" class="formLeft">Title:</label>
	<div class="formRight">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_site_title" name="site_title"><?php echo set_value('site_title'); ?></textarea></span>
		<span class="autocheck" name="site_title_autocheck"></span>
		<div class="clear error" name="site_title_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_meta_desc" class="formLeft">Meta description:</label>
	<div class="formRight">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_desc" name="meta_desc"><?php echo set_value('meta_desc'); ?></textarea></span>
		<span class="autocheck" name="meta_desc_autocheck"></span>
		<div class="clear error" name="meta_desc_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_meta_key" class="formLeft">Meta keywords:</label>
	<div class="formRight">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key"><?php echo set_value('meta_key'); ?></textarea></span>
		<span class="autocheck" name="meta_key_autocheck"></span>
		<div class="clear error" name="meta_key_error"></div>
	</div>
	<div class="clear"></div>
</div>



						     <div class="formRow hide"></div>
						 </div>
						 
<div class="tab_content pd0" id="tab3" style="display: none;">

<!-- <div class="formRow">
	<label for="param_meta_key" class="formLeft">Mô tả:</label>
	<div class="formRight">
		<span class="">
		<textarea class="tong_quan" id="intro" name="intro"><?php echo set_value('intro'); ?></textarea>
		</span>
	
		<div class="clear error" name="intro_key_error"></div>
	</div>
	<div class="clear"></div>
</div>
<script>CKEDITOR.replace( 'intro' );</script> -->

  	<div class="formRow">
			<label class="formLeft">Nội dung chi tiết:</label>
			<div class="formRight" style="width:100%">
				<textarea class="editor" id="param_content" name="content"><?php echo set_value('content'); ?></textarea>
				<div class="clear error" name="content_error"></div>
			</div>
			<div class="clear"></div>
	</div>

	

	<div class="formRow hide"></div>
</div>
						
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" class="redB" value="Thêm mới">
	           			<input type="reset" class="basic" value="Hủy bỏ">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
<div class="clear mt30"></div>

<!-- head -->
<?php $this->load->view('admin/product/head', $this->data)?>

<div class="line"></div>

<div id="main_product" class="wrapper">
	<div class="widget">
			<?php $this->load->view('site/message',$this->data)?>
		<div class="title">
			<span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
			<h6>
				Danh sách sản phẩm	
			</h6>

		 	<div class="num f12">Số lượng: <b><?php echo $total_rows?></b></div>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			
			<thead class="filter"><tr><td colspan="12">
				<form method="get" action="<?php echo admin_url('product')?>" class="list_filter form">
					<table width="80%" cellspacing="0" cellpadding="0"><tbody>
					
						<tr>
							<td style="width:60px;" class="label"><label for="filter_id">Mã sản phẩm</label></td>
							<td class="item"><input type="text" style="width:80px;" id="filter_id" value="<?php echo $this->input->get('id')?>" name="id"></td>
							
							<td style="width:40px;" class="label"><label for="filter_id">Tên</label></td>
							<td style="width:150px;" class="item"><input type="text" style="width:155px;" id="filter_iname" value="<?php echo $this->input->get('name')?>" name="name"></td>
							
							<td style="width:60px;" class="label"><label for="filter_status">Danh Mục</label></td>
							<td class="item">
								<select name="catalog" style="width:200px">
									<option value=""></option>
										<!-- kiem tra danh muc co danh muc con hay khong -->
                                  <?php foreach ($catalog_0 as $row):?>
                                  	<?php if(count($row->menu_1) >0):?>
									   <option value="<?php echo $row->id?>" <?php if($this->input->get('catalog') == $row->id) echo 'selected'?> style="font-weight: bold"><?php echo mb_strtoupper($row->name,'utf-8');?></option>
									  <?php foreach($row->menu_1 as $value):?>
									  	 <?php if(count($value->menu_2) > 0):?>
                                            <option value="<?php echo $value->id?>" <?php if($this->input->get('catalog') == $value->id) echo 'selected'?> style="font-weight: 600"><?php echo ' -'.$value->name?></option>
                                                <?php foreach($value->menu_2 as $sub):?>
                                                	<option value="<?php echo $sub->id?>" <?php if($this->input->get('catalog') == $sub->id) echo 'selected'?>><?php echo '---'.$sub->name?></option>
                                                <?php endforeach;?>
                                         <?php else:?>
                                            <option value="<?php echo $value->id?>" <?php if($this->input->get('catalog') == $value->id) echo 'selected'?>><?php echo ' -'.$value->name?></option>
                                         <?php endif;?>
									  <?php endforeach;?>
                                    <?php else:?>
                                    	<option value="<?php echo $row->id?>" <?php if($this->input->get('catalog') == $row->id) echo 'selected'?> style="font-weight: bold"><?php echo $row->name?></option>
                                    <?php endif;?>
								  <?php endforeach;?>
								</select>
							</td>
							
							<td style="width:150px">
							<input type="submit" value="Lọc" class="button blueB">
							<input type="reset" onclick="window.location.href = '<?php echo admin_url('product')?>'; " value="Reset" class="basic">
							</td>
							
						</tr>
					</tbody></table>
				</form>
			   </td>
			   </tr>
			</thead>
			
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
					
					<td>Tên sản phẩm</td>
					<td>Mã sản phẩm</td>
					<td>Giá</td>
					<td>Lượt Xem</td>
					
					<td>Danh mục</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:120px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="12">
						 <div class="list_action itemActions">
								<a url="<?php echo admin_url('product/delete_all')?>" class="button blueB" id="submit" href="#submit">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					<div class='pagination'>
					          <?php echo $this->pagination->create_links()?>
			        </div>
					</td>
					

				</tr>
			</tfoot>
			
			<tbody class="list_item">
			  <form method="post" action="">
			     <?php foreach ($buy as $row):?>
			     <tr class="row_<?php echo $row->id?>">
					<td><input type="checkbox" value="<?php echo $row->id?>" name="id[]"></td>
					
					<td>
					<div class="image_thumb">
						<img height="50" src="<?php echo $row->image_link?>">
						<div class="clear"></div>
					</div>
					
					<a target="_blank" title="" class="tipS" href="<?php echo base_url($row->slug.'-'.$row->id.'.html')?>">
					    <b><?php echo $row->name?></b>
					</a>
					<?php
					/* 
					<div class="f11">
					  Đã bán: <?php echo $row->buyed?>	| Xem: <?php echo $row->view?>					
					 </div>
					 */
					 ?>
					</td>

					<td class="textC" style="width:auto">
					<?php
					 	echo $row->ma_sp;
					?>
					</td>
					
					<?php 
					/*
					<td class="textR" style="text-align: center!important;">

					    <?php if($row->discount > 0):?>
					       <?php $price_new = $row->price - $row->discount;?>
					       <b style="color:red;"><?php echo number_format($price_new)?> đ</b>
					       <p style="text-decoration:line-through"><?php echo number_format($row->price)?> đ</p>
					    <?php else:?>
					        <b style="color:red"><?php echo number_format($row->price)?> đ</b>
					    <?php endif;?>   				
					</td>
					*/

					?>
					<td class="textC" style="width:auto">
						<input class="price format_number" style="padding: 7px 7px;width:90px" type="text" id="<?php echo $row->id; ?>" value="<?php
					 	echo number_format($row->price);
					?>" />
					</td>


					<td class="textC" style="width:auto">
					<?php
					 	echo $row->view;
					?>
					</td>

					<td class="textC" style="width:auto">
					<?php
					 	echo $row->name_catalog;
					?>
					</td>


					
					<td class="textC" style="width:auto">
					<?php
					 	echo get_date($row->created);
					?>
					</td>

					
					<td class="option textC">
						<a title="Update" class="updateprice tipS" id="<?php echo $row->id;?>">
								<img class="" src="<?php echo public_url('admin/images')?>/icons/color/view.png">
						 </a>
						 
						 <a class="tipS" title="Chỉnh sửa" href="<?php echo admin_url('product/edit/'.$row->id)?>">
							<img src="<?php echo public_url('admin/images')?>/icons/color/edit.png">
						</a>
						
						<a class="tipS verify_action" title="Xóa" href="<?php echo admin_url('product/del/'.$row->id)?>">
						    <img src="<?php echo public_url('admin/images')?>/icons/color/delete.png">
						</a>
					</td>
				</tr>
				<?php endforeach;?>
			  </form>
		   </tbody>
			
		</table>
	</div>
	
</div>

<script>
$(document).ready(function()
{
    $(".updateprice").click(function(){
    	var id = $(this).attr('id');
        var price = $(this).parent().parent().find(".price").val();

        $.ajax({
                    url : "<?php echo admin_url('product/update')?>",
                    type : "post",
                    cache:false,
                    data : {
                         "id":id,"price":price
                    },
                    success : function (result){
                        $('.body').html(result);
                    }
              }); 
    });
});

</script>



<!-- head -->
<?php $this->load->view('admin/catalog/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">

    <?php $this->load->view('site/message', $this->data);?>
    
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon">
			<div class="checker" id="uniform-titleCheck">
    			<span>
    			   <input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;">
    			</span>
			</div>
			</span>
			<h6>Danh sách danh mục sản phẩm</h6>
		 	<div class="num f12">Tổng số: <b><?php echo count($list)?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
					<td style="width:80px;">Mã số</td>
					<td style="width:80px;">Thư tự</td>
					<td>Tên danh mục</td>
					<td>Meta_description</td>
					<td>status</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
				
			</tfoot>
 			
			<tbody>
			<?php foreach ($catalog_list as $row):?>
			<?php if(!empty($row->subs)):?>
			<tr class="row_<?php echo $row->id?>">
						<td><input type="checkbox" name="id[]" value="<?php echo $row->id?>" /></td>
						
						<td class="textC"><?php echo $row->id?></td>

                        <td class="textC"><?php echo $row->sort_order?></td>
                        
						<td>
						<span title="<?php echo $row->name?>" class="tipS" style="font-weight: bold">
							<?php echo $row->name?>				
						</span>
						</td>
						<?php if(!empty($row->meta_desc)):?>
						<td>
						<span title="<?php echo $row->meta_desc?>" class="tipS">
							<?php echo $row->meta_desc?>				
						</span>
						</td>
					    <?php else:?>
					    	<td>
						<span title="" class="tipS">
							<?php echo 'chưa có meta_desc'?>				
						</span>
						<?php endif; ?>
						<td>
						<span title="<?php echo $row->name?>" class="tipS">
							<?php echo $row->status?>				
						</span>
						</td>
						<td class="option">
							<a href="<?php echo admin_url('catalog/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
							   <img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
							</a>
							
							<a href="<?php echo admin_url('catalog/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
							    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>

				<?php foreach($row->subs as $sub):?>
					<tr class="">
						<td><input type="checkbox" name="id[]" value="<?php echo $sub->id?>" /></td>
						
						<td class="textC"><?php echo $sub->id?></td>

                        <td class="textC"><?php echo $sub->sort_order?></td>
                        
						<td>
						<span class="tipS" style="padding-left:40px">
							<?php echo $sub->name?>				
						</span>
						</td>
						<?php if(!empty($sub->meta_desc)):?>
						<td>
						<span title="<?php echo $sub->meta_desc?>" class="tipS">
							<?php echo $sub->meta_desc?>				
						</span>
						</td>
					    <?php else:?>
					    	<td>
						<span title="" class="tipS">
							<?php echo 'chưa có meta_desc'?>				
						</span>
						<?php endif; ?>
						<td>
						<span title="<?php echo $sub->name?>" class="tipS">
							<?php echo $sub->status?>				
						</span>
						</td>
						<td class="option">
							<a href="<?php echo admin_url('catalog/edit/'.$sub->id)?>" title="Chỉnh sửa" class="tipS ">
							   <img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
							</a>
							
							<a href="<?php echo admin_url('catalog/delete/'.$sub->id)?>" title="Xóa" class="tipS verify_action" >
							    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>
				<?php endforeach;?>
						

				<?php else:?>
					<tr class="row_<?php echo $row->id?>">
						<td><input type="checkbox" name="id[]" value="<?php echo $row->id?>" /></td>
						
						<td class="textC"><?php echo $row->id?></td>

                        <td class="textC"><?php echo $row->sort_order?></td>
                        
						<td>
						<span title="<?php echo $row->name?>" class="tipS" style="font-weight: bold">
							<?php echo $row->name?>				
						</span>
						</td>
						<?php if(!empty($row->meta_desc)):?>
						<td>
						<span title="<?php echo $row->meta_desc?>" class="tipS">
							<?php echo $row->meta_desc?>				
						</span>
						</td>
					    <?php else:?>
					    	<td>
						<span title="" class="tipS">
							<?php echo 'chưa có meta_desc'?>				
						</span>
						<?php endif; ?>
						<td>
						<span title="<?php echo $row->name?>" class="tipS">
							<?php echo $row->status?>				
						</span>
						</td>
						<td class="option">
							<a href="<?php echo admin_url('catalog/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
							   <img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
							</a>
							
							<a href="<?php echo admin_url('catalog/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
							    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>

				<?php endif;?>
					<?php endforeach;?>
					</tbody>
				</table>
	</div>
</div>

<div class="clear mt30"></div>

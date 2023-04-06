<!-- head -->
<?php $this->load->view('admin/menu/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">

    <?php $this->load->view('site/message', $this->data);?>
    
	<div class="widget">
	
		<div class="title">
			
			<h6>Danh sách menu</h6>
		 	<div class="num f12">Tổng số: <b><?php echo $total_menu?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					
					<td style="width:80px;">Mã số</td>
					<td>parent_id</td>
					<td>Tên menu</td>
					<td>Đường link</td>
					<td>Thứ tự hiển thị</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
			<tbody>
			<?php foreach ($list as $row):?>
			<tr>
						
						<td class="textC"><?php echo $row->id?></td>

						<td>
						<span title="parent_id" class="tipS">
							<?php echo $row->parent_id?>				
						</span></td>
						
						<td><span title="<?php echo $row->title?>" class="tipS">
							<?php echo $row->title?>					
						</span></td>
						
						<td><span title="<?php echo $row->url?>" class="tipS">
							<?php echo $row->url?>					
						</span></td>
						<td><span title="<?php echo $row->sort_order?>" class="tipS">
							<?php echo $row->sort_order?>					
						</span></td>
						
						<td class="option">
							<a href="<?php echo admin_url('menu/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
							   <img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
							</a>
							
							<a href="<?php echo admin_url('menu/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
							    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
	</div>
</div>

<div class="clear mt30"></div>

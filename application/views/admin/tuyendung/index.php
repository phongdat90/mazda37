<!-- head -->
<?php $this->load->view('admin/tuyendung/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">

    <?php $this->load->view('site/message', $this->data);?>
    
	<div class="widget">
	
		<div class="title">
			
			<h6>Danh sách bài viết giới thiệu</h6>
		 	<div class="num f12">Tổng số: <b><?php echo $total?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					
					<td style="width:80px;">Mã số</td>
					<td>Tên</td>
					<td>Nội dung rút gọn</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
			<tbody>
			<?php foreach ($list as $row):?>
			<tr>
						
						<td class="textC"><?php echo $row->id?></td>

						<td>
						<span title="<?php echo $row->title?>" class="tipS">
							<?php echo $row->title?>				
						</span></td>
						
						<td><span title="<?php echo $row->intro?>" class="tipS">
							<?php echo $row->intro?>					
						</span></td>
						
						
						<td class="option">
							<a href="<?php echo admin_url('tuyendung/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS">
							   <img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
							</a>
							
							<a href="<?php echo admin_url('tuyendung/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
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

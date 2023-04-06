<!-- head -->
<?php $this->load->view('admin/home/head')?>

<div class="line"></div>

<div id="main_product" class="wrapper">
	<div class="widget">
			<?php $this->load->view('site/message',$this->data)?>
		<div class="title">
			<span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
			<h6>
				Danh sách giao dịch bán hàng	
			</h6>

		 	<div class="num f12">Số lượng: <b><?php echo count($list) ?></b></div>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
					<td style="width:60px;">Mã Giao dịch</td>
					<td style="width:75px;">Tên Khách Hàng</td>
					<td>Địa Chỉ</td>
					<td>Phone</td>
					<td style="width:90px;">Số tiền</td>
					<td>Hình thức thanh toán</td>
					
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:55px;">Xóa</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="12">
						 <div class="list_action itemActions">
								<a url="<?php echo admin_url('home/delete_all')?>" class="button blueB" id="submit" href="#submit">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					<div class='pagination'>
					          <?php //echo $this->pagination->create_links()?>
			        </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
			     <?php foreach ($list as $row):?>
			     <tr class="row_<?php echo $row->id?>">
					<td><input type="checkbox" value="<?php echo $row->id?>" name="id[]"></td>
					<td class="textC"><?php echo $row->id ?></td>
					
					<td>
						<?php echo $row->user_name;?>
					</td>

					<td>
						<?php echo $row->address?>
					</td>
					<td>
						<?php echo $row->user_phone?>
					</td>
					<td class="textR red"><?php echo !empty($row->amount) ? number_format($row->amount).'VNĐ': ''?>
					</td>
					
					<td>
					  <?php echo $row->payment; ?>
					</td>
					
					<td class="textC"><?php echo get_date($row->created)?></td>
					<td class="textC">
						   <a class="tipS verify_action" href="<?php echo admin_url('home/del/'.$row->id)?>" original-title="Xóa">
						    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png">
						   </a>
					</td>
				</tr>
				<?php endforeach;?>
		   </tbody>
			
		</table>
	</div>
</div>


<div id="main_product" class="wrapper" style="padding:30px 30px;width:600px">
	<div class="widget">
			<?php $this->load->view('site/message',$this->data)?>
		<div class="title">
			<!-- <span class="titleIcon">
					<input type="checkbox" name="titleCheck_1" id="titleCheck_1">
			</span> -->
			<h6>
				Chi tiết đơn hàng	
			</h6>

		 	<div class="num f12">Số lượng: <b><?php echo count($list_order) ?></b></div>
		</div>
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
					<td style="width:60px;">Mã Giao dịch</td>
					<td style="width:200px;">Tên sản phẩm</td>
					<td style="width:60px;">Số lượng</td>
					<td style="width:60px">Số tiền</td>
					<td style="width:60px;">Xóa</td>
				</tr>
			</thead>
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="12">
						 <!-- <div class="list_action itemActions">
								<a url="<?php echo admin_url('home/delete_order')?>" class="button blueB" id="submit" href="#submit">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					<div class='pagination'>
					          <?php //echo $this->pagination->create_links()?>
			        </div> -->
					</td> 
					

				</tr>
			</tfoot>
			
			<tbody class="list_item">
			     <?php foreach ($list_order as $row):?>
			     <tr class="row_<?php echo $row->id?>">
					<td><input type="checkbox" value="<?php echo $row->id?>" name="id[]"></td>
					<td class="textC"><?php echo $row->transaction_id ?></td>
					<td>
						<?php echo $row->product_name;?>
					</td>
					<td>
						<?php echo $row->qty?>
					</td>
					
					<td class="textR red"><?php echo !empty($row->amount) ? number_format($row->amount).'VNĐ' : ''?>
					</td>
					<td class="textC">
						   <a class="tipS verify_action" href="<?php echo admin_url('home/del_order/'.$row->id)?>" original-title="Xóa">
						    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png">
						   </a>
					</td>
					
				</tr>
				<?php endforeach;?>
		   </tbody>
			
		</table>
	</div>
	
</div>





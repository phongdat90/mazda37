<!-- head -->
<?php $this->load->view('admin/dichvu/head', $this->data)?>

<div class="line"></div>

<div id="main_news" class="wrapper">
	<div class="widget">
	<?php $this->load->view('site/message')?>
		<div class="title">
			<span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
			<h6>
				Danh sách bài viết dịch vụ	
			</h6>
		 	<div class="num f12">Số lượng: <b><?php echo $total?></b></div>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			
			<thead class="filter"><tr><td colspan="6">
				<form method="get" action="<?php echo admin_url('dichvu')?>" class="list_filter form">
					<table width="80%" cellspacing="0" cellpadding="0"><tbody>
					
						<tr>
							<td style="width:40px;" class="label"><label for="filter_id">Mã số</label></td>
							<td class="item"><input type="text" style="width:55px;" id="filter_id" value="<?php echo $this->input->get('id')?>" name="id"></td>
							
							<td style="width:40px;" class="label"><label for="filter_id">Tiêu đề</label></td>
							<td style="width:155px;" class="item"><input type="text" style="width:155px;" id="filter_title" value="<?php echo $this->input->get('title')?>" name="title"></td>
						
							<td style="width:150px">
							<input type="submit" value="Lọc" class="button blueB">
							<input type="reset" onclick="window.location.href = '<?php echo admin_url('dichvu')?>'; " value="Reset" class="basic">
							</td>
							
						</tr>
					</tbody></table>
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
					<td style="width:60px;">Mã số</td>
					<td>Tiêu đề</td>
					<td style="width:75px;">Ngày tạo</td>
					<td>Nội dung readmore</td>
					<td style="width:120px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="6">
						 <div class="list_action itemActions">
								<a url="<?php echo admin_url('dichvu/delete_all')?>" class="button blueB" id="submit" href="#submit">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					     <div class="pagination">
					          <?php echo $this->pagination->create_links()?>
			             </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
			     <?php foreach ($list as $row):?>
			     <tr class="row_<?php echo $row->id?>">
					<td><input type="checkbox" value="<?php echo $row->id?>" name="id[]"></td>
					<td class="textC"><?php echo $row->id?></td>
					
					<td>
					<a target="_blank" title="" class="tipS" href="">
					    <b><?php echo $row->title?></b>
					</a>
					</td>
					<td class="textC"><?php echo get_date($row->created)?></td>

					<td class="textC"><?php echo $row->intro?></td>
					
					<td class="option textC">
						 <a title="Xem chi tiết bài viết" class="tipS" target="_blank" href="news/view/9.html">
								
						 </a>
						 
						 <a class="tipS" title="Chỉnh sửa" href="<?php echo admin_url('dichvu/edit/'.$row->id)?>">
							<img src="<?php echo public_url('admin/images')?>/icons/color/edit.png">
						</a>
						
						<a class="tipS verify_action" title="Xóa" href="<?php echo admin_url('dichvu/del/'.$row->id)?>">
						    <img src="<?php echo public_url('admin/images')?>/icons/color/delete.png">
						</a>
					</td>
				</tr>
				<?php endforeach;?>
		   </tbody>
			
		</table>
	</div>
	
</div>



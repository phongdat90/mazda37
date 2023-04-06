<style>
  table tr td
  {
    border:1px solid green;
    padding: 10px;

  }
  a.button
  {
    background: #3B5998;
    border-radius: 5px;
    padding: 10px 10px;
    color:#ffffff;
    display:block;
    margin: 20px;
    width: 100px;
    
    
  }
</style>

<div class="box-center"><!-- The box-center register-->
      <div class="tittle-box-center">
            <h2>Thông tin thành viên</h2>
            </div>
          <div class="box-content-center register"><!-- The box-content-center -->
          	<table>
          		<tr>
          			<td>Họ Tên </td>
          			<td><?php echo $user->name?></td>
          		</tr>
                
              <tr>
                <td>Email </td>
                <td><?php echo $user->email?></td>
              </tr>

               <tr>
                <td>Số điện thoại </td>
                <td><?php echo $user->phone?></td>
              </tr>

              <tr>
                <td>Địa Chỉ </td>
                <td><?php echo $user->address?></td>
              </tr>
              
          	</table>
          <a class="button" href="<?php echo base_url('user/edit')?>">Sửa Thông Tin</a>
    </div>

</div>
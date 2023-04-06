<div class="box-center"><!-- The box-center register-->
             <div class="tittle-box-center">
            <h2>Thành Viên Đăng Nhập</h2>
            </div>
          <div class="box-content-center register"><!-- The box-content-center -->
            <h1>Đăng Nhập</h1>
       <form enctype="multipart/form-data" action="<?php echo base_url('user/login')?>" method="post" class="t-form form_action">
       <h3 style="color:red;"><?php echo form_error('login')?></h3>
            <div class="form-row">
            <label class="form-label" for="param_email">Email:<span class="req">*</span></label>
            <div class="form-item">
              <input name="email" id="email" class="input" type="text" value="<?php echo set_value('email')?>">
              <div class="clear"></div>
              <div id="email_error" class="error"><?php echo form_error('email')?></div>
            </div>
            <div class="clear"></div>
          </div>
          
          <div class="form-row">
            <label class="form-label" for="param_password">Mật khẩu:<span class="req">*</span></label>
            <div class="form-item">
              <input name="password" id="password" class="input" type="password" />
              <div class="clear"></div>
              <div id="password_error" class="error"><?php echo form_error('password')?></div>
            </div>
            <div class="clear"></div>
          </div>
          
         
          <div class="form-row">
            <label class="form-label">&nbsp;</label>
            <div class="form-item">
                    <input name="submit" value="Đăng Nhập" class="button" type="submit">
            </div>
           </div>
            </form>
         </div><!-- End box-content-center register-->
 </div>
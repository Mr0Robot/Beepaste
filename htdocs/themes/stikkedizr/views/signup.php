<?php $this->load->view('defaults/header'); ?>
<div class="row" style="margin-top:20px;">
    <div class="col-6 col-sm-12 col-lg-6" style="margin:0 auto;">
      <form action="" method="post" class="form-vertical well">
      			<div class="col-12 col-sm-12 col-lg-12" style="margin:0 auto;">
					<label for="username">
						<i class="fa fa-user"></i> Username
					</label>
					<?php echo form_error('username', '<div style="color: rgb(224, 63, 63);">', '</div>'); ?>
					<input type="text" name="username" class="form-control" maxlength="32">
				</div>
				<div class="col-12 col-sm-12 col-lg-12" style="margin:0 auto;">
				</br>
					<label for="password">
							<i class="fa fa-lock"></i> Password
					</label>
					<?php echo form_error('password', '<div style="color: rgb(224, 63, 63);">', '</div>'); ?>
					<input type="password" name="password" class="form-control" maxlength="32">
				</div>
				<div class="col-12 col-sm-12 col-lg-12" style="margin:0 auto;">
				</br>
					<label for="confpassword">
							<i class="fa fa-lock"></i> Confirm Password
					</label>
					<?php echo form_error('confpassword', '<div style="color: rgb(224, 63, 63);">', '</div>'); ?>
					<input type="password" name="confpassword" class="form-control" maxlength="32">
				</div>
				<div class="col-12 col-sm-12 col-lg-12" style="margin:0 auto;">
				</br>
					<label for="email">
						<i class="fa fa-envelope-o"></i> Email
					</label>
					<?php echo form_error('email', '<div style="color: rgb(224, 63, 63);">', '</div>'); ?>
					<input type="email" name="email" class="form-control" maxlength="32">
				</div>
				<div class="form-actions col-12 col-sm-12 col-lg-12" style="text-align:center; margin:0 auto;">
					</br>
					<button type="submit" name="submit" value="submit" class="btn btn-large btn-primary" style="width:100%;">
						<i class="icon-pencil icon-white"></i>
						Signup!
					</button>
				</div>
      </form>
    </div>
</div>
<?php $this->load->view('defaults/footer');?>

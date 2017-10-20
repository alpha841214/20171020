<?php $this->load->view('header'); ?>
  
<h1   style="text-align:center;"> Signup </h1>

			<form action="<?php echo base_url('home/signup_validation');?>" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Signup">
				</div>
			</form>

<?php $this->load->view('footer'); ?>
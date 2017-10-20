<?php $this->load->view('header'); ?>
  
<h1   style="text-align:center;"> Login </h1>

<div>

<form action="<?php echo base_url('home/login_validation');?>" method="post">
        <div class="form-group" >
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Your username" required>
        </div>
        
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-default" value="Submit">
        </div>
</form>

<?php $this->load->view('footer'); ?>
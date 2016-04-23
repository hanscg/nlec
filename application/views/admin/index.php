<div class="wrapper-lg modal-center animated fadeInUp text-center r-sm" style="width:350px;margin:-250px 0 0 -200px;">
<div class="container w-xxl w-auto-xs" >
  <div class="header-signin">
    <div class="wrapper-lg text-center navbar-brand text-lt">
        <img src="<?= base_url() ?>assets/NLEC_logo.jpg" alt="" class="large-logo">
    </div>
  </div>
  <div class="m-b-lg wrapper-lg bg-white r-b-sm">
    <div class=" text-left">
      <h4 class="font-bold no-padder m-b-md">Admin</h4>
    </div>
    
    <?php if ($errormsg = $this->session->flashdata('error')) : ?>
      <div class="alert alert-danger">
        <?= $errormsg ?>
      </div>
    <?php endif; ?>

    <?= form_open('admin/authenticateAdmin', array('class' => 'form-validation')) ?>    
      <div class="list-group list-group-sm">

        <div class="form-group">
          <input type="text" placeholder="Username" class="form-control" name="username" required autofocus>
        </div>
        
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control" name="password" required>
        </div>
        
      </div>
      <button type="submit" class="btn btn-lg btn-info btn-block" >SIGN IN</button>

    </form>

  </div>
  
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br/>
      <br/>
      <br/>
      <br/>
      <center><h1><font class="text-primary">SIPSMK</font><br/><small><i>( Sistem Informasi Pengelolaan Surat Masuk & Keluar )</i></small></h1></center><br/>
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <center><h1 class="panel-title"> L O G I N </h1></center>
            </div>
            <div class="panel-body">
              <form class="" action="<?php echo base_url().'login/getLogin' ?>" method="POST">
                <center><font size="45" class="text-primary"><span class="glyphicon glyphicon-lock"></span></font></center>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="username or email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="password">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary form-control" > Enter </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

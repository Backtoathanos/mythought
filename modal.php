<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><a href="#" id="login_show">Login</a></h5>  \   
        <h5 class="modal-title" id="exampleModalLabel"><a href="#" id="signup_show">Signup</a></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="login_form" role="form">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email Or Phone Number</label>
            <input type="text" class="form-control" name="sgemail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" name="lgpass" placeholder="Enter password">
          </div>
          <div class="hidden">
            <input type="hidden" name="login_yet">
          </div>
          <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>

        <!-- signup form -->
        <form id="signup_form" role="form">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" name="sgname" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
            <input type="text" class="form-control" name="sgemail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Phone Number</label>
            <input type="text" class="form-control" name="sgph" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" name="sgpass" placeholder="Enter password">
          </div>
          <div class="hidden">
            <input type="hidden" name="signup_yet">
          </div>
          <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Signup</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Login</button> -->
      </div>
    </div>
  </div>
</div>
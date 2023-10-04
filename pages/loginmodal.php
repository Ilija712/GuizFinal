<?php
    include ("head.php");
?>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in form</h5>
        <button type="button" class="close btn btn-guiz" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form name="logF">
                <label>Username</label>
                <input type="text" id="logUser" class="form-control"/>
                <label>Password</label>
                <input type="password" id="logPass" class="form-control"/>
            </form>
            <p id="ispisLog"></p>
      </div>
      <div class="modal-footer flex justify-content-between">
        <button type="button" class="btn btn-guiz" data-dismiss="modal" data-toggle="modal" data-target="#regModal">Register</button>
        <button form="logF" id="subLog" type="button" class="btn btn-primary">Submit Login</button>
      </div>
    </div>
  </div>
</div>
<!--Drugi modal-->
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registration form</h5>
        <button type="button" class="close btn btn-guiz" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form name="regF">
                <label>Username</label>
                <input type="text" id="regUser" class="form-control"/>
                <label>Email</label>
                <input type="email" id="regMail" class="form-control"/>
                <label>Password</label>
                <input type="password" id="regPass" class="form-control"/>
            </form>
            <p id="odgovor"></p>
      </div>
      <div class="modal-footer flex justify-content-between">
        <button type="button" class="btn btn-guiz" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Log in</button>
        <button form="regF" id="subReg" type="button" class="btn btn-primary">Submit Registration</button>
      </div>
    </div>
  </div>
</div>
<!--Treci modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <?php
                echo '<h5 class="modal-title" id="exampleModalLabel">Logged in as : '.$_SESSION['user']->UserName.'</h5>';
          ?>
        <button type="button" class="close btn btn-guiz" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer flex justify-content-between">
        <button id="logout" type="button" class="btn btn-guiz" value="clicked">Logout</button>
      </div>
    </div>
  </div>
</div>
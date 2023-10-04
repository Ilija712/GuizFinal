<?php
    session_start();
    include ("head.php");
    include ("header.php");
    include ("loginmodal.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
            </div>
            <form class="col-12 col-md-6">
                <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" />
                    <small id="nameNotif" class="form-text text-muted">Incorrect input. Input example: Luke</small>
                </div>
                <div class="form-group">
                    <label for="surnameInput">Surname</label>
                    <input type="text" class="form-control" id="surnameInput" />
                    <small id="surnameNotif" class="form-text text-muted">Incorrect input. Input example: Smith</small>
                </div>
                <div class="form-group">
                    <label for="emailInput">Email address</label>
                    <input type="email" class="form-control" id="emailInput" />
                    <small id="emailNotif" class="form-text text-muted">Incorrect input. Input example:
                        lukesmith@gmail.com</small>
                </div>
                <div class="form-group" id="dynamicDdl">
                </div>
                <div class="form-group">
                    <label for="textInput">Your message</label>
                    <textarea class="form-control" id="textInput" rows="3"></textarea>
                    <small id="txtNotif" class="form-text text-muted">Write your message here!</small>
                </div>
                <button type="submit" class="btn btn-primary mt-2" id="subBtn">Send</button>
            </form>
            <div class="col-12 col-md-3">
            </div>
        </div>
    </div>
<?php
    include ("footer.php");
?>
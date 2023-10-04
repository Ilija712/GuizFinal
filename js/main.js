$(document).ready(function () {
    //registration
    $(document).on('click', '#subReg', function(){
        let username = $('#regUser');
        let email = $('#regMail');
        let password = $('#regPass');
        let errors = 0;
        let regExpUser = /^[\w]{3,20}$/;
        let regExpMail = /^[\w\.]{1,50}@[\w]{1,50}(\.[\w]{2,50}){1,10}$/;
        let regExpPass = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,20}$/;
        if(!regExpUser.test(username.val())){
            errors++;
            username.addClass("formErr");
        }
        else{
            username.removeClass("formErr");
        }
        if(!regExpMail.test(email.val())){
            errors++;
            email.addClass("formErr");
        }
        else{
            email.removeClass("formErr");
        }
        if(!regExpPass.test(password.val())){
            errors++;
            password.addClass("formErr");
        }
        else{
            password.removeClass("formErr");
        }
        if(errors == 0){
            $.ajax({
                url: "registration.php",
                method: "post",
                dataType: "json",
                data: {
                    name : username.val(),
                    mail : email.val(),
                    pass : password.val()
                },
                success: function(data){
                    console.log(data);
                    $('#odgovor').html(`<p class="alert alert-success my-3">${data.poruka}</p>`);
                },
                error: function(xhr){
                    console.error(xhr);
                    // if 500...
                    // if 404...
                }
            });
        }
    })
    //login
    $(document).on('click', '#subLog', function(){
        let username = $('#logUser');
        let password = $('#logPass');
        let errors = 0;
        let regExpUser = /^[\w]{3,20}$/;
        let regExpPass = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,20}$/;
        if(!regExpUser.test(username.val())){
            errors++;
            username.addClass("formErr");
        }
        else{
            username.removeClass("formErr");
        }
        if(!regExpPass.test(password.val())){
            errors++;
            password.addClass("formErr");
        }
        else{
            password.removeClass("formErr");
        }
        if(errors == 0){
            $.ajax({
                url: "login.php",
                method: "post",
                dataType: "json",
                data: {
                    name : username.val(),
                    pass : password.val()
                },
                success: function(data){
                    console.log(data);
                    if(data != null){
                        if(data.roleName == "Admin"){
                            window.location.replace("admin.php");
                        }
                    }
                    if(data != null){
                        if(data.roleName == "User"){
                            window.location.replace("user.php");
                        }
                    }
                    else{
                        $('#ispisLog').html(`<p class="alert alert-success my-3">Wrong credentials</p>`);
                    }
                    
                    
                },
                error: function(xhr){
                    console.error(xhr);
                    // if 500...
                    // if 404...
                }
            });
        }
    })
    //Logout
    $('#logout').click(function() {
        let btnClick = $('#logout').val();
        $.ajax({
          type: "get",
          url: "logout.php",
          data: { btnClk: btnClick },
          success: function(data){
              console.log("hello");
              if(data.msg == "clicked"){
                  console.log("dsds");
                window.location.replace("index.php");
              }
              
          }
        })
      });
});
// Owl Carousel
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        dots: true,
        nav: true,
        navContainer: '.owl-nav',
        dotsContainer: '.owl-dots',
        navText: ['<img src="../img/left.gif"/>',
            '<img src="../img/right.gif"/>']

    });
});
/* Contact html
if (url.indexOf("contact.html") != -1) {
    var ddlList = `<label for="quizInput">Choose your favorite quiz</label>`;
    ddlList += `<select class="form-control" id="quizInput">`;
    var arrayQuiz = ["...", "Minecraft", "League of Legends", "Genshin Impact"];
    for (i = 0; i < 4; i++) {
        ddlList += `<option>${arrayQuiz[i]}</option>`;
    }
    ddlList += "</select>";
    ddlList +=`<small id="quizNotif" class="form-text text-muted">Please choose your favorite quiz.</small>`;
    document.getElementById('dynamicDdl').innerHTML = ddlList;
    var list = document.getElementById('quizInput');
    var reName = /^[A-ZŠĐČĆŽ][a-zšđčćž]{1,20}$/;
    var reEmail = /^[\wšđčćž]{1,50}@[\wšđčćž]{1,50}\.[\wšđčćž]{2,50}$/;
    document.getElementById('subBtn').onclick = function (e) {
        e.preventDefault();
        if (list.options.selectedIndex == 0) {
            document.getElementById('quizNotif').style.display = "block";
        }
        else{
            document.getElementById('quizNotif').style.display = "none";
        }
        if (document.getElementById('nameInput').value.match(reName) == null){
            document.getElementById('nameNotif').style.display = "block";
        }
        else{
            document.getElementById('nameNotif').style.display = "none";
        }
        if (document.getElementById('surnameInput').value.match(reName) == null){
            document.getElementById('surnameNotif').style.display = "block";
        }
        else{
            document.getElementById('surnameNotif').style.display = "none";
        }
        if (document.getElementById('emailInput').value.match(reEmail) == null){
            document.getElementById('emailNotif').style.display = "block";
        }
        else{
            document.getElementById('emailNotif').style.display = "none";
        }
        if (document.getElementById('textInput').value == "") {
            document.getElementById('txtNotif').style.display = "block";
        }
        else{
            document.getElementById('txtNotif').style.display = "none";
        }
    }
}*/
<?php
    session_start();
    include ("head.php");
    include ("header.php");
    include ("loginmodal.php");
?>
<div class="container px-5 d-none d-sm-block">
    <div class="owl-carousel owl-theme owl-loaded">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item"><img src="../img/minecraft.jpg" alt="minecraft" /></div>
                <div class="owl-item"><img src="../img/league.jpg" alt="league" /></div>
                <div class="owl-item"><img src="../img/genshin2.jpg" alt="genshin" /></div>
            </div>
        </div>
        <div class="owl-nav">

        </div>
        <div class="owl-dots">

        </div>
    </div>
</div>
<div class="container">
    <h1 class="text-center mt-5 mb-5">Want to test your gaming knowledge?</h1>
    <h2 class="h4 text-center mt-5 mb-5">Try one of our gaming quizzes right now!</h2>
    <div class="text-center mb-5">
        <a href="quizzes.php"><button type="button" class="btn btn-lg btn-guiz"><p class="px-5 h1">Play now!</p></button></a>
    </div>
</div>
<?php
    include ("footer.php");
?>
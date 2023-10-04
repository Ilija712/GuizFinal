<?php
    session_start();
    include ("head.php");
    include ("header.php");
    include ("loginmodal.php");
    include ("connection.php");
    include ("functions.php");
?>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
            <div class="col-4 my-5">
                <form id="forma1" action="" method="get">
                    <select class="form-control form-control-lg form-control-guiz" name="chooseQuiz" id="chooseQuiz">
                        <option value="0" class="text-center">Choose a quiz</option>
                        <option value="1">Minecraft</option>
                        <option value="2">League of Legends</option>
                        <option value="3">Genshin Impact</option>
                    </select>
                </form>
            </div>
            <div class="col-2 my-5">
                <input type="submit" form="forma1" class="btn btn-lg btn-guiz" name="click" value="Load Quiz"/>
            </div>
        <div class="col-3"></div>
    </div>
    <?php
    ?>
    <div class="container">
        <div class="row">
            <?php
                $mcQuestions = selectQuestions(1);
                $mcAnswers = selectAnswers(1);
                $lolQuestions = selectQuestions(2);
                $lolAnswers = selectAnswers(2);
                $genshQuestions = selectQuestions(3);
                $genshAnswers = selectAnswers(3);
                if(isset($_GET['chooseQuiz'])){
                    switch ($_GET['chooseQuiz']){
                        case 1:
                            echo (printQuiz($mcQuestions, $mcAnswers));
                            break;
                        case 2:
                            echo (printQuiz($lolQuestions, $lolAnswers));
                            break;
                        case 3:
                            echo (printQuiz($genshQuestions, $genshAnswers));
                            break;
                    }
                }
            ?>
        </div>
    </div>
</div>
<?php
    include ("footer.php");
?>
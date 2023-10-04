<?php
    function printQuiz($question, $answer){
        static $k = 0;
        static $j = 4;
        static $i = 0;
        static $g = 5;
        $print="";
        for($z=0; $z<2; $z++){
            $print.="<div class='col-6'>";
            for($i; $i<$g; $i++){
                $print.="<label>".$question[$i]->QuestionText."</label>";
                for($k, $bruh=0; $k<$j; $k++, $bruh++){
                    switch ($bruh) {
                        case 0:
                            $abcd="A";
                            break;
                        case 1:
                            $abcd="B";
                            break;
                        case 2:
                            $abcd="C";
                            break;
                        case 3:
                            $abcd="D";
                            break;
                    }
                    $print.="<div class='paket'>
                                <input type='radio' class='btn-check' value='".$answer[$k]->RightChoice."' name='".$answer[$k]->QuestionId."' id='".$answer[$k]->ChoiceId."'/>
                                <label class='btn btn-outline-guiz m-1' for='".$answer[$k]->ChoiceId."'>".$abcd."</label>
                                <label>".$answer[$k]->Choice."</label>
                            </div>";
                }
                $j+=4;
            }
            $g+=5;
            $print.="</div>";
        }
        return $print;
    }
    function selectQuestions($x){
        global $conn;
        $query="SELECT `QuestionText` 
                FROM `question` INNER JOIN `quiz` ON `question`.`QuizId`=`quiz`.`QuizId`
                WHERE `quiz`.`QuizId`=".$x;
        $questions=$conn->query($query)->fetchAll();
        return $questions;
    }
    function selectAnswers($x){
        global $conn;
        $query="SELECT `Choice`, `RightChoice`, `ChoiceId`, `question`.`QuestionId` FROM `questionchoices` INNER JOIN
                `question` ON `questionchoices`.`QuestionId`=`question`.`QuestionId`
                INNER JOIN `quiz` ON `question`.`QuizId`=`quiz`.`QuizId`
                WHERE `quiz`.`QuizId`=".$x;
        $answers=$conn->query($query)->fetchAll();
        return $answers;
    }
    function insertUser($username, $email, $cryptPass, $roleId){
        global $conn;

        $query = "INSERT INTO `user`(`UserName`, `UserEmail`, `UserPass`, `RoleId`) VALUES (:username, :email, :cryptPass, :roleId)";

        $binding = $conn->prepare($query);
        $binding->bindParam(':username', $username);
        $binding->bindParam(':email', $email);
        $binding->bindParam(':cryptPass', $cryptPass);
        $binding->bindParam(':roleId', $roleId);
        $r = $binding->execute();
        return $r;
    }
    function testLogin($username, $cryptPass){
        global $conn;

        $query = "SELECT * FROM `user` INNER JOIN `role` ON `user`.`RoleId` = `role`.`RoleId` WHERE `UserName` = :username AND `UserPass` = :cryptPass";

        $binding = $conn->prepare($query);
        $binding->bindParam(':username', $username);
        $binding->bindParam(':cryptPass', $cryptPass);
        $binding->execute();
        $r = $binding->fetch();
        return $r;
    }
?>

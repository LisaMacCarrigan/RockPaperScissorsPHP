<?php

    require_once (__DIR__ . "/../src/RockPaperScissors.php");

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_SameMove() {

            //ARRANGE
            $turn = ["Rock", "Rock"];
            $expected_output = 0;
            $rock_paper_scissors_instance = new RockPaperScissors($turn);

            //ACT
            $turn_result = $rock_paper_scissors_instance->evaluateTurn($turn);

            //ASSERT
            $this->assertEquals($expected_output, $turn_result);
        }

        function test_ScissorsVsPaper() {

            //ARRANGE
            $turn = ["Scissors", "Paper"];
            $expected_output = 1;
            $rock_paper_scissors_instance = new RockPaperScissors($turn);

            //ACT
            $turn_result = $rock_paper_scissors_instance->evaluateTurn($turn);

            //ASSERT
            $this->assertEquals($expected_output, $turn_result);
        }


    }

?>

<?php
    class RockPaperScissors
    {
        private $choices = ["Rock", "Paper", "Scissors"];
        // private $players = ["player_one"]

        private $player_one;
        private $player_two;
        private $result;

        function __construct($choices)
        {
            $this->player_one = $choices[0];
            $this->player_two = $choices[1];
            $this->result = 0;
        }

        function getPlayerOneChoice()
        {
            return $this->player_one;
        }

        function setPlayerOneChoice($player_one_choice)
        {
            $this->player_one = $player_one_choice;
        }

        function getPlayerTwoChoice()
        {
            return $this->player_two;
        }

        function setPlayerTwoChoice()
        {
            $this->player_two = $player_two_choice;
        }

        function getResult()
        {
            return $this->result;
        }
        function setResult($outcome)
        {
            $this->result = (int) $outcome;
        }

        function getChoices()
        {
            return $this->choices;
        }

        function setChoices($choice_set)
        {
            $this->choices = $choice_set;
        }


        function getValueOfChoice($choice) {
            for ($choice_index = 0; $choice_index < count($choices); $choice_index++) {
                if ($choices[$choice_index] = $choice) {
                    return $choice_index;
                }
            }
            else {
                print("invalid choice");
                return -1;
            }
        }

        function evaluateTurn($turn_choices)
        {

            return;
        }




    }

?>

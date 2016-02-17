<?php
    class Game
    {
        function threeTwoOne($hand_one, $hand_two = 'computer')
        {
            // sets random input for $hand_two if its the 'computer'

            if ($hand_one == $hand_two) {
                return 'tie';
            } elseif ($hand_one == 'rock') {
                if ($hand_two == 'scissors') {
                    return 'player 1';
                }
                return 'player 2';
            } elseif ($hand_one == 'paper') {
                if ($hand_two == 'rock') {
                    return 'player 1';
                }
                return 'player 2';
            } elseif ($hand_one == 'scissors') {
                if ($hand_two == 'paper') {
                    return 'player 1';
                }
                return 'player 2';
            }
        }
    }
?>

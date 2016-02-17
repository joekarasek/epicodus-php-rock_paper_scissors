<?php
    require_once __DIR__ . '/../src/Game.php';

    class ClassTest extends PHPUnit_Framework_TestCase
    {
        function test_threeTwoOne_tie()
        {
            // Arrange
            $test_Game = new Game;
            $input = 'rock';
            $input2 = 'rock';

            // Act
            $result = $test_Game->threeTwoOne($input , $input2);

            // Assert
            $this->assertEquals('tie', $result);
        }
        function test_threeTwoOne_rockBeatsScissors()
        {
            // Arrange
            $test_Game = new Game;
            $input = 'scissors';
            $input2 = 'rock';

            // Act
            $result = $test_Game->threeTwoOne($input , $input2);

            // Assert
            $this->assertEquals('player 2', $result);
        }
        function test_threeTwoOne_scissorsBeatsPaper()
        {
            // Arrange
            $test_Game = new Game;
            $input = 'paper';
            $input2 = 'scissors';

            // Act
            $result = $test_Game->threeTwoOne($input , $input2);

            // Assert
            $this->assertEquals('player 2', $result);
        }
        function test_threeTwoOne_paperBeatsRock()
        {
            // Arrange
            $test_Game = new Game;
            $input = 'paper';
            $input2 = 'rock';

            // Act
            $result = $test_Game->threeTwoOne($input , $input2);

            // Assert
            $this->assertEquals('player 1', $result);
        }
    }
 ?>

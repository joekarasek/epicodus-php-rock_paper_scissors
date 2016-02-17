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
    }
 ?>

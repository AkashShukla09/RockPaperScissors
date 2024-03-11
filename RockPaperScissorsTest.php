<?php
use PHPUnit\Framework\TestCase;

require_once 'RockPaperScissors.php'; // Include the RockPaperScissors class file

class RockPaperScissorsTest extends TestCase {
    public function testCalculateWinner() {
        $game = new RockPaperScissors();

        // Rock beats scissors
        $this->assertEquals('player1', $game->fetchWinner('rock', 'scissors'));

        // Paper beats rock
        $this->assertEquals('player2', $game->fetchWinner('rock', 'paper'));

        // Scissors beats paper
        $this->assertEquals('player1', $game->fetchWinner('scissors', 'paper'));

        // Draw
        $this->assertEquals('draw', $game->fetchWinner('rock', 'rock'));
    }
}

?>
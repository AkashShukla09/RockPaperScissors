<?php
class RockPaperScissors {
    private $choices = ['rock', 'paper', 'scissors'];
    private $rounds;
    private $player1Wins = 0;
    private $player2Wins = 0;
    private $draws = 0;

    public function __construct($rounds = 100) {
        $this->rounds = $rounds;
    }

    public function play() {
        for ($i = 0; $i < $this->rounds; $i++) {
            $player1Choice = 'rock';
            $player2Choice = $this->choices[array_rand($this->choices)];

            $result = $this->fetchWinner($player1Choice, $player2Choice);

            switch ($result) {
                case 'player1':
                    $this->player1Wins++;
                    break;
                case 'player2':
                    $this->player2Wins++;
                    break;
                case 'draw':
                    $this->draws++;
                    break;
            }
        }

        $this->displayStatistics();
    }

    // this can be further extended with new rules in future if required 
    public function fetchWinner($player1Choice, $player2Choice) {
        if ($player1Choice === $player2Choice) {
            return 'draw';
        }

        if (
            ($player1Choice === 'rock' && $player2Choice === 'scissors') ||
            ($player1Choice === 'paper' && $player2Choice === 'rock') ||
            ($player1Choice === 'scissors' && $player2Choice === 'paper')
        ) {
            return 'player1';
        }

        return 'player2';
    }

    private function displayStatistics() {
        echo "Player 1 Wins: " . $this->player1Wins . PHP_EOL;
        echo "Player 2 Wins: " . $this->player2Wins . PHP_EOL;
        echo "Draws: " . $this->draws . PHP_EOL;
    }
}

// calling play function
$game = new RockPaperScissors();
$game->play();
?>
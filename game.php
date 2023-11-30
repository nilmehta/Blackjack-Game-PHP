<?php

function pickCard($suits, $numbers) {

    $randSuit = $suits[array_rand($suits)];
    $randNum = array_rand($numbers);

    return ['card' => $randSuit . '-' . $randNum, 'value' => $numbers[$randNum]];
}

function deal() {

    $suits = ['diamonds', 'hearts', 'clubs', 'spades'];
    $numbers = [
        'ace' => 11,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'jack' => 10,
        'queen' => 10,
        'king' => 10
    ];


    $card1 = pickCard($suits, $numbers);
    $card2 = pickCard($suits, $numbers);


    displayCard($card1['card']);
    displayCard($card2['card']);

    $score = displayScore($card1['value'], $card2['value']);

    return $score;
}


function displayCard($card) {
    echo '<div class="card ' . $card . '"><span></span></div>';
}

function displayScore($card1, $card2) {
    $score = $card1 + $card2;
    echo '<div class="score">Score: <strong>' . $score . '</strong>';
    echo ($score == 22 ? ' Bust!':'');
    echo '</div>';
    return $score;
}

function calcWinner($p1Score, $p2Score) {

    if ($p1Score ==  $p2Score) {
        return '<h3>Draw!</h3>';
    } else if ($p1Score == 22) {
        return '<h3>Player 2 wins!</h3>';
    } else if ($p1Score > $p2Score || $p2Score == 22) {
        return '<h3>Player 1 wins!</h3>';
    } else {
        return '<h3>Player 2 wins!</h3>';
    }
}


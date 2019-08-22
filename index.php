<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <!-- css file here -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
        <title>My quiz app</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="app">
            <section>
            <h1>How much do you know about our earth?</h1>
            </section>
            <?php
              // questions asked and possible answers
              $quiz[] = [
                'question' => 'what is the largest living animal',
                'answer' => [
                    'elephant',
                    'blue_whale',
                    'giraffe',
                    'buffalo'
                ]
                ];
                $quiz[] = [
                'question' => 'Against which illness do you use insuline',
                'answer' => [
                    'high_blood_pressure',
                    'adiposity',
                    'diabetes',
                    'cardiac_infection'
                ]
                ];
                $quiz[] = [
                'question' => 'what is the biggest city in USA according to the mass of metropolitan area?',
                'answer' => [
                    'Los Angeles',
                    'New york',
                    'chicago',
                    'san diego'
                ]
                ];
                $quiz[] = [
                'question' => 'which word does the "e" in e-mail stand for?',
                'answer' => [
                    'explain',
                    'electronic',
                    'execute',
                    'exact'
                    ]
                ];
                $quiz[] = [
                'question' => 'how much % of the world is covered with water?',
                'answer' => [
                    '92%',
                    '63%',
                    '37%',
                    '71%'
                ]
                ];
                $quiz[] = [
                'question' => 'which is the longest river in the world' ,
                'answer' => [
                    'nile',
                    'congo',
                    'mississipi',
                    'amazon'
                ]
                ];
                $quiz[] = [
                'question' => 'how many teeth does an adult human usually have?' ,
                'answer' => [
                    '12-16',
                    '16-24',
                    '28-32',
                    '32-36'
                ]
                ];
                $quiz[] = [
                'question' => 'who developed the theory of evolution?' ,
                'answer' => [
                    'Isaac Newton',
                    'Charles Darwin',
                    'Pythagore',
                    'Davinci'
                ]
                ];
                $quiz[] = [
                'question' => 'which one of this animal is a fish?' ,
                'answer' => [
                    'Shark',
                    'Whale',
                    'Dolphin',
                    'Seal'
                ]
                ];
                $quiz[] = [
                'question' => 'which one of these numbers is without rest divisable through the numbers : 1,2,3,4,5,6?' ,
                'answer' => [
                    '42',
                    '40',
                    '60',
                    '128'
                ]
                ]; 
            ?>
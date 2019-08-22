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
                $quiz[] = [
                    'question' => 'what is the oldest known story in the world?',
                    'answer' => [
                        'The Bible',
                        'The Histories',
                        'The Epic of Gilgamesh',
                        'The Odyssey'
                    ]
                    ];
                    $quiz[] = [
                    'question' => 'what was the first country to give women the vote in 1893?',
                    'answer' => [
                        'America',
                        'Australia',
                        'New Zealand',
                        'Iceland'
                    ]
                    ];
                    $quiz[] = [
                    'question' => 'which country did Germany invade on the 1st of September 1939?',
                    'answer' => [
                        'France',
                        'Czechoslovakia',
                        'Poland',
                        'Finland'
                    ]
                    ];
                    $quiz[] = [
                    'question' => 'The number one cause of tropical deforestation worldwide is:',
                    'answer' => [
                        'commercial logging',
                        'wildfire',
                        'clearing of lands for agricultural use',
                        'gathering of firewood'
                        ]
                    ];
                    $quiz[] = [
                    'question' => 'The estimated world population in the year 2050 is about:',
                    'answer' => [
                        '3.4 billion',
                        '6.8 billion',
                        '9.3 billion',
                        '11.5 billion'
                    ]
                    ];
                    $quiz[] = [
                    'question' => 'The population of the world is currently increasing at a rate of 8,600 people per _______.' ,
                    'answer' => [
                        'month',
                        'week',
                        'hour',
                        'year'
                    ]
                    ];
                    $quiz[] = [
                    'question' => 'The population of the world in 1950 was about 2.6 billion. The world population is currently about:' ,
                    'answer' => [
                        '3.4 billion',
                        '6.8 billion',
                        '9.3 billion',
                        '11.5 billion'
                    ]
                    ];
                    $quiz[] = [
                    'question' => 'roughly how old is earth?' ,
                    'answer' => [
                        '4.54 million years',
                        '4.54 billion years',
                        '6,000 years',
                        'older than the sun'
                    ]
                    ];
                    $quiz[] = [
                    'question' => '67,000 mph (107,826 km/h) represents what speed?' ,
                    'answer' => [
                        'Earths orbit around the sun',
                        'Earths rotation about its axis',
                        'Earths movement through the milky way',
                        'The moons orbit around Earth'
                    ]
                    ];
                    $quiz[] = [
                    'question' => 'earth is?' ,
                    'answer' => [
                        'flat',
                        'spherical',
                        'oblate spheroid',
                        'none of the above'
                    ]
                    ];
                    // arrays
                    $answerName = array('question1','question2','question3','question4','question5','question6','question7','question8','question9','question10', 'question11', 'question12', 'question13', 'question14', 'question15', 'question16', 'question17', 'question18', 'question19', 'question20');
                    $number = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20');
                    for($i = 0; $i < count($quiz); ++$i){
                    $outputquestion = "<h3>".$number[$i].')'.$quiz[$i]['question']."</h3>";
                    echo $outputquestion; 
            ?>
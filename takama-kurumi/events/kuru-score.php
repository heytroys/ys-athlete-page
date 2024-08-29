<?php

include '../../library.php'; 

$pdo = get_db_connection();

$player_name = 'kurumi';

$db_in = $pdo->prepare("SELECT * FROM voll_players WHERE player_name = :player_name ORDER BY year DESC");

$db_in->bindParam(':player_name', $player_name);

$db_in->execute();

$results = $db_in->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手成績 | 高間来瞳 Astemoリヴァーレ茨城 ファンページ 女子バレー</title>

    <link rel="shortcut icon" href="../assets/images/favicon.png" />

     <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

    <!-- 自作css -->
    <link rel="stylesheet" href="../assets/css/body.css">

    <!-- html直書き、cssの一部分だけ。-->

    <style>
        #score {
            padding-top: 200px;
        }

        #score img {
            border-radius: 7px;
        }

        #score h2 {
            display: inline-block;
            border-bottom: 2px solid #555;
        }

        .score-tb {
            border: solid 2px #f08080;
            margin: 15px auto 80px auto;
        }

        .score-tb th {
            border-right: solid 1px #888;
            border-bottom: solid 2px #888;
        }

        .score-tb th:last-child {
            border-right: none;
        }

        .score-tb td {
            border-right: solid 1px #888;
            border-bottom: solid 1px #888;
        }

        .score-tb td:last-child {
            border-right: none;
        }
    </style>

</head>

    <body>
        
   
        <!-- header 読み込み-->

        <?php

        require('kuru-navbar.php');

        ?>


       <!-- main -->
   
       <div class="container2 m-auto">

        <section id="score">
            <h2 class="text-left fs-2 pb-2 mt-2 pb-2 mb-4">選手成績</h2>
            <div class="news-img text-center mw-100 mb-5">
                <img src="../assets/images/events-images/news.jpg" class="w-100" alt="選手成績 日立Astemoリヴァーレ 15 高間来瞳">
            </div>
            
            <table class="score-tb">
                <tr>
                    <th class="text-center p-2">年度</th>
                    <th class="text-center p-2">試合数</th>
                    <th class="text-center p-2">サーブポイント</th>
                    <th class="text-center p-2">スパイクポイント</th>
                    <th class="text-center p-2">ブロックポイント</th>
                </tr>

                <?php foreach ($results as $row): ?>
                    <tr>
                        <td class="text-center p-2"><?php echo htmlspecialchars($row['year']); ?></td>
                        <?php if ($row ['matches_played'] === -1): ?>
                            <td class="text-center p-2">--</td>
                        <?php else: ?>
                            <td class="text-center p-2"><?php echo htmlspecialchars($row['matches_played']); ?></td>
                        <?php endif; ?>

                        
                        <?php if ($row ['serve_points'] === -1): ?>
                            <td class="text-center p-2">--</td>
                        <?php else: ?>
                            <td class="text-center p-2"><?php echo htmlspecialchars($row['serve_points']); ?></td>
                        <?php endif; ?>

                        <?php if ($row ['spike_points'] === -1): ?>
                            <td class="text-center p-2">--</td>
                        <?php else: ?>
                            <td class="text-center p-2"><?php echo htmlspecialchars($row['spike_points']); ?></td>
                        <?php endif; ?>

                        <?php if ($row ['block_points'] === -1): ?>
                            <td class="text-center p-2">--</td>
                        <?php else: ?>
                            <td class="text-center p-2"><?php echo htmlspecialchars($row['block_points']); ?></td>
                        <?php endif; ?>
                    </tr>

                <?php endforeach; ?>
            </table>

            <p>※ 年度欄は、リーグが開幕した年</p>

            
        </section>
           
       </div>
   
   
       <!-- footer 読み込み -->

       <?php

       require('kuru-footer.php');

       ?>
   
   
   
       <!-- jquery -->
   
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
       <script src="../assets/js/script.js"></script>
   
   </body>
   </html>
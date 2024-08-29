<?php

include '../../library.php';

$pdo = get_db_connection();

$player_name = 'daichi';

$db_in = $pdo->prepare("SELECT * FROM base_players WHERE player_name = :player_name ORDER BY year DESC");

$db_in->bindParam(':player_name', $player_name);

$db_in->execute();

$results = $db_in->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手成績 | 石井大智 阪神タイガース ファンページ</title>

    <link rel="shortcut icon" href="../assets/images/favicon.png" />

    <!-- Google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- 自作 css -->
     <link rel="stylesheet" href="../assets/css/body.css">

    <!-- jquery 読み込み -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 自作js 読み込み -->

    <script src="../assets/js/script.js"></script>

</head>
<body>

<div id="container">

<!-- header 読み込み -->

<?php

require('navbar-dai.php');

?>


<main>

<section id="dai-score" class="m-auto">
        <div class="dai-score-inner p-3 ps-4 pe-4 pb-4 text-center">
            <h2 class="score-title fs-2 mb-4">選手成績</h2>

            <div class="dai-score-img mb-5">
                <img src="../assets/images/daichi-score.jpg" alt="">
            </div>

            <h3 class="mb-3">1軍成績</h3>

            <table class="score-table m-auto mb-4">
                <tr>
                    <th class="text-center p-2">年度</th>
                    <th class="text-center p-2">登板数</th>
                    <th class="text-center p-2">投球回</th>
                    <th class="text-center p-2">防御率</th>
                    <th class="text-center p-2">勝</th>
                    <th class="text-center p-2">負</th>
                    <th class="text-center p-2">ホールド</th>
                    <th class="text-center p-2">セーブ</th>
                </tr>

                <?php foreach ($results as $row): ?>

                <tr>
                    <?php if ($row ['army'] === 1): ?>
                        <td class="text-center p-2"><?php echo htmlspecialchars($row['year']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['matches_played'] === -1 and $row ['army'] === 1): ?>

                        <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 1): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['matches_played']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['ining'] === -1 and $row ['army'] === 1): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 1): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['ining']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['defence_rate'] === -1 and $row ['army'] === 1): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 1): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['defence_rate']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['win_points'] === -1 and $row ['army'] === 1): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 1): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['win_points']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['lose_points'] === -1 and $row ['army'] === 1): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 1): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['lose_points']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['hold_points'] === -1 and $row ['army'] === 1): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 1): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['hold_points']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['save_points'] === -1 and $row ['army'] === 1): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 1): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['save_points']); ?></td>

                    <?php endif; ?>

                    
                    </tr>

                <?php endforeach; ?>
            </table>

            <h3 class="mb-3">2軍成績</h3>

            <table class="score-table m-auto mb-4">
                <tr>
                    <th class="text-center p-2">年度</th>
                    <th class="text-center p-2">登板数</th>
                    <th class="text-center p-2">投球回</th>
                    <th class="text-center p-2">防御率</th>
                    <th class="text-center p-2">勝</th>
                    <th class="text-center p-2">負</th>
                    <th class="text-center p-2">ホールド</th>
                    <th class="text-center p-2">セーブ</th>
                </tr>

                <?php foreach ($results as $row): ?>

                <tr>
                    
                    <?php if ($row ['army'] === 2): ?>
                        <td class="text-center p-2"><?php echo htmlspecialchars($row['year']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['matches_played'] === -1 and $row ['army'] === 2): ?>

                        <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 2): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['matches_played']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['ining'] === -1 and $row ['army'] === 2): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 2): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['ining']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['defence_rate'] === -1 and $row ['army'] === 2): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 2): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['defence_rate']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['win_points'] === -1 and $row ['army'] === 2): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 2): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['win_points']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['lose_points'] === -1 and $row ['army'] === 2): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 2): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['lose_points']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['hold_points'] === -1 and $row ['army'] === 2): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 2): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['hold_points']); ?></td>

                    <?php endif; ?>

                    <?php if ($row ['save_points'] === -1 and $row ['army'] === 2): ?>

                    <td class="text-center p-2">--</td>

                    <?php elseif ($row ['army'] === 2): ?>

                    <td class="text-center p-2"><?php echo htmlspecialchars($row['save_points']); ?></td>

                    <?php endif; ?>

                    
                    </tr>

                <?php endforeach; ?>
            </table>
            </div>
        </section>



</main>

<?php

    require('dai-footer.php');

?>

    </div>

</body>
</html>
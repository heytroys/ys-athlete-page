<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手情報 | 石井大智 阪神タイガース ファンページ</title>

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

<section id="dai-info" class="m-auto mb-5">
        <div class="dai-info-inner p-3 ps-4 pe-4 pb-4">
            <h2 class="info-title text-center fs-2 mb-4">選手情報</h2>

            <div class="dai-info-img mb-5">
                <img src="../assets/images/daichi-info.jpg" alt="">
            </div>

            <table class="info-table m-auto">
                <tr>
                    <td class="topi fs-5 text-center fw-bold p-2">選手名</td>
                    <td class="fs-5 text-center p-2">石井大智</td>
                </tr>

                <tr>
                    <td class="topi fs-5 text-center fw-bold p-2">所属チーム</td>
                    <td class="fs-5 text-center p-2">阪神タイガース</td>
                </tr>

                <tr>
                    <td class="topi text-center fs-5 fw-bold p-2">背番号</td>
                    <td class="fs-5 text-center p-2">69</td>
                </tr>

                <tr>
                    <td class="topi text-center fs-5 fw-bold p-2">生年月日</td>
                    <td class="fs-5 text-center p-2">1997年7月29日(27歳)</td>
                </tr>

                <tr>
                    <td class="topi text-center fs-5 fw-bold p-2">ポジション</td>
                    <td class="fs-5 text-center p-2">投手</td>
                </tr>
                <tr>
                    <td class="topi fs-5 text-center fw-bold p-2">出身</td>
                    <td class="fs-5 text-center p-2">秋田</td>
                </tr>

                <tr>
                    <td class="topi text-center fs-5 fw-bold p-2">年数</td>
                    <td class="fs-5 text-center p-2">4年目</td>
                </tr>
                <tr>
                    <td class="topi text-center fs-5 fw-bold p-2">経歴</td>
                    <td class="fs-5 text-center p-2">秋田高専-四国独立・高知-阪神</td>
                </tr>

                <tr>
                    <td class="topi text-center fs-5 fw-bold p-2">登場曲</td>
                    <td class="fs-5 text-center p-2">高橋優「HighFive」</td>
                </tr>

                <tr>
                    <td class="topi text-center fs-5 fw-bold p-2">球種</td>
                    <td class="fs-5 text-center p-2">ストレート・シンカー・フォーク・スライダー・ナックルカーブ</td>
                </tr>
                <tr>
                    <td class="topi text-center td-last fs-5 fw-bold p-2">選手紹介</td>
                    <td class="td-last fs-5 p-2 text-left">1997年秋田県秋田市に生まれる。小学校3年で地元の旭川スポーツ少年団で野球を始める。<br>
                        その後、高校は秋田工業高等学校(5年制)に進み、高校3年で野球部引退後も、残りの2年間トレーニングを続けた。<br>
                        高校5年のとき、秋田市立秋田東中学校時代にチームメイトだった、成田翔(元ロッテ、ヤクルト-現・全川崎クラブ)がプロ入り。<br>
                        このことをきっかけにプロを目指すようになり、当時決まっていた内定先を断り、野球を続けることを決断。<br>
                        その年の11月に実施された四国アイランドリーグのトライアウトを受験、高知ファイティングドックスへの入団が決まる。<br>
                        入団当時の最速は136-137キロだったが、1年目から試合に出場し防御率2.08を記録。<br>
                        その年のオフにみやざきフェニックスリーグの四国リーグ選抜チームにも選出された。2年目には、リーグの奪三振王を獲得。<br>
                        3年目の9月には、自身最速となる153キロを計測。その年の10月、阪神からドラフト8位で指名を受け入団した。プロ1年目は1軍に18試合登板するも防御率が6点代に終わり、2年目も18試合投げ防御率0点代を記録するも、<br>
                        プロ初勝利はならず。迎えた3年目、開幕から好投を続け日本プロ野球界で初となる、高専出身選手初勝利を達成。<br>
                        ホールド数もチームのリリーフ全体で2番目に多い、19ホールドを記録した。<br>
                        今年も最速155キロのストレートと、シンカー、フォークなどを武器に、阪神の勝ちパターンを担う。
                        
                    </td>
                </tr>
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
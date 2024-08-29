<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手情報 | 高間来瞳 Astemoリヴァーレ茨城 ファンページ 女子バレー</title>

    <link rel="shortcut icon" href="../assets/images/favicon.png" />

     <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

    <!-- 自作css -->
    <link rel="stylesheet" href="../assets/css/body.css">

    <style>
    #info {
        padding-top: 200px;
    }

    #info h2 {
        display: inline-block;
        border-bottom: 2px solid #555;
    }

    #info .info-img img {
        border-radius: 7px;
    }

    .info-tb {
        border: solid 2px #f08080;
        margin: 15px auto 80px auto;
    }

    .info-tb td {
        border-right: solid 1px #888;
        border-bottom: solid 1px #888;
    }

    .info-tb td:last-child {
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

        <section id="info">
            <h2 class="fs-2 pb-2 mt-2 mb-4">選手情報</h2>
            <div class="info-img text-center mw-100 mb-5">
                <img src="../assets/images/events-images/info.jpg" class="w-100" alt="選手情報 日立Astemoリヴァーレ 15 高間来瞳">
            </div>

            <table class="info-tb">

                <tr>
                    <td class="text-center fw-bold p-2">選手名</td>
                    <td class="text-center p-2">高間来瞳</td>
                </tr>

                
                <tr>
                    <td class="text-center fw-bold p-2">所属チーム</td>
                    <td class="text-center p-2">Astemoリヴァーレ茨城</td>
                </tr>

                <tr>
                    <td class="text-center fw-bold p-2">背番号</td>
                    <td class="text-center p-2">15</td>
                </tr>
                   

                <tr>
                    <td class="text-center fw-bold p-2">出身地</td>
                    <td class="text-center p-2">愛知県岡崎市</td>
                </tr>

                <tr>
                    <td class="text-center fw-bold p-2">生年月日</td>
                    <td class="text-center p-2">1999年8月24日</td>
                </tr>

                <tr>
                    <td class="text-center fw-bold p-2">ポジション</td>
                    <td class="text-center p-2">アウトサイドヒッター</td>
                </tr>

                <tr>
                    <td class="text-center fw-bold p-2">経歴</td>
                    <td class="text-center p-2">
                    岡崎学園高校(2015年～)<br>
                    筑波大学(2018年～)<br>
                    Astemoリヴァーレ茨城(2022年～)
                </td>
                </tr>

       

       

       

            
                
</table>
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
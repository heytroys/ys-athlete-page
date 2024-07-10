

// header-list の、設定(三本線など)。

$(document).ready(function() {
    var prevDisplayState = 'none'; // 前の状態でのdisplayを記録

    $('.open-btn1').click(function() {
        if ($('.header-list').is(':hidden')) {
            // .header-list をスライドダウンで表示する

            $('.header-list').slideDown(function() {
                $(this).css('display', 'block');
                $(this).css('height', 'auto');
                $(this).addClass('active'); // クラスを追加してアニメーションをトリガー
            });
            $(this).addClass('active');
            prevDisplayState = 'block';
        } else {
            // .header-list をスライドアップで非表示にする(アニメーション付き)
            $('.header-list').slideUp('slow', function() {
                $(this).css('height', 0);
                $(this).css('display', 'none');
                $(this).removeClass('active'); // クラスを削除
            });
            // open-btn1 から 'active' クラスを削除する
            $('.open-btn1').removeClass('active');
            prevDisplayState = 'none';
        }
    });

    // ウィンドウのリサイズイベントを処理

    $(window).resize(function() {
        var width = $(window).width();
        if (width > 768) {
            $('.header-list').css({
                'display': 'flex',
                'height': 'auto'
            });
            $('.open-btn1').removeClass('active');
        
        } else {
            // モバイルサイズに戻る時にメニューを閉じる

            $('.header-list').css({
                'display': 'none',
                'height': 0
            }).removeClass('active');
            $('.open-btn1').removeClass('active');
        }
    }).resize(); // 初回ロード時にリサイズイベントをトリガー
});




// スクロールを促す矢印の設定

document.querySelectorAll('.arrow-inner').forEach((arrow, index) => {
    arrow.addEventListener('click', () => {
        const nextPhoto = document.querySelectorAll('.main-img')[index + 1];
        if(nextPhoto) {
            window.scroll({
                top: nextPhoto.offsetTop,
                behavior: 'smooth'
            });
        }
    });
});


window.addEventListener('scroll', () => {
    document.querySelectorAll('.arrow-inner').forEach((arrow) => {
            const photoTop = arrow.parentElement.offsetTop;
            if(window.scrollY > photoTop - window.innerHeight + 100) {
                arrow.classList.add('delete');
            }
    });
});




// スクロールしたら写真を表示
 
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.2 // 20%表示されたらフェードイン
});

document.querySelectorAll('.main-img').forEach(photo => {
    observer.observe(photo);
});






window.addEventListener('load', function() {

    this.setTimeout(function() {
        const s_logo = document.getElementById('s-logo');
        s_logo.style.opacity = '0';
        s_logo.style.pointerEvents = 'none';

    // 少し遅れてフェードイン
        setTimeout(function() {
            const wrapper = document.getElementById('wrapper');
            wrapper.style.opacity = '1';
        }, 1000);
    }, 3000)
    // ロゴのフェードアウト

});

// ハンバーガメニュー

$(function() {
    const hum = $('#hamburger, .close');
    const nav = $('.sp-nav');

    hum.on('click', function() {
        nav.toggleClass('toggle');
    });
});


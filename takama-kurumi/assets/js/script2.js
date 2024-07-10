'use-strict';
{
    const $header_sub = document.getElementById('header-sub');
    $header_sub.insertAdjacentHTML('afterbegin', ` <!-- open btn -->
         <div class="open-btn1">
           <span></span>
           <span></span>
           <span></span>
       </div>
        <header id="header" class="w-100 d-flex text-white justify-content-between z-2 py-3">
        <h1 class="header-title fs-1 ps-3"><span class="sub-title">HitachiAstemoRivale</span><br>
            高間来瞳<br>
            <span class="sub-title ps-2">fanpage</span></h1>
        <ul class="header-list list-unstyled pe-2">
            <li class="ms-3 mt-2"><a href="../index.html" class="text-decoration-none text-white fs-5">トップ</a></li>
            <li class="ms-3 mt-2"><a href="kuru-info.html" class="text-decoration-none text-white fs-5">選手情報</a></li>
            <li class="ms-3 mt-2"><a href="kuru-news.html" class="text-decoration-none text-white fs-5">ニュース</a>
            
                <ul class="sub-list">

                </ul>
            </li>
        </ul>
</header>`);
}

{
    const $footer_sub = document.getElementById('footer-sub');
    $footer_sub.insertAdjacentHTML('afterbegin', `  
    <footer class="footer text-center my-2">
        <p>&copy;takama-kurumi-fanpage</p>
    </footer> `);
}
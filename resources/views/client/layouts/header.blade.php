<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="/"><img src="/assets/client/images/logo.png" alt="" style="width: 300px;height: 50px;"></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="/">Trang chủ</a></li>
                        <li class="{{ (Request::is('product') ? 'active' : '') }}"><a href="/product" class="menu-product">Sản phẩm</a></li>
                        <li class="{{ (Request::is('about') ? 'active' : '') }}"><a href="/about">Giới thiệu</a></li>
                        <li class="{{ (Request::is('contact') ? 'active' : '') }}"><a href="/contact"><a href="/contact">Liên hệ</a></li>
                        <li class="{{ (Request::is('cart') ? 'active' : '') }}"><a href="/cart"><i class="icon-shopping-cart"></i> Giỏ hàng [0]</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
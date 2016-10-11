<?php include('./header.php')?>
<!-- 图片轮播 -->
    <div id="touchSlider">
        <ul>
            <li style="background: url('imgs/home_top1.jpg') no-repeat center; background-size: cover; "></li>
            <li style="background: url('imgs/home_top1.jpg') no-repeat center; background-size: cover;"></li>
            <li style="background: url('imgs/home_top1.jpg') no-repeat center; background-size: cover;"></li>
        </ul>
    </div>
    <div class="btn_area">
        <button type="button" class="btn_prev" ></button>
        <button type="button" class="btn_next" ></button>
    </div>

<!-- 登录 -->
<div class="logo-bar">
    <div class="center">
        <div class="logo-background">
            <p class="title">用户登录</p>
            <p class="title-en">User login</p>
            <div class="input-box name">
                <img src="imgs/logo_username.png">
                <input type="text" placeholder="账户名">
            </div>
            <div class="input-box password">
                <img src="imgs/logo_password.png">
                <input type="text" placeholder="密码">
            </div>
            <div class="input-box code">
                <img src="imgs/logo_verification.png">
                <input type="text" placeholder="验证码">
                <span id="idcode" style="position: absolute; top: 0; right: 0;"></span>
            </div>
            <div class="verification-btn">看不清？点击刷新</div>
            <div class="des-btn">
                <a id="logo">登录</a>
                <a id="register">注册</a>
            </div>
        </div>
    </div>
</div>

<!-- 客户端下载 -->
<div class="download">
    <div class="download-message">
        <div class="title">
            <p>客户端下载</p>
            <p>Client download</p>
        </div>
        <div class="download-des">
            <img src="imgs/home_download.png">
            <div class="right">
                <p class="one">获取汇信pc应用程序</p>
                <a class="two">PC端下载</a>
                <p class="three">汇众,世界外汇微交易交易的先驱和市场领导者，自豪地率先实现了您移动设备的外汇微交易交易，无论您在哪里均可进行实时交易。</p>
                <p class="four">登录您的汇众账户并紧密跟进市场趋势,随时对冲您的投资方向。外汇，指数，股票和商品的看涨和看跌外汇微交易。</p>
                <p class="five">超过100个市场无限制的免费报价，无需佣金,没有价差,没有任何隐藏费用，管理和访问您的帐户。</p>
            </div>
        </div>
    </div>
</div>

<!-- 6大选择理由 -->
<div class="choose">
    <div class="choose-reason">
        <div class="title">
            <p>选择汇众的6大理由</p>
            <p>Why choose us</p>
        </div>

        <div class="choose-list">
            <div class="reason">
                <img src="imgs/home_one.png">
                <p>出金快</p>
            </div>
            <div class="reason">
                <img src="imgs/home_two.png">
                <p>客服快</p>
            </div>
            <div class="reason">
                <img src="imgs/home_three.png">
                <p>系统快</p>
            </div>
            <div class="reason">
                <img src="imgs/home_four.png">
                <p>用户多</p>
            </div>
            <div class="reason">
                <img src="imgs/home_five.png">
                <p>奖品多</p>
            </div>
            <div class="reason">
                <img src="imgs/home_six.png">
                <p>信誉好</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.idcode.js"></script>
<script type="text/javascript" src="js/jquery.event.drag-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery.touchSlider.js"></script>

<script>
    $("#home").addClass("active");

    $.idcode.setCode();   //加载生成验证码方法

    $(".verification-btn").click(function () {
        $.idcode.setCode();
    })

    $("#touchSlider").touchSlider({
        speed:500,
        btn_prev : $(".btn_prev"),
        btn_next : $(".btn_next")
    });

    var timer = setInterval(function () {
        $(".btn_next").click();
    }, 4000);

    $("#touchSlider").bind("touchstart", function () {
        clearInterval(timer);
    }).bind("touchend", function () {
        timer = setInterval(function () {
            $(".btn_next").click();
        }, 4000);
    });

    $("#touchSlider").hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(function () {
            $(".btn_next").click();
        }, 4000);
    });


</script>

<?php include('./footer.php')?>
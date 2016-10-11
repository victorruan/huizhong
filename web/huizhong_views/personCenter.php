<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href = "css/reset.css">
    <link rel="stylesheet" type="text/css" href = "css/person.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <title>汇众HUIZHONG</title>
</head>
<body>
<div class="content">
    <div class="top-bar">
        <div class="center">
            <img src="imgs/personCenter_logo.png">
            <div class="person-mesage">
                <p class="account">账号： 1018021380 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</p>
                <p class="name">姓名：模拟账号 &nbsp;&nbsp;&nbsp;&nbsp;|</p>
                <p class="logo-out"><a>退出</a></p>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="center">
            <div class="left-bar">
                <img src="imgs/personCenter_logo1.png">
                <a id="myaccount-bar" class="active">我的账户</a>
                <a id="inaccount-bar">账户入金</a>
                <a id="inaccount-list">入金记录</a>
                <a id="outaccount-bar">账户出金</a>
                <a id="outaccount-list">出金记录</a>
            </div>
            <div class="right-bar">
                <div class="myaccount-bar">
                    <div class="title-bar">
                        <img src="imgs/personCenter_bar.png">
                        <p class="title">我的账户</p>
                    </div>
                    <div class="one-list one">
                        <span class="left-des">余额：4463.40</span>
                        <span class="right-des">开户时间：2016-09-21 09:35:00</span>
                    </div>
                    <div class="one-list two">
                        <span class="left-des">EQUITY：4463.40</span>
                        <span class="right-des">MARGIN：0.00</span>
                    </div>
                    <div class="one-list three">
                        <span class="left-des">FREE：4463.40</span>
                    </div>
                </div>
                <div hidden class="inaccount-bar">
                    <div class="title-bar">
                        <img src="imgs/personCenter_bar.png">
                        <p class="title">账户入金</p>
                    </div>
                    <div class="one-list one">
                        <input class="style-left" type="radio" name="pay-type" checked> 支付通道
                        <input class="style-left" type="radio" name="pay-type"> 支付通道
                    </div>
                    <div class="one-list two">
                        <span class="style-left">汇率: 6.49</span>
                        <span class="style-left">说明: 这是一个说明</span>
                    </div>
                    <div class="one-list three">
                        <span class="style-left">充值: </span>
                        <input class="in-money" type="text">
                        <span >美元 </span>
                    </div>
                    <div class="one-list four">
                        <a class="inmoney-btn">充值</a>
                    </div>
                </div>
                <div hidden class="inaccount-list">
                    <div class="title-bar">
                        <img src="imgs/personCenter_bar.png">
                        <p class="title">入金记录</p>
                    </div>
                    <div class="data-bar">
                        <span>时间:</span>
                        <input type="date" value="2014-01-13">
                        -
                        <input type="date" value="2014-01-13">
                        <a> &nbsp; 今天 &nbsp;&nbsp;&nbsp; </a>
                        <span>| &nbsp;&nbsp;&nbsp; 最近:</span>
                        <a>&nbsp;&nbsp;一个月</a>
                        <a>&nbsp;&nbsp;三个月</a>
                    </div>
                    <div class="date-list">
                        <div class="list-title">
                            <span class="one">创建时间</span>
                            <span class="two">转入金额(美元）</span>
                            <span class="three">状态</span>
                        </div>
                        <div class="list">
                            <span class="one">2015.11.12</span>
                            <span class="two">3320</span>
                            <span class="three success">交易成功</span>
                        </div>
                        <div class="list">
                            <span class="one">2015.11.12</span>
                            <span class="two">3320</span>
                            <span class="three fail">交易失败</span>
                        </div>
                        <div class="list">
                            <span class="one">2015.11.12</span>
                            <span class="two">3320</span>
                            <span class="three progress">进行中...</span>
                        </div>
                        <div class="list-bottom">
                            <span class="page">1-3 &nbsp;共 3 条</span>
                            <a>下一页</a>
                        </div>
                    </div>
                </div>
                <div hidden class="outaccount-bar">
                    <div class="title-bar">
                        <img src="imgs/personCenter_bar.png">
                        <p class="title">账户出金</p>
                    </div>
                    <div class="one-list one">
                        <span class="style-left">账户余额: 6490美元</span>
                    </div>
                    <div class="one-list two">
                        <span class="style-left">提现到银行卡:</span>
                        <select class="input">
                            <option value="交通银行">交通银行</option>
                            <option value="交通银行">交通银行</option>
                            <option value="交通银行">交通银行</option>
                            <option value="交通银行">交通银行</option>
                        </select>
                        <span class="style-left">收款人姓名:</span>
                        <input class="input" type="text">
                    </div>
                    <div class="one-list three">
                        <span class="style-left">银行卡卡号:  </span>
                        <input class="in-bank" type="text">
                    </div>
                    <div class="one-list four">
                        <span class="style-left">提现: </span>
                        <input class="in-money" type="text">
                        <span >美元 </span>
                    </div>
                    <div class="one-list five">
                        <a class="inmoney-btn">提现</a>
                    </div>
                </div>
                <div hidden class="outaccount-list">
                    <div class="title-bar">
                        <img src="imgs/personCenter_bar.png">
                        <p class="title">出金记录</p>
                    </div>
                    <div class="data-bar">
                        <span>时间:</span>
                        <input type="date" value="2014-01-13">
                        -
                        <input type="date" value="2014-01-13">
                        <a> &nbsp; 今天 &nbsp;&nbsp;&nbsp; </a>
                        <span>| &nbsp;&nbsp;&nbsp; 最近:</span>
                        <a>&nbsp;&nbsp;一个月</a>
                        <a>&nbsp;&nbsp;三个月</a>
                    </div>
                    <div class="date-list">
                        <div class="list-title">
                            <span class="one">创建时间</span>
                            <span class="two">转出金额(美元）</span>
                            <span class="three">银行卡号</span>
                            <span class="four">状态</span>
                        </div>
                        <div class="list">
                            <span class="one">2015.11.12</span>
                            <span class="two">3320</span>
                            <span class="three">交通银行（尾号: 8888）</span>
                            <span class="four success">交易成功</span>
                        </div>
                        <div class="list">
                            <span class="one">2015.11.12</span>
                            <span class="two">3320</span>
                            <span class="three">交通银行（尾号: 8888）</span>
                            <span class="four fail">交易失败</span>
                        </div>
                        <div class="list">
                            <span class="one">2015.11.12</span>
                            <span class="two">3320</span>
                            <span class="three">交通银行（尾号: 8888）</span>
                            <span class="four progress">进行中...</span>
                        </div>
                        <div class="list-bottom">
                            <span class="page">1-3 &nbsp;共 3 条</span>
                            <a>下一页</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <img src="imgs/personCenter_line.jpg">
    </div>
</div>
<script>
    $(".left-bar a").click(function () {
        var thisid = this.id;
        $("."+thisid).show();
        $("."+thisid).siblings("div").hide();
        $(this).addClass("active");
        $(this).siblings("a").removeClass("active");

    })
</script>
</body>
</html>
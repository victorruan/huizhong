<?php include('./header.php')?>
    <div class="register-top"></div>

    <!-- 新闻列表 -->
    <div class="news">
        <div class="news-message">
            <div class="title">
                <p>行业新闻</p>
                <p>Industry news</p>
            </div>
            <div class="news-des">
            </div>
        </div>
    </div>

    <!--分页控件-->
    <link href="css/page.css" type="text/css" rel="Stylesheet" />
    <div class="page">
        <div id="div_pager">
        </div>
    </div>

    <script type="text/javascript" src="js/page.js"></script>
    <script>
        $("#industry-news").addClass("active");
        $(".news-des").height(322*2);

        $.ajax({
            type: 'get',
            url: 'http://huizhong.fanfantec.com/news/api?page=1',
            data: "",
            dataType: 'json',
            success: function(data) {
                var totalPage = data.totalCount%12? data.totalCount/12+1 : data.totalCount/12;
                var totalRecords = data.totalCount;
                var pageNo = getParameter('page'); //这里设置参数名
                if (!pageNo) {
                    pageNo = 1;
                }
                //生成分页控件 根据分页的形式在这里设置
                kkpager.init({
                    pno: pageNo,
                    total: totalPage,
                    totalRecords: totalRecords,
                    hrefFormer: 'news.php',
                    hrefLatter: '',
                    getLink: function (n) {
                        return this.hrefFormer + this.hrefLatter + "?page=" + n; //参数名跟上面相同
                    }
                });
                kkpager.generPageHtml();

                $.ajax({
                    type: 'get',
                    url: 'http://huizhong.fanfantec.com/news/api?page='+pageNo,
                    data: "",
                    dataType: 'json',
                    success: function(data) {
                        var html ="";
                        $.each(data.articles,function (i,item) {
                            if((i+1)%3){
                                html = html + '<div id="'+item.id+'" class="one-des left">';
                            }else{
                                html = html + '<div id="'+item.id+'" class="one-des">';
                            }
                            if(item.cover==null||item.cover==""){
                                html = html + '<div><img src="imgs/news_default.jpg"></div>';
                            }else{
                                html = html + '<div><img src="http://huizhong.fanfantec.com'+item.cover+'"></div>';
                            }

                            html = html + '<div class="data">';
                            var newDate = new Date(item.ctime*1000);
                            html = html + '<p class="month">'+(newDate.getMonth()+1)+'/'+newDate.getDate()+'</p>';
                            html = html + '<p class="year">'+newDate.getFullYear()+'</p>';
                            html = html + '</div>';
                            html = html + '<div class="title">'+item.title+'</div>';
                            html = html + '</div>';
                        })
                        $(".news-des").append(html);
                        $(".one-des").click(function () {
                            var id = this.id;
                            window.open('common.php?type=news&thisid='+id);
                        });

                    },
                    error: function() {
//                        console.log("failed");
                    }
                });
            },
            error: function() {
//                console.log("failed");
            }
        });


    </script>

<?php include('./footer.php')?>
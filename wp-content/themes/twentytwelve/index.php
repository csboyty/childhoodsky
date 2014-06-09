<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="fragment" content="!">
    <meta name="description" content="童年的天空" />
    <meta name="keywords" content="童年" />
    <title>童年的天空</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/index.css"/>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/frontend/libs/modernizr.js"></script>
    <script type="text/javascript">
        //加载资源
        Modernizr.load([
            {
                test:Modernizr.rgba &&
                    Modernizr.borderradius &&
                    Modernizr.boxshadow &&
                    Modernizr.textshadow &&
                    Modernizr.opacity &&
                    Modernizr.cssanimations &&
                    Modernizr.csscolumns &&
                    Modernizr.csstransitions &&
                    Modernizr.generatedcontent &&
                    Modernizr.video &&
                    Modernizr.audio,
                nope:["<?php echo get_template_directory_uri(); ?>/js/frontend/libs/jquery-1.10.2.min.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/src/uiManager.js"],
                yep:[
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/libs/jquery-1.10.2.min.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/libs/juicer-min.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/libs/greensock/TweenMax.min.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/libs/greensock/ScrollToPlugin.min.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/libs/jquery.ellipsis.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/src/config.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/src/controllerManager.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/src/dataManager.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/src/uiManager.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/src/index.js",
                    "<?php echo get_template_directory_uri(); ?>/js/frontend/src/googleAnalytics.js"
                ],
                callback:function(key,testResult){
                    if(testResult!==true&&key=="<?php echo get_template_directory_uri(); ?>/js/frontend/src/uiManager.js"){
                        ZY.uiManager.showPopOut("很抱歉，本站使用的一些HTML5特性，您的浏览器可能不支持，为了获得最佳浏览体验，"+
                            "建议您将浏览器升级到最新版本，或选用其他兼容HTML5的浏览器，我们推荐Chrome浏览器和火狐浏览器。",true);
                    }
                }
            }
        ]);
    </script>

</head>
<body>


<div id="zy_main_wrapper" class="zy_main_wrapper">

<!--置顶文章部分-->
<section id="zy_top_post" class="zy_top_post">
    <div id="zy_top_post_poster" class="zy_top_post_poster">
        <img class="zy_theme_bg_content zy_theme_bg_default" src="
        <?php echo get_template_directory_uri(); ?>/images/frontend/default_bg/fengmian_bg.jpg"/>
    </div>
</section>

<!--菜单栏-->
<nav id="zy_nav" class="zy_nav">
    <ul>
        <li><a href="#zy_section_one" class="menuItemOne">童年的天空</a></li>
        <li><a href="#zy_section_two" class="menuItemTwo">艺术小作坊</a></li>
        <li><a href="#zy_section_three" class="menuItemThree">绘本赏析</a></li>
        <li><a href="#zy_section_four" class="menuItemFour">蓬蓬头杂货铺</a></li>
    </ul>
</nav>

<!--------------------------------------童年的天空------------------------------------------>
<section id="zy_section_one" class="zy_section_one zy_section">
    <div class="zy_section_description">
        童年的天空是一个致力于发展中国原创图画书的工作室，这支团队的主体成员是湖南大学设计艺术学院的师生，
        “Art for tomorrow”是童年的天空团队的理想 。 什么样的艺术是孩子们需要的艺术？什么样的教育是好的教育？
        童年的天空图画书工作室的每一本作品里，都有他们对这个问题的理解。
    </div>
    <h2 class="zy_subheading">特约专栏</h2>
    <section id="zy_section_one_contain" class="zy_section_contain">
        <a id="zy_section_one_prev" class="zy_page_prev zy_page_item zy_disable"></a>
        <div id="zy_section_one_list_container" class="zy_post_list_container">
            <script id="zy_section_one_articles_tpl" type="text/template">

                {@each posts as post}
                <li  class="zy_article_one" data-zy-post-id="${post.post_id}" data-zy-post-type="${post.post_mime_type}">
                    <div class="zy_article_info">
                        <img src="${post.thumb}">
                        <h2>${post.post_title}</h2>
                    </div>
                    <div class="zy_article_abstract">
                        <p>${post.post_excerpt}</p>
                    </div>
                </li>
                {@/each}

            </script>
            <ul id="zy_section_one_list" class="zy_post_list">

            </ul>
        </div>
        <a id="zy_section_one_next" class="zy_page_next zy_page_item"></a>

    </section>
</section>

<!--------------------------------------艺术小作坊------------------------------------------>
<section id="zy_section_two" class="zy_section_two zy_section">

    <!--<div id="zy_section_two_bg" class="zy_section_bg">
        <div class="zy_section_top_bg">上边背景</div>

        <img class="zy_theme_bg_content zy_theme_bg_default" src="
        <?php /*echo get_template_directory_uri(); */?>/images/frontend/default_bg/bg2.jpg">

        <div class="zy_section_bottom_bg">下边背景</div>
    </div>
    <h2 class="zy_section_heading">艺术小作坊</h2>-->

    <section id="zy_section_two_contain" class="zy_section_contain">
        <div class="zy_section_description">
            <p>
                这个栏目是将我们有限的艺术创作、艺术教育经验做了初步的梳理，分享给广大的教育工作者和年轻的父母亲。
                我们的艺术教育课堂有一部分基于大学教育实践，比如剪纸和陶艺，所展示的作品就是大孩子们童心大发时创作的部分作品；
                另一部分来源于儿童美术教育实践。我们将陆续推出一些简易、趣味性强的艺术课堂，并不断加以完善，欢迎大家多提宝贵意见。
            </p>
        </div>
        <a id="zy_section_two_prev" class="zy_page_prev zy_page_item zy_disable">上一页</a>
        <div id="zy_section_two_list_container" class="zy_post_list_container">
            <script id="zy_section_two_articles_tpl" type="text/template">

                {@each posts as post}
                <li data-zy-post-id="${post.post_id}" data-zy-post-type="${post.post_mime_type}" class="zy_article_two">
                    <div class="zy_article_thumb"><img src="${post.thumb}"/></div>
                    <div class="zy_article_abstract">
                        <h2>${post.post_title}</h2>
                       <!-- <p class="zy_article_date">${post.post_date}</p>-->
                        <p>
                            ${post.post_excerpt}
                        </p>
                    </div>
                </li>
                {@/each}

            </script>
            <ul id="zy_section_two_list" class="zy_post_list">

            </ul>
        </div>
        <a id="zy_section_two_next" class="zy_page_next zy_page_item">下一页</a>
    </section>
</section>
<!--------------------------------------绘本赏析------------------------------------------>
<section id="zy_section_three" class="zy_section_three zy_section">

    <!--<div id="zy_section_three_bg" class="zy_section_bg">
        <div class="zy_section_top_bg">上边背景</div>
        <img class="zy_theme_bg_content zy_theme_bg_default" src="
        <?php /*echo get_template_directory_uri(); */?>/images/frontend/default_bg/bg3.jpg">
        <div class="zy_section_bottom_bg">下边背景</div>
    </div>
    <h2 class="zy_section_heading">绘本赏析</h2>-->

    <section id="zy_section_three_contain" class="zy_section_contain">
        <div class="zy_section_description">
            <p>
                绘本赏析栏目征得作家、画家、出版社的同意，以插图版的形式转载图画书内容。文字内容及图片配合插图版需要重新改编。
                我们目前所征集的图书，大多来自于童年的天空创作团队的艺术家们。他们有的是在儿童读物出版领域奉献一生的老前辈
                ，有的是初出茅庐满怀热情的新锐。
            </p>
            <p>
                本栏目主要面向家长、幼儿园老师，向大家推荐优秀的绘本读物。
            </p>
        </div>
        <a id="zy_section_three_prev" class="zy_page_prev zy_page_item zy_disable">上一页</a>
        <div id="zy_section_three_list_container" class="zy_post_list_container">
            <script id="zy_section_three_articles_tpl" type="text/template">


                {@each posts as post}
                <li data-zy-post-id="${post.post_id}" data-zy-post-type="${post.post_mime_type}" class="zy_article_two">
                    <div class="zy_article_thumb"><img src="${post.thumb}"/></div>
                    <div class="zy_article_abstract">
                        <h2>${post.post_title}</h2>
                        <!-- <p class="zy_article_date">${post.post_date}</p>-->
                        <p>
                            ${post.post_excerpt}
                        </p>
                    </div>
                </li>

                {@/each}


            </script>
            <ul id="zy_section_three_list" class="zy_post_list">

            </ul>
        </div>
        <a id="zy_section_three_next" class="zy_page_next zy_page_item">下一页</a>
    </section>
</section>

<!--------------------------------------蓬蓬头杂货铺------------------------------------------>
<section id="zy_section_four" class="zy_section_four zy_section">

    <!--<div id="zy_section_four_bg" class="zy_section_bg">
        <div class="zy_section_top_bg"></div>
        <img class="zy_theme_bg_content zy_theme_bg_default" src="
        <?php /*echo get_template_directory_uri(); */?>/images/frontend/default_bg/bg4.jpg">
        <div class="zy_section_bottom_bg"></div>
	</div>
	<h2 class="zy_section_heading">蓬蓬头杂货铺</h2>-->

    <section id="zy_section_four_contain" class="zy_section_contain">
        <div class="zy_section_description">
            <p>
                童年的天空网站上所有义卖的物品首先是为了支持本土图画书原创。
                我们希望2015年开全免费的e绘本栏目。并开设经典文学赏析栏目，免费提供给所有的孩子阅读。
            </p>
            <p>
                如果您喜欢我们的网站，信任我们的团队，请您支持蓬蓬头杂货铺的义卖。
            </p>
        </div>
        <a id="zy_section_four_prev" class="zy_page_prev zy_page_item zy_disable">上一页</a>
        <div id="zy_section_four_list_container" class="zy_post_list_container">
            <script id="zy_section_four_articles_tpl" type="text/template">

                {@each posts as post}
                <li data-zy-post-id="${post.post_id}" data-zy-post-type="${post.post_mime_type}" class="zy_article_two">
                    <div class="zy_article_thumb"><img src="${post.thumb}"/></div>
                    <div class="zy_article_abstract">
                        <h2>${post.post_title}</h2>
                        <!-- <p class="zy_article_date">${post.post_date}</p>-->
                        <p>
                            ${post.post_excerpt}
                        </p>
                    </div>
                </li>
                {@/each}

            </script>
            <ul id="zy_section_four_list" class="zy_post_list">

            </ul>
        </div>
        <a id="zy_section_four_next" class="zy_page_next zy_page_item">下一页</a>

    </section>
</section>

<!--底部-->
<footer class="zy_footer">
    <!--<div class="zy_project_top_bg"></div>-->
    <div class="zy_project">
        <div class="zy_project_info">
            <h2 class="zy_project_title">童年天空的大朋友们</h2>
            <div class="zy_project_column">
                <ul class="cooperatorList">
                    <h4 class="title">艺术家</h4>
                    <li>徐&nbsp;&nbsp;&nbsp;冰&nbsp;&nbsp;&nbsp;中央美术学院院长</li>
                    <li>吕胜中&nbsp;&nbsp;&nbsp;中央美术学院实验艺术学院院长</li>
                    <li>蔡&nbsp;&nbsp;&nbsp;皋&nbsp;&nbsp;&nbsp;CCBY理事</li>
                    <li>萧沛苍&nbsp;&nbsp;&nbsp;原湖南省美协副主席，湖南油画院院长</li>
                    <li>颜新元&nbsp;&nbsp;&nbsp;北京航空航天大学新媒体学院教授</li>
                    <!--<li>郏宝雄&nbsp;&nbsp;&nbsp;湖南美术出版社原副社长</li>-->
                </ul>
                <ul class="cooperatorList">
                    <h4 class="title">教育家</h4>
                    <li>伊少淳&nbsp;&nbsp;&nbsp;中国少年儿童艺术教育委员会主席</li>
                    <li>朱训德 &nbsp;&nbsp;&nbsp;湖南省美术家协会主席</li>
                    <li>谢丽芳&nbsp;&nbsp;&nbsp;中国少年儿童艺术教育委员会副主席</li>
                    <li>何人可&nbsp;&nbsp;&nbsp;湖南大学设计艺术学院院长</li>
                    <li>赵江洪&nbsp;&nbsp;&nbsp;湖南大学设计艺术学院教授</li>
                    <li>萧狄虎&nbsp;&nbsp;&nbsp;湖南大学设计艺术学院教授</li>
                    <li>季&nbsp;&nbsp;&nbsp;铁&nbsp;&nbsp;&nbsp;湖南大学设计艺术学院副院长</li>
                    <li>袁&nbsp;&nbsp;&nbsp;翔&nbsp;&nbsp;&nbsp;南大学设计艺术学院教学主任</li>
                    <!--<li>谭&nbsp;&nbsp;&nbsp;浩&nbsp;&nbsp;&nbsp;湖南大学设计艺术学院副教授</li>
                    <li>谢&nbsp;&nbsp;&nbsp;军&nbsp;&nbsp;&nbsp;湖南大学设计艺术学院副教授</li>-->
                </ul>
                <ul class="cooperatorList">
                    <h4 class="title">出版人</h4>
                    <li>张天明&nbsp;&nbsp;&nbsp;湖南新闻出版集团总经理</li>
                    <li>李小山&nbsp;&nbsp;&nbsp;湖南美术出版社社长</li>
                    <li>黄&nbsp;&nbsp;&nbsp;啸&nbsp;&nbsp;&nbsp;湖南美术出版社副社长</li>
                    <li>郏宝雄&nbsp;&nbsp;&nbsp;湖南美术出版社原副社长</li>
                    <li>左汉中&nbsp;&nbsp;&nbsp;湖南美术出版社编审</li>
                    <li>周敏纳&nbsp;&nbsp;&nbsp;湖南美术出版社原副社长</li>
                    <li>李&nbsp;&nbsp;&nbsp;松&nbsp;&nbsp;&nbsp;圣之空间馆长</li>
                    <li>黎&nbsp;&nbsp;&nbsp;丹&nbsp;&nbsp;&nbsp;湖南美术出版社编辑</li>
                    <li>萧睿子&nbsp;&nbsp;&nbsp;湖南教育出版社主任编辑</li>
                    <!--<li>袁&nbsp;&nbsp;&nbsp;江&nbsp;&nbsp;&nbsp;编辑室主任</li>-->
                    <li>谭菁菁&nbsp;&nbsp;&nbsp;湖南少年儿童出版社</li>
                    <li>陈荣义&nbsp;&nbsp;&nbsp;湖南省美伦美术馆馆长</li>
                </ul>
                <ul class="cooperatorList">
                    <h4 class="title">支持单位</h4>
                    <li>中国美术家协会少儿艺委会</li>
                    <li>湖南大学设计艺术学院</li>
                    <li>湖南设计家协会</li>
                    <li>湖南美术出版社</li>
                </ul>
            </div>

            <div class="zy_project_column">
                <ul class="cooperatorList">
                    <h4 class="title">顾问</h4>
                    <li>野津珖子&nbsp;&nbsp;&nbsp;日籍退休教师，童年的天空荣誉顾问</li>
                    <li>南岛顺子&nbsp;&nbsp;&nbsp;日籍退休编辑，童年的天空荣誉顾问</li>
                </ul>

                <ul class="cooperatorList">
                    <h4 class="title">作家</h4>
                    <li>曹文轩&nbsp;&nbsp;&nbsp;北京大学教授，当代著名作家</li>
                    <li>梅子涵&nbsp;&nbsp;&nbsp;上海师范大学教授</li>
                    <li>彭&nbsp;&nbsp;&nbsp;懿&nbsp;&nbsp;&nbsp;上海少年儿童出版社编辑  </li>
                    <li>骆小戈&nbsp;&nbsp;&nbsp;中国妇女研究学会理事</li>
                    <li>薛忆沩&nbsp;&nbsp;&nbsp;曾为《南方周末》及《随笔》杂志撰写读书专栏</li>
                    <li>陈约红&nbsp;&nbsp;&nbsp;《滇池》文学月刊总编室主任，副编审</li>
                </ul>

                <ul class="cooperatorList">
                    <h4 class="title">青年艺术家、作家</h4>
                    <li>杨&nbsp;&nbsp;&nbsp;忠&nbsp;&nbsp;&nbsp;中央美术学院城市设计艺术学院副教授</li>
                    <li>庄&nbsp;&nbsp;&nbsp;庄&nbsp;&nbsp;&nbsp;北京航空航天学院</li>
                    <li>萧翱子&nbsp;&nbsp;&nbsp;湖南大学设计艺术学院教师</li>
                    <li>弯&nbsp;&nbsp;&nbsp;弯&nbsp;&nbsp;&nbsp;职业艺术家</li>
                    <li>张&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;作家，南京信谊编辑</li>
                    <li>孙亚楠&nbsp;&nbsp;&nbsp;童年的天空工作室助理编辑</li>
                    <li>王&nbsp;&nbsp;&nbsp;擎&nbsp;&nbsp;&nbsp;童年的天空工作室助理设计师</li>
                    <li>杨丽村&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                    <li>王天天&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                    <li>周绪敏&nbsp;&nbsp;&nbsp;艺术家／教师</li>
                    <li>刘&nbsp;&nbsp;&nbsp;天&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                    <li>王&nbsp;&nbsp;&nbsp;林&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                    <li>姚&nbsp;&nbsp;&nbsp;瑶&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                    <li>方&nbsp;&nbsp;&nbsp;堃&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                    <li>郑吴越&nbsp;&nbsp;&nbsp;艺术家／教师</li>
                    <li>张源源&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                    <li>杨&nbsp;&nbsp;&nbsp;昊&nbsp;&nbsp;&nbsp;艺术家／设计师</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="zy_copyright">
        <div class="zy_copyright_column">
            <p>童年的天空编辑部</p>
            <p>湖南省长沙市湖南大学艺术学院503室</p>
            <p>邮编&nbsp;&nbsp;410082</p>
            <p>childhoodsky@qq.com</p>
        </div>
        <div class="zy_copyright_column">
            <p>有奖征稿</p>
            <p>故事：绘图、摄影照片+文字</p>
            <p>艺术课堂：图片+文字说明</p>
            <p>e绘本投稿：文章word文档、画稿、pdf</p>
        </div>
    </div>
</footer>
</div>

<!--弹出层-->
<section id="zy_loading_container" class="zy_loading_container zy_hidden"></section>

<section id="zy_show_section" class="zy_show_section zy_hidden">
    <span id="zy_show_close" class="zy_show_close"></span>
    <!--load加载的媒体播放页面放置处-->
    <div id="zy_show_load_container" class="zy_show_load_container">

    </div>

</section>
<!--弹出窗口-->
<section id="zy_popout_win" class="zy_popout_win zy_hidden">
    <h3 class="zy_popout_title"></h3>
    <span id="zy_popout_close" class="zy_popout_btn">好</span>
</section>
<!--单片文章展示模版，采用juicer模板-->
<article id="zy_article_container" class="zy_article_container">
    <span id="zy_article_container_close" class="zy_article_container_close"></span>
    <section id="zy_article_content" class="zy_article_content">
        <script id="zy_show_detail_tpl" type="text/template">
            {@if post_type=="zypost"}
            <article class="article-main-post">
                <!--<div class="article-head-post">

                    <h2 class="article-author-post article-item-post">${post_author} </h2>
                    <h2 class="article-category-post article-item-post">${post_category}</h2>
                    <h2 class="article-time-post article-item-post">${post_date}</h2>
                </div>-->
                <div class="article-poster-post">
                    <img src="${post_thumb}" >
                    <h1 class="article-title-post">${post_title}</h1>
                </div>



                <div class="article-content-post">
                    <p>$${post_content}</p>
                </div>
            </article>
            {@else}
            <article class="article-main-slide">
                <h1 class="article-title-slide">${post_title}</h1>
                <h2 class="article-author-slide">${post_author}</h2>
                <h2 class="article-category-slide">${post_category} | ${post_date}</h2>



                <div class="article-abstract-slide">
                    <p>${post_excerpt}</p>
                </div>



                <div class="allslides-slide">
                    {@each post_slides as slide}
                    <div class="slide-slide">
                        {@if slide.title}

                        {@if slide.memo}
                        <div class="imgcaption-slide"><span>${slide.title}</span>：${slide.memo}</div>
                        {@else}
                        <div class="imgcaption-slide">${slide.title}</div>
                        {@/if}

                        {@else if slide.memo}
                        <div class="imgcaption-slide">${slide.memo}</div>
                        {@/if}

                        $${slide.content}
                    </div>
                    {@/each}

                </div>
            </article>
            {@/if}

        </script>
    </section>
</article>

<!--数据加载时的等待动画-->
<script type="text/template" id="zy_spinner_tpl">
    <div class="zy_loading_spinner">
        <div class="zy_loading_top zy_loading_item"></div>
        <div class="zy_loading_center_left zy_loading_item"></div>
        <div class="zy_loading_center_right zy_loading_item"></div>
        <div class="zy_loading_bottom_left zy_loading_item"></div>
        <div class="zy_loading_bottom_right zy_loading_item"></div>
    </div>
</script>
<!--下载音乐的target-->
<iframe name="zy_download_music" style="display: none"></iframe>
</body>
</html>
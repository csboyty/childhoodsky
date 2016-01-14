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
            <img class="zy_theme_bg_content zy_theme_bg_default" src="<?php echo get_template_directory_uri(); ?>/images/frontend/apps/top_bg1.png"/>
        </div>
        <div style="min-width: 730px; text-align:center;"><img src="<?php echo get_template_directory_uri(); ?>/images/frontend/apps/top_bg2.png" style="margin:0px; padding:0px;" /></div>
    </section>

    <!--菜单栏-->
    <nav id="zy_nav" class="zy_nav">
        <ul>
            <li><a href="#zy_section_one" class="menuItemOne">蓬蓬头书吧</a></li>
            <li><a href="#zy_section_two" class="menuItemTwo">艺术小作坊</a></li>
            <li><a href="#zy_section_three" class="menuItemThree">蓬蓬头杂货铺</a></li>
            <li><a href="#zy_section_four" class="menuItemFour">童年的天空</a></li>
        </ul>
    </nav>

    <!--------------------------------------童年的天空------------------------------------------>
    <section id="zy_section_one" class="zy_section_one zy_section">
        <!-- <div class="zy_section_description">
             童年的天空是一个致力于发展中国原创图画书的工作室，这支团队的主体成员是湖南大学设计艺术学院的师生，
             “Art for tomorrow”是童年的天空团队的理想 。 什么样的艺术是孩子们需要的艺术？什么样的教育是好的教育？
             童年的天空图画书工作室的每一本作品里，都有他们对这个问题的理解。
         </div>-->
        <!--<h2 class="zy_subheading">特约专栏</h2>-->
        <section id="zy_section_one_contain" class="zy_section_contain">
            <a id="zy_section_one_prev" class="zy_page_prev zy_page_item zy_disable"></a>
            <div id="zy_section_one_list_container" class="zy_post_list_container">

                <script id="zy_section_one_articles_tpl" type="text/template">

                    {@each posts as post,index}
                    <li  class="zy_article_one zy_section_one_block" data-zy-post-id="${post.post_id}" data-zy-post-type="${post.post_mime_type}">
                        {@if index==0 || index==1 || index==4 || index==5 }
                        <div class="zy_section_one_block_left"><img src="${post.thumb}"></div>
                        <div class="zy_section_one_block_right zy_section_one_block_right${index}">${post.post_title}<br/>${post.author_name}</div>
                        {@else}
                        <div class="zy_section_one_block_right zy_section_one_block_right${index}">${post.post_title}<br/>${post.author_name}</div>
                        <div class="zy_section_one_block_left"><img src="${post.thumb}"></div>
                        {@/if}
                        <div class="clear"></div>

                    </li>
                    {@/each}


                </script>
                <ul id="zy_section_one_list" class="zy_post_list">
                </ul>

            </div>
            <a id="zy_section_one_next" class="zy_page_next zy_page_item"></a>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/frontend/apps/ysxzf_top_bg.png" width="775" height="99"/>
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
                                <!-- <p>${post.post_excerpt}</p>-->
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/frontend/apps/zhp_top_bg.png" width="775" height="99"/>
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
                                <!--<p>${post.post_excerpt}</p>-->
                            </div>
                        </li>

                        {@/each}


                    </script>
                    <ul id="zy_section_three_list" class="zy_post_list zy_post_three_list">

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

            <section id="zy_section_four_contain" class="zy_section_contain zy_section_contain4">
                <div class="zy_section_description">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/frontend/apps/tndtk_top_bg.png" width="810" height="208"/>
                </div>
                <a id="zy_section_four_prev" class="zy_page_prev zy_page_item zy_disable">上一页</a>
                <div id="zy_section_four_list_container" class="zy_post_list_container">

                    <script id="zy_section_four_articles_tpl" type="text/template">

                        {@each posts as post}
                        <li data-zy-post-id="${post.post_id}" data-zy-post-type="${post.post_mime_type}" class="zy_article_two zy_article_two1">
                            <div class="zy_article_thumb zy_article_thumb1"><img src="${post.thumb}"/></div>
                            <div class="title_text">${post.post_title}</div>
                            <!--<div class="zy_article_abstract">-->
                            <!-- <h2>${post.post_title}</h2>-->
                            <!-- <p class="zy_article_date">${post.post_date}</p>-->
                            <!--<p>${post.post_excerpt}</p>-->
                            <!--</div>-->
                        </li>
                        {@/each}

                    </script>
                    <ul id="zy_section_four_list" class="zy_post_list zy_post_three_list">

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
                    <p class="p_1">童年的天空编辑部<br/>湖南省长沙市湖南大学设计艺术学院530室  邮编 410082  邮箱：childhoodsky@qq.com</p>
                    <p class="p_2">Childhoodsky Studio,Lushannan  Road Changsha,Hunan P.R China</p>
                    <p class="p_2">Copyright &copy; 2015 Childhoodsky Studio, all rights reserved.</p>
                </div>
            </div>
        </footer>
</div>
<section id="zy_top_post" class="zy_top_post">
    <div id="zy_top_post_poster" class="zy_top_post_poster">
        <img class="zy_theme_bg_content zy_theme_bg_default" src="<?php echo get_template_directory_uri(); ?>/images/frontend/apps/bottom_bg1.png"/>
    </div>
</section>

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
                    <div class="content_bg"><img src="${post_thumb}" ></div>
                    <h1 class="article-title-post">${post_title}</h1>
                    <p>${post_title}</p>
                    <p>${post_category} | ${post_date}</p>
                    <p>${post_author}</p>
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
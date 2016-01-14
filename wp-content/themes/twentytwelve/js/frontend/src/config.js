/**
 * Created with JetBrains WebStorm.
 * User: ty
 * Date: 13-8-22
 * Time: 下午4:59
 * config file,contains some static data,these data ara not change by procedure code but artificial change
 * */
var ZY=ZY||{};

ZY.config={
    ajaxurl:"http://www.childhoodsky.com/wp-admin/admin-ajax.php",
    siteurl:"http://www.childhoodsky.com",
    categoryIds:{
        sectionOneId:3, //绘本欣赏
        sectionTwoId:2,  //艺术小作坊
        sectionThreeId:5, //蓬蓬头杂货铺
        sectionFourId:1 //童年的天空
    },
    articleWidths:{
        sectionOneWidth:370,//每个分类的li的宽度
        sectionTwoWidth:254,
        sectionThreeWidth:254,
        sectionFourWidth:254
    },
    errorCode:{
        connectionError:"无法连接到服务器。", //错误提示信息
        musicError:"无法从服务器获取音乐。",
        hasNoMusic:"没有上传音乐",
        postsError:"无法从服务器获取文章摘要。",
        articleError:"无法从服务器获取文章详情。"
    },
	deviceCode:{
		iOS : navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false
	},
    defaultWrapZindex:9996 //遮挡层的默认z-index
};
Object.freeze(ZY.config);


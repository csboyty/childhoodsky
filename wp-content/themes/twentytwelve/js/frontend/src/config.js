/**
 * Created with JetBrains WebStorm.
 * User: ty
 * Date: 13-8-22
 * Time: 下午4:59
 * config file,contains some static data,these data ara not change by procedure code but artificial change
 * */
var ZY=ZY||{};

ZY.config={
    ajaxurl:"http://www.comdesignlab.com/childhoodsky/wp-admin/admin-ajax.php",
    siteurl:"http://www.comdesignlab.com/childhoodsky",
    categoryIds:{
        sectionOneId:1, //童年的天空
        sectionTwoId:2,  //艺术小作坊
        sectionThreeId:3, //绘本欣赏
        sectionFourId:5 //蓬蓬头杂货铺
    },
    articleWidths:{
        sectionOneWidth:280,//每个分类的li的宽度
        sectionTwoWidth:370,
        sectionThreeWidth:370,
        sectionFourWidth:370
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


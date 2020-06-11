<?php
/**
 * Created By 1
 * Author：smalls
 * Email：smalls0098@gmail.com
 * Date：2020/4/26 - 22:15
 **/

require '../vendor/autoload.php';

use Smalls\VideoTools\VideoManager;

$res = '';
//$res = VideoManager::DouYin()->start("https://v.douyin.com/JeoLRe4/");
//var_dump($res['video_url']);
$res = VideoManager::KuaiShou([
    'proxy_whitelist' => ['kuaishou'],
    'proxy' => '221.122.91.75:10286',
    'kuaishou_cookie' => 'did=web_00536bb16309421a93a09c3e4998aa04; didv=1586963699000; clientid=3; client_key=65890b29; kuaishou.live.bfb1s=7206d814e5c089a58c910ed8bf52ace5; Hm_lvt_86a27b7db2c5c0ae37fee4a8a35033ee=1589811139,1591779408,1591880526; Hm_lpvt_86a27b7db2c5c0ae37fee4a8a35033ee=1591880526'
])->start("https://v.kuaishou.com/2RbSva");
var_dump($res);
//$res = VideoManager::HuoShan()->start("https://share.huoshan.com/hotsoon/s/kcU0XOnSO78/");
//var_dump($res['video_url']);
//$res = VideoManager::TouTiao()->start("https://m.toutiaoimg.cn/a6818537223466516995/?app=news_article&is_hit_share_recommend=0");
//var_dump($res['video_url']);
//$res = VideoManager::XiGua()->start("https://m.ixigua.com/group/6761303513852019214/?app=video_article&timestamp=1587970696&utm_source=copy_link&utm_medium=android&utm_campaign=client_share");
//var_dump($res['video_url']);
//$res = VideoManager::WeiShi()->start("https://h5.weishi.qq.com/weishi/feed/6Z7Uxwu7H1JsBFXPo/wsfeed?wxplay=1&id=6Z7Uxwu7H1JsBFXPo&collectionid=1bc8fe60a09dce07a4c5ce449b3c16bf&spid=8404838818534879236&qua=v1_and_weishi_6.7.6_588_312027000_d&chid=100081003&pkg=&attach=cp_reserves3_1000370721");
//var_dump($res['video_url']);
//$res = VideoManager::PiPiXia()->start("https://h5.pipix.com/s/wkwJBk/");
//var_dump($res['video_url']);
//$res = VideoManager::ZuiYou()->start("https://share.izuiyou.com/detail/152254948?zy_to=applink&to=applink");
//var_dump($res['video_url']);
//$res = VideoManager::MeiPai()->start("http://www.meipai.com/media/1200571483?client_id=1089857302&utm_media_id=1200571483&utm_source=meipai_share&utm_term=meipai_android&gid=2211243272");
//var_dump($res['video_url']);
//$res = VideoManager::LiVideo()->start("https://www.pearvideo.com/detail_1671290?st=7");
//var_dump($res['video_url']);
//$res = VideoManager::QuanMingGaoXiao()->start("https://longxia.music.xiaomi.com/share/video/6528730793005613056?sharerUserId=1939294&ref=WEIXIN");
//var_dump($res['video_url']);
//$res = VideoManager::PiPiGaoXiao()->start("http://share.ippzone.com/pp/post/48839688240");
//var_dump($res['video_url']);
//$res = VideoManager::MoMo()->start("https://m.immomo.com/s/moment/new-share-v2/ar8441324333.html?time=1587999787&name=46A41p1gHVzsiHb7+C4KCw==&avatar=85B3CC10-D284-1A12-4BDD-41AE6AFB870520200427&isdaren=1&isuploader=0&from=qqfriend");
//var_dump($res['video_url']);
//$res = VideoManager::ShuaBao()->start("http://h5.shua8cn.com/video_share?share_type=copy_url&video_source=recommend&platform=android&show_id=380b84faf9fabbcc7cf0de768d111e81&uid=0&invite_code=&_timestamp=1588001308&_sign=3009fbd584b721e2b7e46f3e94452d40");
//var_dump($res['video_url']);
//$res = VideoManager::XiaoKaXiu()->start("https://mobile.xiaokaxiu.com/video?id=6522164847705071616");
//var_dump($res['video_url']);
//$res = VideoManager::Bili()->setUrl("https://b23.tv/av84665662")->setQuality(BiliQualityType::LEVEL_2)->execution();
//var_dump($res['video_url']);



<?php
namespace app\index\controller;
class Index extends Common
{

    public function demo1($num){
        echo '我是index控制器下的demo1操作方法，我只能接收2~4位的整数，当前的数值是：'.$num;
    }

    public function demo2($str){
        echo '我是index控制器下的demo2操作方法，我只能接收1位以上的英文字母，当前的值是：'.$str;
    }

    public function demo3($bool){
        echo '我是index控制器下的demo3操作方法，我只能接收布尔，当前的值是：'.$bool;
    }

    public function index()
    {
       
        //新闻媒体文章列表数据
        $where['cate_id'] = array('in','5,6,7') ;
        $xinwen = db('archives')->where($where)->order('time desc')->select();
        foreach ($xinwen as $k => $v) {
            $img = $v['litpic'];
            $xinwen[$k]['litpic'] = str_replace('\\', '/', $img);
        }
        //var_dump($xinwen);
       
       
        
        //教育教学
        $jiaoyu = db('archives')->where(array('cate_id'=>11))->order('id desc')->select();
        //var_dump($jiaoyu);
        //学校简介
    	//首页学校简介
    	$about = db('cate')->where(array('id'=>20))->order('id desc')->select();
        //var_dump($about);
    	//首页招生报名
    	$service=model('cate')->getPageContent(8);
    	//新闻动态
    	$news=db('archives')->where(array('cate_id'=>5))->order('id desc')->find();
    	//产品中心
    	$proRes=db('archives')->where('cate_id','in','(8,9,10)')->order('click desc')->limit(10)->select();
    	//首页幻灯广告，广告位id为10
        $adWhere['adpos_id'] = array('in','8');
        $adWhere['on'] = array('eq',1);
    	$ads=db('ad')->where($adWhere)->select();
        //var_dump($ads);
        
       foreach ($ads as $ads_k => $ads_v) {

                if($ads_v['type']==1){//图片广告
                    //$adStr='<a href=""><img src="__INDEX__/ad/'.$ads['img_src'].'" /></a>';
                    $img = $ads_v['img_src'];
                    $ads_v['img_src'] = str_replace('/', '\\', $img);
                }else{//轮换广告
                    $imgRes=db('adflash')->where(array('ad_id'=>$ads_v['id']))->select();
                   // var_dump($imgRes);
                               
            }
          }
        //var_dump($img_Res); 
        //获取集团产业栏目（id=8）
        $jituan_cates = db('cate')->where(array('pid'=>8))->order('sort desc')->select();
        //var_dump($jituan_cates);
        //获取关于我们栏目下子栏目（id=1）
        $jituan_abouts = db('cate')->where(array('pid'=>1))->order('sort desc')->select();
        //var_dump($jituan_abouts);
       
       
    	
    	$tempSrc=$this->confTemp.'/index.htm';
    	$this->assign([
    		'topcid'=>'index',
    		'about'=>$about,
    		'service'=>$service,
    		'news'=>$news,
    		'proRes'=>$proRes,
            'imgRes'=>$imgRes,
            'xinwen'=>$xinwen,
            'jiaoyu'=>$jiaoyu,
            'jituan_cates'=>$jituan_cates,
            'jituan_abouts'=>$jituan_abouts,
    		]);
    	return $this->fetch($tempSrc);
    }
    public function jump_url($dzccid,$dzc)
    {
        echo 1;
        echo $dzccid;
        echo $dzc;
        $data = $_GET['dzc'];
        var_dump($data);
    }
}

<?php
namespace app\index\Controller;

use app\common\model\Classify;
use think\Controller;
use think\facade\Request;

class Home extends Controller
{
    // 首页分类
    public function classify()
    {
        $result = Classify::field('create_time, update_time, deleted_time', true)
            ->order('sort','asc')
            ->cache(CACHE_TYPE)
            ->select();

        return json($result);
    }
}
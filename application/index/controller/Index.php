<?php
namespace app\index\Controller;

use think\Controller;
use think\facade\Request;
use app\common\model\Classify;

class Index extends Controller
{
    // 首页
    public function index()
    {
        $id = Request::get('id');
        if (empty($id)) {
            $sort = Classify::min('sort');
            $id = Classify::getFieldBySort($sort, 'id');
        }

        return $this->fetch();
    }

    // 404
    public function _404()
    {
        return $this->fetch();
    }
}

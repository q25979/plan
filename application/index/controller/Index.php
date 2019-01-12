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
            $id = Classify::min('id');
        }

        return $this->fetch();
    }

    // 404
    public function _404()
    {
        return $this->fetch();
    }
}

<?php
namespace app\admin\controller;

use think\facade\Request;
use app\common\model\Classify;

class Assortment extends Validate
{
	// 分类
    public function index()
    {
    	if (Request::isAjax()) {
    		$get = Request::get();
    		$list = Classify::page($get['page'], $get['limit'])
    			->order('sort', 'asc')
    			->select();

    		return json([
    			'code' => 0,
    			'msg'  => '',
    			'count' => Classify::count(),
    			'data' => $list
    		]);
    	}

        return $this->fetch();
    }

    // 添加
    public function add()
    {
    	$db = new Classify();
    	$post = Request::post();

    	$info = $db->save($post);
    	if ($info > 0) {
    		return json([
    			'code' => 0,
    			'msg'  => '添加成功'
    		]);
    	}

    	return json([
    		'code' => -1,
    		'msg'  => '添加失败'
    	]);
    }

    // 更新
    public function update()
    {
    	$db = new Classify();
    	$post = Request::post();

    	$info = $db->save($post, ['id' => $post['id']]);
    	$result = $info > 0
    		? ['code' => 0, 'msg' => '更新成功']
    		: ['code' => -1, 'msg' => '更新失败'];

    	return json($result);
    }

    // 删除
    public function delete()
    {
    	$id = Request::post('id');
    	$db = Classify::get($id);
    	$info = $db->delete();

    	$result = $info > 0
    		? ['code' => 1, 'msg' => '删除成功']
    		: ['code' => -1, 'msg' => '删除失败'];

    	return json($result);
    }
}

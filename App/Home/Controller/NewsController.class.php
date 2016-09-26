<?php
namespace Home\Controller;

use Think\Controller;

class NewsController extends Controller
{

    public function lists()
    {
        $news = D("news");

        $list = $news->where("1=1")->select();
        if (isset($list)) {
            $this->assign("list", $list);
        }
        $this->display();
    }

    public function add()
    {
        if ($_POST) {
            $news = D('news');
            //var_dump($news);
            $title   = I('post.title');
            $content = I('post.content');
            $author  = I('post.author');
            //var_dump(I());

            $data['title']       = $title;
            $data['content']     = $content;
            $data['author']      = $author;
            $data['createdtime'] = date('Y-m-d H:i:s', time());
            $data['updatedtime'] = date('Y-m-d H:i:s', time());
            $rlt                 = $news->add($data);
            //var_dump($news->getLastSql());
            if ((int) $rlt > 0) {
                redirect(U('Home/News/add'));
            }
        }
        $this->display();
    }

    public function edit()
    {
        $news = D("news");
        if (IS_POST) {
            $id      = I('id', 0);
            $title   = I('title');
            $content = I('content');
            $author  = I('author');

            $data['title']       = $title;
            $data['content']     = $content;
            $data['author']      = $author;
            $data['createdtime'] = date('Y-m-d H:i:s', time());
            $data['updatedtime'] = date('Y-m-d H:i:s', time());
            $rlt                 = $news->where("id=" . $id)->save($data);
            //var_dump("edit=>" . $rlt . " 传参id=>" . $id);
            //var_dump($news->getLastSql());
            if ((int) $rlt > 0) {
                $url = U("/Home/News/lists");
                redirect($url);
            } else {
                $this->display();
            }

        } else {
            $id    = I('id', 0);
            $model = $news->where(array("id" => $id))->find();
            if ($model) {
                $this->assign("model", $model);
            }
            $this->display();
        }
    }

    // public function save()
    // {
    //     $id            = I('id', 0);
    //     $map['status'] = -1;
    //     $res           = D("news")->where(array_merge(array("id" => $id), $map))->update();
    //     var_dump(D('news')->getLastSql());die;
    //     $this->display();
    // }

    public function delete()
    {
        $id  = I('id', 0);
        $res = D("news")->where(array("id" => $id))->delete();
        if ((int) $res > 0) {
            $url = U("Home/News/lists");
            //redirect($url);
            echo "<script>window.alert('删除成功');location.href='".$url."';</script>";
        } else {
            echo "<script>alert('删除失败');location.history.go(-1);</script>";
        }
    }
}

<?php
namespace Home\Controller;

use Think\Controller;

class NewsController extends Controller
{

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
            var_dump($news->getLastSql());
            if ((int) $rlt > 0) {
                redirect(U('Home/News/add'));
            }
        }
        $this->display();
    }
}

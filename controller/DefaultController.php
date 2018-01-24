<?php

class DefaultController {

    public function indexAction()
    {
        return render('index');
    }

    public function  categoriesAction()
    {
         $data['categories'] = [
             [
                 'id' => 1,
                 'name' => 'text1',
             ],
             [
                 'id' => 2,
                 'name' => 'Одежда',
             ],
         ];
         $data['categoriesCount'] = 18;
        return render('categories', $data);
    }

    public function postsAction()
    {

        $stmt = DB::getInstance()->getPdo()->prepare('SELECT * FROM posts');
        $stmt->execute();
        $data['posts'] = $stmt->fetchAll();
        return render('posts', $data);
    }

    public function postAction()
    {
        require_once __DIR__ . '/../model/pot.php';
        $data['post'] = Post::getPost(DB::getInstance(), $_GET['id']);
        return render('post', $data);
    }

    public function jqueryAction()
    {
        return render('jquery');
    }

    public function ajaxAction()
    {
        $posts = [
            [
                'title' => 'Заголовок 3',
                'text' => 'Текст 3',
            ],
            [
                'title' => 'Заголовок 4',
                'text' => 'Текст 4',
            ],[
                'title' => 'Заголовок 5',
                'text' => 'Текст 5',
            ],
        ];
        return $posts;
    }
}
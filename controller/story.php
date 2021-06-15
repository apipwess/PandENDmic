<?php 
class Story{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $story = $this->model->getAllStory();
        require '../view/list.php';
    }

    public function detail($id)
    {
        $story = $this->model->getstoryById($id);
        require '../view/detail.php';
    }

    public function create()
    {
        if ($_POST) {
            $this->model->insert();
            header("Location: http://localhost/php/home.php");
        } else {
            require '../view/form.php';
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->model->update($id);
            header("Location: http://localhost/pdomvc/index.php/story");
        } else {
            $story = $this->model->getstoryById($id);
            require 'view/story/form.php';
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: http://localhost/pdomvc/index.php/story");
        }
    }
}
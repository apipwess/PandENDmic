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

    public function index_admin()
    {
        $story = $this->model->getAllStory();
        require '../view/listAdmin.php';
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

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: http://localhost/php/homeAdmin.php");
        }
    }

    public function login_checker()
    {
        if ($_POST) {
            $this->model->check();
            if ($count == 1){
                header("Location: http://localhost/php/homeAdmin.php");
            } else {
                header("Location: http://localhost/php/login.php");
            }

        } else {
            require '../view/login_check.php';
        }
    }
}
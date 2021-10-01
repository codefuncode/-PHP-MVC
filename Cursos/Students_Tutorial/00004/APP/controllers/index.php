<?php
class Index extends Controller
{
   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {

      $this->view->allrecords = $this->model->getAllrecords();
      $this->view->render('index/index');

   }
   public function edit_submit_index()
   {

      $action = $_POST['submit'];
      if ($action == 'submit') {
         echo '$action';
         $arg  = $_POST['id'];
         $data = array(
            'id'      => null,
            'name'    => $_POST['name'],
            'email'   => $_POST['email'],
            'contact' => $_POST['contact'],
         );
         $this->model->submit_index($data);

      }
      header('location: index');
   }
}

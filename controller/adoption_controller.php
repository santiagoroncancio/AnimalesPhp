<?php
require_once 'model/user.php';
class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new Adoption();
    }

    public function indexAdoption()
    {
        require_once 'view/adoption.php';
    }

    public function showById()
    {
        $adoption=new Adoption();
        if(isset($_REQUEST['id']))
        {
            $adoption=$this->model->getById($_REQUEST['id']);
        }
        require_once 'view/adoption_form.php';
    }

    public function save()
    {
        $adoption=new Adoption();
        $adoption->id=$_REQUEST['id'];
        $adoption->idAnimal=$_REQUEST['idAnimal'];
        $adoption->idUser=$_REQUEST['idUser'];
        $adoption->date=$_REQUEST['date'];
        $adoption->reason['reason'];

        $adoption->id>0?$adoption->update():$adoption->create();
        header('location: index.php');
    }

    public function quit()
    {
        $this->model->delete($_REQUEST['id']);
        header('location: index.php');
    }

}

?>
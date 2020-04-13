<?php
require_once 'core/crud.php';
class User extends Crud
{
    private $id;
    private $document;
    private $name;
    private $lastName;
    private $sex;
    private $address;
    private $phone;
    private $age;

    const TABLE = 'user';
    private $pdo;

    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->pdo=parent::conexion();
    }

    public function __set($name,$value)
    {
        $this->$name=$value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function create()
    {
        try
        {
            $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (document, name, lastName, sex, address, phone, age) VALUES (?,?,?,?,?,?,?)");
            $stm->execute(array($this->document,$this->name,$this->lastName,$this->sex,$this->address,$this->phone,$this->age));
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function update()
    {
        try
        {
            $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET document=?, name=?, lastName=?, sex=?, address=?, phone=?, age=? WHERE id=?");
            $stm->execute(array($this->document,$this->name,$this->lastName,$this->sex,$this->address,$this->phone,$this->age,$this->id));
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

}
?>
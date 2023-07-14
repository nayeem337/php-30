<?php


namespace App\classes;

use App\classes\User;

class Homepage extends User
{
    public $name = 'Soruvi';
    protected $city = 'Dhaka';
    private $country = 'Bangladesh';
    public $studentName = 'Sameen';

    public function index ()
    {
//        echo 'Hello Basis';

        $user = new User();
        echo $user->studentName;
//        $this->yourBoyFriendName();
//        header('Location: action.php?page=signin');
    }

    protected function bitm ()
    {
        echo 'hello Bitm';
    }

    private function yourBoyFriendName ()
    {
        echo 'Papon';
    }
}
<?php


namespace App\classes;


class User
{

    public $studentName = 'Nayeem';
    public function allUsers ()
    {
        return [
            0 => [
                'id' => 1,
                'email' => 'admin@admin.com',
                'password' => '123456',
            ],
            1 => [
                'id' => 2,
                'email' => 'mehedi@besi.com',
                'password' => '123456',
            ],
        ];
    }

    protected function country ()
    {
        echo 'country: Bangladesh';
    }

    private function phoneNumber ()
    {
        echo '01255255696';
    }
}
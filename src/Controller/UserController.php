<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function getUsers () {
        $users = [
            [
                'id' => 1,
                'name' => 'Макс',
                'phone' => '45645643453',
            ],
            [
                'id' => 2,
                'name' => 'Влад',
                'phone' => '6656545645',
            ],
            [
                'id' => 3,
                'name' => 'Стас',
                'phone' => '435345345',
            ]
        ];
        return $this->json($users);
    }

    public function getUser1 ($id) {
        $user = [
            'id' => $id,
            'name' => 'Стас',
            'phone' => '555555555',
        ];
        return $this->json($user);
    }

    public function createUser () {
        return $this->json('Пользователь успешно создан');
    }

    public function patchUser ($id) {
        return $this->json('Пользователь успешно изменен');
    }

    public function deleteUser ($id) {
        return $this->json('Пользователь успешно удален');
    }
}

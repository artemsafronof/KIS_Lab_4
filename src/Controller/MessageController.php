<?php


namespace App\Controller;

use \Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    /**
     * @param $userId
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getUserMessages ($userId) {
        $messages = [
            [
                'id' => 1,
                'sender' => [
                    'id' => 1,
                    'name' => 'Макс',
                    'phone' => '45645643453',
                ],
                'conversation' => [
                    'id' => 1,
                    'title' => 'Сообщество 3',
                    'description' => 'тут все',
                    'status' => 'active'
                ],
                'text' => 'Hello everybody',
                'status' => 'deleted'
            ],
            [
                'id' => 2,
                'sender' => [
                    'id' => 1,
                    'name' => 'Макс',
                    'phone' => '45645643453',
                ],
                'conversation' => [
                    'id' => 1,
                    'title' => 'Сообщество 3',
                    'description' => 'тут все',
                    'status' => 'active'
                ],
                'text' => 'Bye everybody',
                'status' => 'sent'
            ],
        ];
        return $this->json($messages);
    }

    public function getMessage ($id) {
        $message = [
            'id' => 1,
            'sender' => [
                'id' => 1,
                'name' => 'Макс',
                'phone' => '45645643453',
            ],
            'conversation' => [
                'id' => 1,
                'title' => 'Сообщество 3',
                'description' => 'тут все',
                'status' => 'active'
            ],
            'text' => 'Hello everybody',
            'status' => 'deleted'
        ];
        return $this->json($message);
    }

    public function createMessage () {
        return $this->json('Сообщение успешно создано');
    }

    public function patchMessage ($id) {
        return $this->json('Сообщение успешно изменено');
    }

    public function deleteMessage ($id) {
        return $this->json('Сообщение успешно удалено');
    }
}

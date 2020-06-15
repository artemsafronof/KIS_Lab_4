<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConversationController extends AbstractController
{
    public function getUserConversations($userId)
    {
        $conversations = [
            [
                'id' => 1,
                'title' => 'Сообщество 3',
                'description' => 'тут все',
                'status' => 'active',
                'participants' => [
                    [
                        'id' => 1,
                        'name' => 'Макс',
                        'phone' => '45645643453',
                    ],
                    [
                        'id' => 2,
                        'name' => 'Стас',
                        'phone' => '45645643454',
                    ],
                    [
                        'id' => 3,
                        'name' => 'Гена',
                        'phone' => '45645643455',
                    ],
                ],
            ],
            [
                'id' => 2,
                'title' => 'Сообщество 2',
                'description' => 'тут не все',
                'status' => 'banned',
                'participants' => [
                    [
                        'id' => 1,
                        'name' => 'Макс',
                        'phone' => '45645643453',
                    ],
                    [
                        'id' => 2,
                        'name' => 'Стас',
                        'phone' => '45645643454',
                    ],
                ],
            ],
        ];
        return $this->json($conversations);
    }

    public function getConversation($id)
    {
        $conversation = [
            'id' => 1,
            'title' => 'Сообщество 3',
            'description' => 'тут все',
            'status' => 'active',
            'participants' => [
                [
                    'id' => 1,
                    'name' => 'Макс',
                    'phone' => '45645643453',
                ],
                [
                    'id' => 2,
                    'name' => 'Стас',
                    'phone' => '45645643454',
                ],
                [
                    'id' => 3,
                    'name' => 'Гена',
                    'phone' => '45645643455',
                ],
            ],
        ];
        return $this->json($conversation);
    }

    public function createConversation()
    {
        return $this->json('Беседа успешно создано');
    }

    public function patchConversation($id)
    {
        return $this->json('Беседа успешно изменена');
    }

    public function deleteConversation($id)
    {
        return $this->json('Беседа успешно удалена');
    }
}

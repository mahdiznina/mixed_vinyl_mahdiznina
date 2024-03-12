<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{   
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]
    public function getSong(int $id, LoggerInterface $logger): Response
    {
          
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => '/audio/Eminem - Godzilla ft. Juice WRLD (Directed by Cole Bennett) (1).mp3',
        ];
        
        return $this->json($song);
    }

}
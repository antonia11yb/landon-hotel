<?php 

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\DateCalculator;

class IndexController extends AbstractController
{
    private const HOTEL_OPENED =  1969;
    /**
     * @Route("/")
     */
    public function home(LoggerInterface $logger, DateCalculator $dateCalc)
    {
        $logger->info('Homepage Loaded  ');

        $year = $dateCalc->yearsDifference(self::HOTEL_OPENED);
        $images = [
            ['url' => 'images/hotel/intro_room.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_pool.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_dining.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_attractions.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_wedding.jpg', 'class' => 'hidesn'],
        ];
        return $this->render('index.html.twig', [
            'year' => $year,
            'images' => $images
        ]);
    }

}
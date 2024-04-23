<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class LuckyController
{

    /**
     * @return Response
     * @throws \Exception
     */
    #[Route(
        '/lucky/number',
        'lucky_number_route_name' // must be unique in app
    )]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
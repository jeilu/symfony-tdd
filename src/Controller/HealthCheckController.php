<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HealthCheckController
{
    #[Route(path: '/api/v1/health-check')]
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(Response::HTTP_OK);
    }
}
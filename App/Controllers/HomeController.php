<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class HomeController
 * Úvodná stránka knižnice.
 */
class HomeController extends BaseController
{
    /**
     * Všetky akcie sú dostupné všetkým používateľom.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Zobrazí úvodnú stránku (pohľad App/Views/Home/index.view.php).
     */
    public function index(Request $request): Response
    {
        return $this->html();
    }
}

<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class CatalogController
 *
 */
class CatalogController extends BaseController
{
    /**
     * Všetky akcie sú dostupné všetkým používateľom.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Zobrazí katalóg kníh (pohľad App/Views/Catalog/index.view.php).
     */
    public function index(Request $request): Response
    {
        return $this->html();
    }
}

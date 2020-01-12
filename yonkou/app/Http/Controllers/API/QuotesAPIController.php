<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCitationAPIRequest;
use App\Http\Requests\API\UpdateCitationAPIRequest;
use App\Models\Citation;
use App\Repositories\CitationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CitationController
 * @package App\Http\Controllers\API
 */

class QuotesAPIController extends AppBaseController
{

    /** @var  CitationRepository */
    private $citationRepository;

    public function __construct(CitationRepository $citationRepo)
    {
        $this->citationRepository = $citationRepo;
    }

    public function index(Request $request)
    {
        // $citations = $this->citationRepository->all(
        //     $request->except(['skip', 'limit']),
        //     $request->get('skip'),
        //     $request->get('limit')
        // );

        // $citations = Citation::all();

        foreach(Citation::all() as $citation){
            $citations[] = array(
                "auteur" => $citation->auteur,
                "citation" => $citation->citation
            );
        }

        return $this->sendResponse($citations, 'Citations retrieved successfully');

    }

}

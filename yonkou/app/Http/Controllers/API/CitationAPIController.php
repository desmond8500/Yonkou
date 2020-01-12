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

class CitationAPIController extends AppBaseController
{
    public function list(Request $request)
    {
        $citations = Citation::all();
        $citations = $this->citationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($citations->toArray(), 'Citations retrieved successfully');
    }

    /** @var  CitationRepository */
    private $citationRepository;

    public function __construct(CitationRepository $citationRepo)
    {
        $this->citationRepository = $citationRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/citations",
     *      summary="Get a listing of the Citations.",
     *      tags={"Citation"},
     *      description="Get all Citations",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Citation")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $citations = $this->citationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($citations->toArray(), 'Citations retrieved successfully');
    }

    /**
     * @param CreateCitationAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/citations",
     *      summary="Store a newly created Citation in storage",
     *      tags={"Citation"},
     *      description="Store Citation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Citation that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Citation")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Citation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateCitationAPIRequest $request)
    {
        $input = $request->all();

        $citation = $this->citationRepository->create($input);

        return $this->sendResponse($citation->toArray(), 'Citation saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/citations/{id}",
     *      summary="Display the specified Citation",
     *      tags={"Citation"},
     *      description="Get Citation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Citation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Citation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Citation $citation */
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            return $this->sendError('Citation not found');
        }

        return $this->sendResponse($citation->toArray(), 'Citation retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateCitationAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/citations/{id}",
     *      summary="Update the specified Citation in storage",
     *      tags={"Citation"},
     *      description="Update Citation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Citation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Citation that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Citation")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Citation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateCitationAPIRequest $request)
    {
        $input = $request->all();

        /** @var Citation $citation */
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            return $this->sendError('Citation not found');
        }

        $citation = $this->citationRepository->update($input, $id);

        return $this->sendResponse($citation->toArray(), 'Citation updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/citations/{id}",
     *      summary="Remove the specified Citation from storage",
     *      tags={"Citation"},
     *      description="Delete Citation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Citation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Citation $citation */
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            return $this->sendError('Citation not found');
        }

        $citation->delete();

        return $this->sendSuccess('Citation deleted successfully');
    }
}

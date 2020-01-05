<?php

namespace App\Http\Controllers;

use App\DataTables\CitationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCitationRequest;
use App\Http\Requests\UpdateCitationRequest;
use App\Repositories\CitationRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CitationController extends AppBaseController
{
    /** @var  CitationRepository */
    private $citationRepository;

    public function __construct(CitationRepository $citationRepo)
    {
        $this->citationRepository = $citationRepo;
    }

    /**
     * Display a listing of the Citation.
     *
     * @param CitationDataTable $citationDataTable
     * @return Response
     */
    public function index(CitationDataTable $citationDataTable)
    {
        return $citationDataTable->render('citations.index');
    }

    /**
     * Show the form for creating a new Citation.
     *
     * @return Response
     */
    public function create()
    {
        return view('citations.create');
    }

    /**
     * Store a newly created Citation in storage.
     *
     * @param CreateCitationRequest $request
     *
     * @return Response
     */
    public function store(CreateCitationRequest $request)
    {
        $input = $request->all();

        $citation = $this->citationRepository->create($input);

        Flash::success('Citation saved successfully.');

        return redirect(route('citations.index'));
    }

    /**
     * Display the specified Citation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        return view('citations.show')->with('citation', $citation);
    }

    /**
     * Show the form for editing the specified Citation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        return view('citations.edit')->with('citation', $citation);
    }

    /**
     * Update the specified Citation in storage.
     *
     * @param  int              $id
     * @param UpdateCitationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCitationRequest $request)
    {
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        $citation = $this->citationRepository->update($request->all(), $id);

        Flash::success('Citation updated successfully.');

        return redirect(route('citations.index'));
    }

    /**
     * Remove the specified Citation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citation = $this->citationRepository->find($id);

        if (empty($citation)) {
            Flash::error('Citation not found');

            return redirect(route('citations.index'));
        }

        $this->citationRepository->delete($id);

        Flash::success('Citation deleted successfully.');

        return redirect(route('citations.index'));
    }
}

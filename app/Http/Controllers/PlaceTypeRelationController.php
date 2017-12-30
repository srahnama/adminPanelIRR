<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlaceTypeRelationRequest;
use App\Http\Requests\UpdatePlaceTypeRelationRequest;
use App\Repositories\PlaceTypeRelationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlaceTypeRelationController extends AppBaseController
{
    /** @var  PlaceTypeRelationRepository */
    private $placeTypeRelationRepository;

    public function __construct(PlaceTypeRelationRepository $placeTypeRelationRepo)
    {
        $this->placeTypeRelationRepository = $placeTypeRelationRepo;
    }

    /**
     * Display a listing of the PlaceTypeRelation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->placeTypeRelationRepository->pushCriteria(new RequestCriteria($request));
        $placeTypeRelations = $this->placeTypeRelationRepository->all();

        return view('place_type_relations.index')
            ->with('placeTypeRelations', $placeTypeRelations);
    }

    /**
     * Show the form for creating a new PlaceTypeRelation.
     *
     * @return Response
     */
    public function create()
    {
        return view('place_type_relations.create');
    }

    /**
     * Store a newly created PlaceTypeRelation in storage.
     *
     * @param CreatePlaceTypeRelationRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaceTypeRelationRequest $request)
    {
        $input = $request->all();

        $placeTypeRelation = $this->placeTypeRelationRepository->create($input);

        Flash::success('Place Type Relation saved successfully.');

        return redirect(route('placeTypeRelations.index'));
    }

    /**
     * Display the specified PlaceTypeRelation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $placeTypeRelation = $this->placeTypeRelationRepository->findWithoutFail($id);

        if (empty($placeTypeRelation)) {
            Flash::error('Place Type Relation not found');

            return redirect(route('placeTypeRelations.index'));
        }

        return view('place_type_relations.show')->with('placeTypeRelation', $placeTypeRelation);
    }

    /**
     * Show the form for editing the specified PlaceTypeRelation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $placeTypeRelation = $this->placeTypeRelationRepository->findWithoutFail($id);

        if (empty($placeTypeRelation)) {
            Flash::error('Place Type Relation not found');

            return redirect(route('placeTypeRelations.index'));
        }

        return view('place_type_relations.edit')->with('placeTypeRelation', $placeTypeRelation);
    }

    /**
     * Update the specified PlaceTypeRelation in storage.
     *
     * @param  int              $id
     * @param UpdatePlaceTypeRelationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaceTypeRelationRequest $request)
    {
        $placeTypeRelation = $this->placeTypeRelationRepository->findWithoutFail($id);

        if (empty($placeTypeRelation)) {
            Flash::error('Place Type Relation not found');

            return redirect(route('placeTypeRelations.index'));
        }

        $placeTypeRelation = $this->placeTypeRelationRepository->update($request->all(), $id);

        Flash::success('Place Type Relation updated successfully.');

        return redirect(route('placeTypeRelations.index'));
    }

    /**
     * Remove the specified PlaceTypeRelation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $placeTypeRelation = $this->placeTypeRelationRepository->findWithoutFail($id);

        if (empty($placeTypeRelation)) {
            Flash::error('Place Type Relation not found');

            return redirect(route('placeTypeRelations.index'));
        }

        $this->placeTypeRelationRepository->delete($id);

        Flash::success('Place Type Relation deleted successfully.');

        return redirect(route('placeTypeRelations.index'));
    }
}

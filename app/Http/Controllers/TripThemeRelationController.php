<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripThemeRelationRequest;
use App\Http\Requests\UpdateTripThemeRelationRequest;
use App\Repositories\TripThemeRelationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TripThemeRelationController extends AppBaseController
{
    /** @var  TripThemeRelationRepository */
    private $tripThemeRelationRepository;

    public function __construct(TripThemeRelationRepository $tripThemeRelationRepo)
    {
        $this->tripThemeRelationRepository = $tripThemeRelationRepo;
    }

    /**
     * Display a listing of the TripThemeRelation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tripThemeRelationRepository->pushCriteria(new RequestCriteria($request));
        $tripThemeRelations = $this->tripThemeRelationRepository->all();

        return view('trip_theme_relations.index')
            ->with('tripThemeRelations', $tripThemeRelations);
    }

    /**
     * Show the form for creating a new TripThemeRelation.
     *
     * @return Response
     */
    public function create()
    {
        return view('trip_theme_relations.create');
    }

    /**
     * Store a newly created TripThemeRelation in storage.
     *
     * @param CreateTripThemeRelationRequest $request
     *
     * @return Response
     */
    public function store(CreateTripThemeRelationRequest $request)
    {
        $input = $request->all();

        $tripThemeRelation = $this->tripThemeRelationRepository->create($input);

        Flash::success('Trip Theme Relation saved successfully.');

        return redirect(route('tripThemeRelations.index'));
    }

    /**
     * Display the specified TripThemeRelation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tripThemeRelation = $this->tripThemeRelationRepository->findWithoutFail($id);

        if (empty($tripThemeRelation)) {
            Flash::error('Trip Theme Relation not found');

            return redirect(route('tripThemeRelations.index'));
        }

        return view('trip_theme_relations.show')->with('tripThemeRelation', $tripThemeRelation);
    }

    /**
     * Show the form for editing the specified TripThemeRelation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tripThemeRelation = $this->tripThemeRelationRepository->findWithoutFail($id);

        if (empty($tripThemeRelation)) {
            Flash::error('Trip Theme Relation not found');

            return redirect(route('tripThemeRelations.index'));
        }

        return view('trip_theme_relations.edit')->with('tripThemeRelation', $tripThemeRelation);
    }

    /**
     * Update the specified TripThemeRelation in storage.
     *
     * @param  int              $id
     * @param UpdateTripThemeRelationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripThemeRelationRequest $request)
    {
        $tripThemeRelation = $this->tripThemeRelationRepository->findWithoutFail($id);

        if (empty($tripThemeRelation)) {
            Flash::error('Trip Theme Relation not found');

            return redirect(route('tripThemeRelations.index'));
        }

        $tripThemeRelation = $this->tripThemeRelationRepository->update($request->all(), $id);

        Flash::success('Trip Theme Relation updated successfully.');

        return redirect(route('tripThemeRelations.index'));
    }

    /**
     * Remove the specified TripThemeRelation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tripThemeRelation = $this->tripThemeRelationRepository->findWithoutFail($id);

        if (empty($tripThemeRelation)) {
            Flash::error('Trip Theme Relation not found');

            return redirect(route('tripThemeRelations.index'));
        }

        $this->tripThemeRelationRepository->delete($id);

        Flash::success('Trip Theme Relation deleted successfully.');

        return redirect(route('tripThemeRelations.index'));
    }
}

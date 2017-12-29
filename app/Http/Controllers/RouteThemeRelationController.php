<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRouteThemeRelationRequest;
use App\Http\Requests\UpdateRouteThemeRelationRequest;
use App\Repositories\RouteThemeRelationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RouteThemeRelationController extends AppBaseController
{
    /** @var  RouteThemeRelationRepository */
    private $routeThemeRelationRepository;

    public function __construct(RouteThemeRelationRepository $routeThemeRelationRepo)
    {
        $this->routeThemeRelationRepository = $routeThemeRelationRepo;
    }

    /**
     * Display a listing of the RouteThemeRelation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->routeThemeRelationRepository->pushCriteria(new RequestCriteria($request));
        $routeThemeRelations = $this->routeThemeRelationRepository->all();

        return view('route_theme_relations.index')
            ->with('routeThemeRelations', $routeThemeRelations);
    }

    /**
     * Show the form for creating a new RouteThemeRelation.
     *
     * @return Response
     */
    public function create()
    {
        return view('route_theme_relations.create');
    }

    /**
     * Store a newly created RouteThemeRelation in storage.
     *
     * @param CreateRouteThemeRelationRequest $request
     *
     * @return Response
     */
    public function store(CreateRouteThemeRelationRequest $request)
    {
        $input = $request->all();

        $routeThemeRelation = $this->routeThemeRelationRepository->create($input);

        Flash::success('Route Theme Relation saved successfully.');

        return redirect(route('routeThemeRelations.index'));
    }

    /**
     * Display the specified RouteThemeRelation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $routeThemeRelation = $this->routeThemeRelationRepository->findWithoutFail($id);

        if (empty($routeThemeRelation)) {
            Flash::error('Route Theme Relation not found');

            return redirect(route('routeThemeRelations.index'));
        }

        return view('route_theme_relations.show')->with('routeThemeRelation', $routeThemeRelation);
    }

    /**
     * Show the form for editing the specified RouteThemeRelation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $routeThemeRelation = $this->routeThemeRelationRepository->findWithoutFail($id);

        if (empty($routeThemeRelation)) {
            Flash::error('Route Theme Relation not found');

            return redirect(route('routeThemeRelations.index'));
        }

        return view('route_theme_relations.edit')->with('routeThemeRelation', $routeThemeRelation);
    }

    /**
     * Update the specified RouteThemeRelation in storage.
     *
     * @param  int              $id
     * @param UpdateRouteThemeRelationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRouteThemeRelationRequest $request)
    {
        $routeThemeRelation = $this->routeThemeRelationRepository->findWithoutFail($id);

        if (empty($routeThemeRelation)) {
            Flash::error('Route Theme Relation not found');

            return redirect(route('routeThemeRelations.index'));
        }

        $routeThemeRelation = $this->routeThemeRelationRepository->update($request->all(), $id);

        Flash::success('Route Theme Relation updated successfully.');

        return redirect(route('routeThemeRelations.index'));
    }

    /**
     * Remove the specified RouteThemeRelation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $routeThemeRelation = $this->routeThemeRelationRepository->findWithoutFail($id);

        if (empty($routeThemeRelation)) {
            Flash::error('Route Theme Relation not found');

            return redirect(route('routeThemeRelations.index'));
        }

        $this->routeThemeRelationRepository->delete($id);

        Flash::success('Route Theme Relation deleted successfully.');

        return redirect(route('routeThemeRelations.index'));
    }
}

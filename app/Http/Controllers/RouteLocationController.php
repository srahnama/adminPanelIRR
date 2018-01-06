<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRouteLocationRequest;
use App\Http\Requests\UpdateRouteLocationRequest;
use App\Repositories\RouteLocationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RouteLocationController extends AppBaseController
{
    /** @var  RouteLocationRepository */
    private $routeLocationRepository;

    public function __construct(RouteLocationRepository $routeLocationRepo)
    {
        $this->routeLocationRepository = $routeLocationRepo;
    }

    /**
     * Display a listing of the RouteLocation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->routeLocationRepository->pushCriteria(new RequestCriteria($request));
        $routeLocations = $this->routeLocationRepository->all();

        return view('route_locations.index')
            ->with('routeLocations', $routeLocations);
    }

    /**
     * Show the form for creating a new RouteLocation.
     *
     * @return Response
     */
    public function create()
    {
        return view('route_locations.create');
    }

    /**
     * Store a newly created RouteLocation in storage.
     *
     * @param CreateRouteLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateRouteLocationRequest $request)
    {
        $input = array_remove_null($request->all());

        $routeLocation = $this->routeLocationRepository->create($input);

        Flash::success('Route Location saved successfully.');

        return redirect(route('routeLocations.index'));
    }

    /**
     * Display the specified RouteLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $routeLocation = $this->routeLocationRepository->findWithoutFail($id);

        if (empty($routeLocation)) {
            Flash::error('Route Location not found');

            return redirect(route('routeLocations.index'));
        }

        return view('route_locations.show')->with('routeLocation', $routeLocation);
    }

    /**
     * Show the form for editing the specified RouteLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $routeLocation = $this->routeLocationRepository->findWithoutFail($id);

        if (empty($routeLocation)) {
            Flash::error('Route Location not found');

            return redirect(route('routeLocations.index'));
        }

        return view('route_locations.edit')->with('routeLocation', $routeLocation);
    }

    /**
     * Update the specified RouteLocation in storage.
     *
     * @param  int              $id
     * @param UpdateRouteLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRouteLocationRequest $request)
    {
        $routeLocation = $this->routeLocationRepository->findWithoutFail($id);

        if (empty($routeLocation)) {
            Flash::error('Route Location not found');

            return redirect(route('routeLocations.index'));
        }

        $routeLocation = $this->routeLocationRepository->update($request->all(), $id);

        Flash::success('Route Location updated successfully.');

        return redirect(route('routeLocations.index'));
    }

    /**
     * Remove the specified RouteLocation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $routeLocation = $this->routeLocationRepository->findWithoutFail($id);

        if (empty($routeLocation)) {
            Flash::error('Route Location not found');

            return redirect(route('routeLocations.index'));
        }

        $this->routeLocationRepository->delete($id);

        Flash::success('Route Location deleted successfully.');

        return redirect(route('routeLocations.index'));
    }
}

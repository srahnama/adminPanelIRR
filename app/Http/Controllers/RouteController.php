<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRouteRequest;
use App\Http\Requests\UpdateRouteRequest;
use App\Repositories\RouteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RouteController extends AppBaseController
{
    /** @var  RouteRepository */
    private $routeRepository;

    public function __construct(RouteRepository $routeRepo)
    {
        $this->routeRepository = $routeRepo;
    }

    /**
     * Display a listing of the Route.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->routeRepository->pushCriteria(new RequestCriteria($request));
        $routes = $this->routeRepository->all();

        return view('routes.index')
            ->with('routes', $routes);
    }

    /**
     * Show the form for creating a new Route.
     *
     * @return Response
     */
    public function create()
    {
        return view('routes.create');
    }

    /**
     * Store a newly created Route in storage.
     *
     * @param CreateRouteRequest $request
     *
     * @return Response
     */
    public function store(CreateRouteRequest $request)
    {
        $input = $request->all();

        $route = $this->routeRepository->create($input);

        Flash::success('Route saved successfully.');

        return redirect(route('routes.index'));
    }

    /**
     * Display the specified Route.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $route = $this->routeRepository->findWithoutFail($id);

        if (empty($route)) {
            Flash::error('Route not found');

            return redirect(route('routes.index'));
        }

        return view('routes.show')->with('route', $route);
    }

    /**
     * Show the form for editing the specified Route.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $route = $this->routeRepository->findWithoutFail($id);

        if (empty($route)) {
            Flash::error('Route not found');

            return redirect(route('routes.index'));
        }

        return view('routes.edit')->with('route', $route);
    }

    /**
     * Update the specified Route in storage.
     *
     * @param  int              $id
     * @param UpdateRouteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRouteRequest $request)
    {
        $route = $this->routeRepository->findWithoutFail($id);

        if (empty($route)) {
            Flash::error('Route not found');

            return redirect(route('routes.index'));
        }

        $route = $this->routeRepository->update($request->all(), $id);

        Flash::success('Route updated successfully.');

        return redirect(route('routes.index'));
    }

    /**
     * Remove the specified Route from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $route = $this->routeRepository->findWithoutFail($id);

        if (empty($route)) {
            Flash::error('Route not found');

            return redirect(route('routes.index'));
        }

        $this->routeRepository->delete($id);

        Flash::success('Route deleted successfully.');

        return redirect(route('routes.index'));
    }
}

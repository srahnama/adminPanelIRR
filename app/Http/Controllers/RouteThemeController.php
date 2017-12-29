<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRouteThemeRequest;
use App\Http\Requests\UpdateRouteThemeRequest;
use App\Repositories\RouteThemeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RouteThemeController extends AppBaseController
{
    /** @var  RouteThemeRepository */
    private $routeThemeRepository;

    public function __construct(RouteThemeRepository $routeThemeRepo)
    {
        $this->routeThemeRepository = $routeThemeRepo;
    }

    /**
     * Display a listing of the RouteTheme.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->routeThemeRepository->pushCriteria(new RequestCriteria($request));
        $routeThemes = $this->routeThemeRepository->all();

        return view('route_themes.index')
            ->with('routeThemes', $routeThemes);
    }

    /**
     * Show the form for creating a new RouteTheme.
     *
     * @return Response
     */
    public function create()
    {
        return view('route_themes.create');
    }

    /**
     * Store a newly created RouteTheme in storage.
     *
     * @param CreateRouteThemeRequest $request
     *
     * @return Response
     */
    public function store(CreateRouteThemeRequest $request)
    {
        $input = $request->all();

        $routeTheme = $this->routeThemeRepository->create($input);

        Flash::success('Route Theme saved successfully.');

        return redirect(route('routeThemes.index'));
    }

    /**
     * Display the specified RouteTheme.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $routeTheme = $this->routeThemeRepository->findWithoutFail($id);

        if (empty($routeTheme)) {
            Flash::error('Route Theme not found');

            return redirect(route('routeThemes.index'));
        }

        return view('route_themes.show')->with('routeTheme', $routeTheme);
    }

    /**
     * Show the form for editing the specified RouteTheme.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $routeTheme = $this->routeThemeRepository->findWithoutFail($id);

        if (empty($routeTheme)) {
            Flash::error('Route Theme not found');

            return redirect(route('routeThemes.index'));
        }

        return view('route_themes.edit')->with('routeTheme', $routeTheme);
    }

    /**
     * Update the specified RouteTheme in storage.
     *
     * @param  int              $id
     * @param UpdateRouteThemeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRouteThemeRequest $request)
    {
        $routeTheme = $this->routeThemeRepository->findWithoutFail($id);

        if (empty($routeTheme)) {
            Flash::error('Route Theme not found');

            return redirect(route('routeThemes.index'));
        }

        $routeTheme = $this->routeThemeRepository->update($request->all(), $id);

        Flash::success('Route Theme updated successfully.');

        return redirect(route('routeThemes.index'));
    }

    /**
     * Remove the specified RouteTheme from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $routeTheme = $this->routeThemeRepository->findWithoutFail($id);

        if (empty($routeTheme)) {
            Flash::error('Route Theme not found');

            return redirect(route('routeThemes.index'));
        }

        $this->routeThemeRepository->delete($id);

        Flash::success('Route Theme deleted successfully.');

        return redirect(route('routeThemes.index'));
    }
}

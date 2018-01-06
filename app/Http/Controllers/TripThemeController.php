<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripThemeRequest;
use App\Http\Requests\UpdateTripThemeRequest;
use App\Repositories\TripThemeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TripThemeController extends AppBaseController
{
    /** @var  TripThemeRepository */
    private $tripThemeRepository;

    public function __construct(TripThemeRepository $tripThemeRepo)
    {
        $this->tripThemeRepository = $tripThemeRepo;
    }

    /**
     * Display a listing of the TripTheme.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tripThemeRepository->pushCriteria(new RequestCriteria($request));
        $tripThemes = $this->tripThemeRepository->all();

        return view('trip_themes.index')
            ->with('tripThemes', $tripThemes);
    }

    /**
     * Show the form for creating a new TripTheme.
     *
     * @return Response
     */
    public function create()
    {
        return view('trip_themes.create');
    }

    /**
     * Store a newly created TripTheme in storage.
     *
     * @param CreateTripThemeRequest $request
     *
     * @return Response
     */
    public function store(CreateTripThemeRequest $request)
    {
        $input = array_remove_null($request->all());

        $tripTheme = $this->tripThemeRepository->create($input);

        Flash::success('Trip Theme saved successfully.');

        return redirect(route('tripThemes.index'));
    }

    /**
     * Display the specified TripTheme.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tripTheme = $this->tripThemeRepository->findWithoutFail($id);

        if (empty($tripTheme)) {
            Flash::error('Trip Theme not found');

            return redirect(route('tripThemes.index'));
        }

        return view('trip_themes.show')->with('tripTheme', $tripTheme);
    }

    /**
     * Show the form for editing the specified TripTheme.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tripTheme = $this->tripThemeRepository->findWithoutFail($id);

        if (empty($tripTheme)) {
            Flash::error('Trip Theme not found');

            return redirect(route('tripThemes.index'));
        }

        return view('trip_themes.edit')->with('tripTheme', $tripTheme);
    }

    /**
     * Update the specified TripTheme in storage.
     *
     * @param  int              $id
     * @param UpdateTripThemeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripThemeRequest $request)
    {
        $tripTheme = $this->tripThemeRepository->findWithoutFail($id);

        if (empty($tripTheme)) {
            Flash::error('Trip Theme not found');

            return redirect(route('tripThemes.index'));
        }

        $tripTheme = $this->tripThemeRepository->update($request->all(), $id);

        Flash::success('Trip Theme updated successfully.');

        return redirect(route('tripThemes.index'));
    }

    /**
     * Remove the specified TripTheme from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tripTheme = $this->tripThemeRepository->findWithoutFail($id);

        if (empty($tripTheme)) {
            Flash::error('Trip Theme not found');

            return redirect(route('tripThemes.index'));
        }

        $this->tripThemeRepository->delete($id);

        Flash::success('Trip Theme deleted successfully.');

        return redirect(route('tripThemes.index'));
    }
}

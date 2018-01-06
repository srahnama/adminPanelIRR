<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripLocationRequest;
use App\Http\Requests\UpdateTripLocationRequest;
use App\Repositories\TripLocationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TripLocationController extends AppBaseController
{
    /** @var  TripLocationRepository */
    private $tripLocationRepository;

    public function __construct(TripLocationRepository $tripLocationRepo)
    {
        $this->tripLocationRepository = $tripLocationRepo;
    }

    /**
     * Display a listing of the TripLocation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tripLocationRepository->pushCriteria(new RequestCriteria($request));
        $tripLocations = $this->tripLocationRepository->all();

        return view('trip_locations.index')
            ->with('tripLocations', $tripLocations);
    }

    /**
     * Show the form for creating a new TripLocation.
     *
     * @return Response
     */
    public function create()
    {
        return view('trip_locations.create');
    }

    /**
     * Store a newly created TripLocation in storage.
     *
     * @param CreateTripLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateTripLocationRequest $request)
    {
        $input = array_remove_null($request->all());

        $tripLocation = $this->tripLocationRepository->create($input);

        Flash::success('Trip Location saved successfully.');

        return redirect(route('tripLocations.index'));
    }

    /**
     * Display the specified TripLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tripLocation = $this->tripLocationRepository->findWithoutFail($id);

        if (empty($tripLocation)) {
            Flash::error('Trip Location not found');

            return redirect(route('tripLocations.index'));
        }

        return view('trip_locations.show')->with('tripLocation', $tripLocation);
    }

    /**
     * Show the form for editing the specified TripLocation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tripLocation = $this->tripLocationRepository->findWithoutFail($id);

        if (empty($tripLocation)) {
            Flash::error('Trip Location not found');

            return redirect(route('tripLocations.index'));
        }

        return view('trip_locations.edit')->with('tripLocation', $tripLocation);
    }

    /**
     * Update the specified TripLocation in storage.
     *
     * @param  int              $id
     * @param UpdateTripLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripLocationRequest $request)
    {
        $tripLocation = $this->tripLocationRepository->findWithoutFail($id);

        if (empty($tripLocation)) {
            Flash::error('Trip Location not found');

            return redirect(route('tripLocations.index'));
        }

        $tripLocation = $this->tripLocationRepository->update($request->all(), $id);

        Flash::success('Trip Location updated successfully.');

        return redirect(route('tripLocations.index'));
    }

    /**
     * Remove the specified TripLocation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tripLocation = $this->tripLocationRepository->findWithoutFail($id);

        if (empty($tripLocation)) {
            Flash::error('Trip Location not found');

            return redirect(route('tripLocations.index'));
        }

        $this->tripLocationRepository->delete($id);

        Flash::success('Trip Location deleted successfully.');

        return redirect(route('tripLocations.index'));
    }
}

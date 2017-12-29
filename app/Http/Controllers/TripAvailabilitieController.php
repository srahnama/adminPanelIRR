<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripAvailabilitieRequest;
use App\Http\Requests\UpdateTripAvailabilitieRequest;
use App\Repositories\TripAvailabilitieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TripAvailabilitieController extends AppBaseController
{
    /** @var  TripAvailabilitieRepository */
    private $tripAvailabilitieRepository;

    public function __construct(TripAvailabilitieRepository $tripAvailabilitieRepo)
    {
        $this->tripAvailabilitieRepository = $tripAvailabilitieRepo;
    }

    /**
     * Display a listing of the TripAvailabilitie.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tripAvailabilitieRepository->pushCriteria(new RequestCriteria($request));
        $tripAvailabilities = $this->tripAvailabilitieRepository->all();

        return view('trip_availabilities.index')
            ->with('tripAvailabilities', $tripAvailabilities);
    }

    /**
     * Show the form for creating a new TripAvailabilitie.
     *
     * @return Response
     */
    public function create()
    {
        return view('trip_availabilities.create');
    }

    /**
     * Store a newly created TripAvailabilitie in storage.
     *
     * @param CreateTripAvailabilitieRequest $request
     *
     * @return Response
     */
    public function store(CreateTripAvailabilitieRequest $request)
    {
        $input = $request->all();

        $tripAvailabilitie = $this->tripAvailabilitieRepository->create($input);

        Flash::success('Trip Availabilitie saved successfully.');

        return redirect(route('tripAvailabilities.index'));
    }

    /**
     * Display the specified TripAvailabilitie.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tripAvailabilitie = $this->tripAvailabilitieRepository->findWithoutFail($id);

        if (empty($tripAvailabilitie)) {
            Flash::error('Trip Availabilitie not found');

            return redirect(route('tripAvailabilities.index'));
        }

        return view('trip_availabilities.show')->with('tripAvailabilitie', $tripAvailabilitie);
    }

    /**
     * Show the form for editing the specified TripAvailabilitie.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tripAvailabilitie = $this->tripAvailabilitieRepository->findWithoutFail($id);

        if (empty($tripAvailabilitie)) {
            Flash::error('Trip Availabilitie not found');

            return redirect(route('tripAvailabilities.index'));
        }

        return view('trip_availabilities.edit')->with('tripAvailabilitie', $tripAvailabilitie);
    }

    /**
     * Update the specified TripAvailabilitie in storage.
     *
     * @param  int              $id
     * @param UpdateTripAvailabilitieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripAvailabilitieRequest $request)
    {
        $tripAvailabilitie = $this->tripAvailabilitieRepository->findWithoutFail($id);

        if (empty($tripAvailabilitie)) {
            Flash::error('Trip Availabilitie not found');

            return redirect(route('tripAvailabilities.index'));
        }

        $tripAvailabilitie = $this->tripAvailabilitieRepository->update($request->all(), $id);

        Flash::success('Trip Availabilitie updated successfully.');

        return redirect(route('tripAvailabilities.index'));
    }

    /**
     * Remove the specified TripAvailabilitie from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tripAvailabilitie = $this->tripAvailabilitieRepository->findWithoutFail($id);

        if (empty($tripAvailabilitie)) {
            Flash::error('Trip Availabilitie not found');

            return redirect(route('tripAvailabilities.index'));
        }

        $this->tripAvailabilitieRepository->delete($id);

        Flash::success('Trip Availabilitie deleted successfully.');

        return redirect(route('tripAvailabilities.index'));
    }
}

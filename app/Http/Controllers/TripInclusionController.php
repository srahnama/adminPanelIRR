<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripInclusionRequest;
use App\Http\Requests\UpdateTripInclusionRequest;
use App\Repositories\TripInclusionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TripInclusionController extends AppBaseController
{
    /** @var  TripInclusionRepository */
    private $tripInclusionRepository;

    public function __construct(TripInclusionRepository $tripInclusionRepo)
    {
        $this->tripInclusionRepository = $tripInclusionRepo;
    }

    /**
     * Display a listing of the TripInclusion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tripInclusionRepository->pushCriteria(new RequestCriteria($request));
        $tripInclusions = $this->tripInclusionRepository->all();

        return view('trip_inclusions.index')
            ->with('tripInclusions', $tripInclusions);
    }

    /**
     * Show the form for creating a new TripInclusion.
     *
     * @return Response
     */
    public function create()
    {
        return view('trip_inclusions.create');
    }

    /**
     * Store a newly created TripInclusion in storage.
     *
     * @param CreateTripInclusionRequest $request
     *
     * @return Response
     */
    public function store(CreateTripInclusionRequest $request)
    {
        $input = array_remove_null($request->all());

        $tripInclusion = $this->tripInclusionRepository->create($input);

        Flash::success('Trip Inclusion saved successfully.');

        return redirect(route('tripInclusions.index'));
    }

    /**
     * Display the specified TripInclusion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tripInclusion = $this->tripInclusionRepository->findWithoutFail($id);

        if (empty($tripInclusion)) {
            Flash::error('Trip Inclusion not found');

            return redirect(route('tripInclusions.index'));
        }

        return view('trip_inclusions.show')->with('tripInclusion', $tripInclusion);
    }

    /**
     * Show the form for editing the specified TripInclusion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tripInclusion = $this->tripInclusionRepository->findWithoutFail($id);

        if (empty($tripInclusion)) {
            Flash::error('Trip Inclusion not found');

            return redirect(route('tripInclusions.index'));
        }

        return view('trip_inclusions.edit')->with('tripInclusion', $tripInclusion);
    }

    /**
     * Update the specified TripInclusion in storage.
     *
     * @param  int              $id
     * @param UpdateTripInclusionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripInclusionRequest $request)
    {
        $tripInclusion = $this->tripInclusionRepository->findWithoutFail($id);

        if (empty($tripInclusion)) {
            Flash::error('Trip Inclusion not found');

            return redirect(route('tripInclusions.index'));
        }

        $tripInclusion = $this->tripInclusionRepository->update($request->all(), $id);

        Flash::success('Trip Inclusion updated successfully.');

        return redirect(route('tripInclusions.index'));
    }

    /**
     * Remove the specified TripInclusion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tripInclusion = $this->tripInclusionRepository->findWithoutFail($id);

        if (empty($tripInclusion)) {
            Flash::error('Trip Inclusion not found');

            return redirect(route('tripInclusions.index'));
        }

        $this->tripInclusionRepository->delete($id);

        Flash::success('Trip Inclusion deleted successfully.');

        return redirect(route('tripInclusions.index'));
    }
}

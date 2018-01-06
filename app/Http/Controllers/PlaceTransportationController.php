<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlaceTransportationRequest;
use App\Http\Requests\UpdatePlaceTransportationRequest;
use App\Repositories\PlaceTransportationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlaceTransportationController extends AppBaseController
{
    /** @var  PlaceTransportationRepository */
    private $placeTransportationRepository;

    public function __construct(PlaceTransportationRepository $placeTransportationRepo)
    {
        $this->placeTransportationRepository = $placeTransportationRepo;
    }

    /**
     * Display a listing of the PlaceTransportation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->placeTransportationRepository->pushCriteria(new RequestCriteria($request));
        $placeTransportations = $this->placeTransportationRepository->all();

        return view('place_transportations.index')
            ->with('placeTransportations', $placeTransportations);
    }

    /**
     * Show the form for creating a new PlaceTransportation.
     *
     * @return Response
     */
    public function create()
    {
        return view('place_transportations.create');
    }

    /**
     * Store a newly created PlaceTransportation in storage.
     *
     * @param CreatePlaceTransportationRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaceTransportationRequest $request)
    {
        $input = array_remove_null($request->all());

        $placeTransportation = $this->placeTransportationRepository->create($input);

        Flash::success('Place Transportation saved successfully.');

        return redirect(route('placeTransportations.index'));
    }

    /**
     * Display the specified PlaceTransportation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $placeTransportation = $this->placeTransportationRepository->findWithoutFail($id);

        if (empty($placeTransportation)) {
            Flash::error('Place Transportation not found');

            return redirect(route('placeTransportations.index'));
        }

        return view('place_transportations.show')->with('placeTransportation', $placeTransportation);
    }

    /**
     * Show the form for editing the specified PlaceTransportation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $placeTransportation = $this->placeTransportationRepository->findWithoutFail($id);

        if (empty($placeTransportation)) {
            Flash::error('Place Transportation not found');

            return redirect(route('placeTransportations.index'));
        }

        return view('place_transportations.edit')->with('placeTransportation', $placeTransportation);
    }

    /**
     * Update the specified PlaceTransportation in storage.
     *
     * @param  int              $id
     * @param UpdatePlaceTransportationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaceTransportationRequest $request)
    {
        $placeTransportation = $this->placeTransportationRepository->findWithoutFail($id);

        if (empty($placeTransportation)) {
            Flash::error('Place Transportation not found');

            return redirect(route('placeTransportations.index'));
        }

        $placeTransportation = $this->placeTransportationRepository->update($request->all(), $id);

        Flash::success('Place Transportation updated successfully.');

        return redirect(route('placeTransportations.index'));
    }

    /**
     * Remove the specified PlaceTransportation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $placeTransportation = $this->placeTransportationRepository->findWithoutFail($id);

        if (empty($placeTransportation)) {
            Flash::error('Place Transportation not found');

            return redirect(route('placeTransportations.index'));
        }

        $this->placeTransportationRepository->delete($id);

        Flash::success('Place Transportation deleted successfully.');

        return redirect(route('placeTransportations.index'));
    }
}

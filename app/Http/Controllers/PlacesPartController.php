<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlacesPartRequest;
use App\Http\Requests\UpdatePlacesPartRequest;
use App\Repositories\PlacesPartRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlacesPartController extends AppBaseController
{
    /** @var  PlacesPartRepository */
    private $placesPartRepository;

    public function __construct(PlacesPartRepository $placesPartRepo)
    {
        $this->placesPartRepository = $placesPartRepo;
    }

    /**
     * Display a listing of the PlacesPart.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->placesPartRepository->pushCriteria(new RequestCriteria($request));
        $placesParts = $this->placesPartRepository->all();

        return view('places_parts.index')
            ->with('placesParts', $placesParts);
    }

    /**
     * Show the form for creating a new PlacesPart.
     *
     * @return Response
     */
    public function create()
    {
        return view('places_parts.create');
    }

    /**
     * Store a newly created PlacesPart in storage.
     *
     * @param CreatePlacesPartRequest $request
     *
     * @return Response
     */
    public function store(CreatePlacesPartRequest $request)
    {
        $input = array_remove_null($request->all());

        $placesPart = $this->placesPartRepository->create($input);

        Flash::success('Places Part saved successfully.');

        return redirect(route('placesParts.index'));
    }

    /**
     * Display the specified PlacesPart.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $placesPart = $this->placesPartRepository->findWithoutFail($id);

        if (empty($placesPart)) {
            Flash::error('Places Part not found');

            return redirect(route('placesParts.index'));
        }

        return view('places_parts.show')->with('placesPart', $placesPart);
    }

    /**
     * Show the form for editing the specified PlacesPart.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $placesPart = $this->placesPartRepository->findWithoutFail($id);

        if (empty($placesPart)) {
            Flash::error('Places Part not found');

            return redirect(route('placesParts.index'));
        }

        return view('places_parts.edit')->with('placesPart', $placesPart);
    }

    /**
     * Update the specified PlacesPart in storage.
     *
     * @param  int              $id
     * @param UpdatePlacesPartRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlacesPartRequest $request)
    {
        $placesPart = $this->placesPartRepository->findWithoutFail($id);

        if (empty($placesPart)) {
            Flash::error('Places Part not found');

            return redirect(route('placesParts.index'));
        }

        $placesPart = $this->placesPartRepository->update($request->all(), $id);

        Flash::success('Places Part updated successfully.');

        return redirect(route('placesParts.index'));
    }

    /**
     * Remove the specified PlacesPart from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $placesPart = $this->placesPartRepository->findWithoutFail($id);

        if (empty($placesPart)) {
            Flash::error('Places Part not found');

            return redirect(route('placesParts.index'));
        }

        $this->placesPartRepository->delete($id);

        Flash::success('Places Part deleted successfully.');

        return redirect(route('placesParts.index'));
    }
}

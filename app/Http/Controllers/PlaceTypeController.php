<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlaceTypeRequest;
use App\Http\Requests\UpdatePlaceTypeRequest;
use App\Repositories\PlaceTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlaceTypeController extends AppBaseController
{
    /** @var  PlaceTypeRepository */
    private $placeTypeRepository;

    public function __construct(PlaceTypeRepository $placeTypeRepo)
    {
        $this->placeTypeRepository = $placeTypeRepo;
    }

    /**
     * Display a listing of the PlaceType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->placeTypeRepository->pushCriteria(new RequestCriteria($request));
        $placeTypes = $this->placeTypeRepository->all();

        return view('place_types.index')
            ->with('placeTypes', $placeTypes);
    }

    /**
     * Show the form for creating a new PlaceType.
     *
     * @return Response
     */
    public function create()
    {
        return view('place_types.create');
    }

    /**
     * Store a newly created PlaceType in storage.
     *
     * @param CreatePlaceTypeRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaceTypeRequest $request)
    {
        $input = $request->all();

        $placeType = $this->placeTypeRepository->create($input);

        Flash::success('Place Type saved successfully.');

        return redirect(route('placeTypes.index'));
    }

    /**
     * Display the specified PlaceType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $placeType = $this->placeTypeRepository->findWithoutFail($id);

        if (empty($placeType)) {
            Flash::error('Place Type not found');

            return redirect(route('placeTypes.index'));
        }

        return view('place_types.show')->with('placeType', $placeType);
    }

    /**
     * Show the form for editing the specified PlaceType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $placeType = $this->placeTypeRepository->findWithoutFail($id);

        if (empty($placeType)) {
            Flash::error('Place Type not found');

            return redirect(route('placeTypes.index'));
        }

        return view('place_types.edit')->with('placeType', $placeType);
    }

    /**
     * Update the specified PlaceType in storage.
     *
     * @param  int              $id
     * @param UpdatePlaceTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaceTypeRequest $request)
    {
        $placeType = $this->placeTypeRepository->findWithoutFail($id);

        if (empty($placeType)) {
            Flash::error('Place Type not found');

            return redirect(route('placeTypes.index'));
        }

        $placeType = $this->placeTypeRepository->update($request->all(), $id);

        Flash::success('Place Type updated successfully.');

        return redirect(route('placeTypes.index'));
    }

    /**
     * Remove the specified PlaceType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $placeType = $this->placeTypeRepository->findWithoutFail($id);

        if (empty($placeType)) {
            Flash::error('Place Type not found');

            return redirect(route('placeTypes.index'));
        }

        $this->placeTypeRepository->delete($id);

        Flash::success('Place Type deleted successfully.');

        return redirect(route('placeTypes.index'));
    }
}

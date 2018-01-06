<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlaceInfoRequest;
use App\Http\Requests\UpdatePlaceInfoRequest;
use App\Repositories\PlaceInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlaceInfoController extends AppBaseController
{
    /** @var  PlaceInfoRepository */
    private $placeInfoRepository;

    public function __construct(PlaceInfoRepository $placeInfoRepo)
    {
        $this->placeInfoRepository = $placeInfoRepo;
    }

    /**
     * Display a listing of the PlaceInfo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->placeInfoRepository->pushCriteria(new RequestCriteria($request));
        $placeInfos = $this->placeInfoRepository->all();

        return view('place_infos.index')
            ->with('placeInfos', $placeInfos);
    }

    /**
     * Show the form for creating a new PlaceInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('place_infos.create');
    }

    /**
     * Store a newly created PlaceInfo in storage.
     *
     * @param CreatePlaceInfoRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaceInfoRequest $request)
    {
        $input = array_remove_null($request->all());

        $placeInfo = $this->placeInfoRepository->create($input);

        Flash::success('Place Info saved successfully.');

        return redirect(route('placeInfos.index'));
    }

    /**
     * Display the specified PlaceInfo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $placeInfo = $this->placeInfoRepository->findWithoutFail($id);

        if (empty($placeInfo)) {
            Flash::error('Place Info not found');

            return redirect(route('placeInfos.index'));
        }

        return view('place_infos.show')->with('placeInfo', $placeInfo);
    }

    /**
     * Show the form for editing the specified PlaceInfo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $placeInfo = $this->placeInfoRepository->findWithoutFail($id);

        if (empty($placeInfo)) {
            Flash::error('Place Info not found');

            return redirect(route('placeInfos.index'));
        }

        return view('place_infos.edit')->with('placeInfo', $placeInfo);
    }

    /**
     * Update the specified PlaceInfo in storage.
     *
     * @param  int              $id
     * @param UpdatePlaceInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaceInfoRequest $request)
    {
        $placeInfo = $this->placeInfoRepository->findWithoutFail($id);

        if (empty($placeInfo)) {
            Flash::error('Place Info not found');

            return redirect(route('placeInfos.index'));
        }

        $placeInfo = $this->placeInfoRepository->update($request->all(), $id);

        Flash::success('Place Info updated successfully.');

        return redirect(route('placeInfos.index'));
    }

    /**
     * Remove the specified PlaceInfo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $placeInfo = $this->placeInfoRepository->findWithoutFail($id);

        if (empty($placeInfo)) {
            Flash::error('Place Info not found');

            return redirect(route('placeInfos.index'));
        }

        $this->placeInfoRepository->delete($id);

        Flash::success('Place Info deleted successfully.');

        return redirect(route('placeInfos.index'));
    }
}

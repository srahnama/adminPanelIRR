<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePictureRequest;
use App\Http\Requests\UpdatePictureRequest;
use App\Repositories\PictureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PictureController extends AppBaseController
{
    /** @var  PictureRepository */
    private $pictureRepository;

    public function __construct(PictureRepository $pictureRepo)
    {
        $this->pictureRepository = $pictureRepo;
    }

    /**
     * Display a listing of the Picture.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pictureRepository->pushCriteria(new RequestCriteria($request));
        $pictures = $this->pictureRepository->all();

        return view('pictures.index')
            ->with('pictures', $pictures);
    }

    /**
     * Show the form for creating a new Picture.
     *
     * @return Response
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created Picture in storage.
     *
     * @param CreatePictureRequest $request
     *
     * @return Response
     */
    public function store(CreatePictureRequest $request)
    {
        $input = $request->all();

        $picture = $this->pictureRepository->create($input);

        Flash::success('Picture saved successfully.');

        return redirect(route('pictures.index'));
    }

    /**
     * Display the specified Picture.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $picture = $this->pictureRepository->findWithoutFail($id);

        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }

        return view('pictures.show')->with('picture', $picture);
    }

    /**
     * Show the form for editing the specified Picture.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $picture = $this->pictureRepository->findWithoutFail($id);

        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }

        return view('pictures.edit')->with('picture', $picture);
    }

    /**
     * Update the specified Picture in storage.
     *
     * @param  int              $id
     * @param UpdatePictureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePictureRequest $request)
    {
        $picture = $this->pictureRepository->findWithoutFail($id);

        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }

        $picture = $this->pictureRepository->update($request->all(), $id);

        Flash::success('Picture updated successfully.');

        return redirect(route('pictures.index'));
    }

    /**
     * Remove the specified Picture from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $picture = $this->pictureRepository->findWithoutFail($id);

        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }

        $this->pictureRepository->delete($id);

        Flash::success('Picture deleted successfully.');

        return redirect(route('pictures.index'));
    }
}

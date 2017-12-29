<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInclusionRequest;
use App\Http\Requests\UpdateInclusionRequest;
use App\Repositories\InclusionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InclusionController extends AppBaseController
{
    /** @var  InclusionRepository */
    private $inclusionRepository;

    public function __construct(InclusionRepository $inclusionRepo)
    {
        $this->inclusionRepository = $inclusionRepo;
    }

    /**
     * Display a listing of the Inclusion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->inclusionRepository->pushCriteria(new RequestCriteria($request));
        $inclusions = $this->inclusionRepository->all();

        return view('inclusions.index')
            ->with('inclusions', $inclusions);
    }

    /**
     * Show the form for creating a new Inclusion.
     *
     * @return Response
     */
    public function create()
    {
        return view('inclusions.create');
    }

    /**
     * Store a newly created Inclusion in storage.
     *
     * @param CreateInclusionRequest $request
     *
     * @return Response
     */
    public function store(CreateInclusionRequest $request)
    {
        $input = $request->all();

        $inclusion = $this->inclusionRepository->create($input);

        Flash::success('Inclusion saved successfully.');

        return redirect(route('inclusions.index'));
    }

    /**
     * Display the specified Inclusion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inclusion = $this->inclusionRepository->findWithoutFail($id);

        if (empty($inclusion)) {
            Flash::error('Inclusion not found');

            return redirect(route('inclusions.index'));
        }

        return view('inclusions.show')->with('inclusion', $inclusion);
    }

    /**
     * Show the form for editing the specified Inclusion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inclusion = $this->inclusionRepository->findWithoutFail($id);

        if (empty($inclusion)) {
            Flash::error('Inclusion not found');

            return redirect(route('inclusions.index'));
        }

        return view('inclusions.edit')->with('inclusion', $inclusion);
    }

    /**
     * Update the specified Inclusion in storage.
     *
     * @param  int              $id
     * @param UpdateInclusionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInclusionRequest $request)
    {
        $inclusion = $this->inclusionRepository->findWithoutFail($id);

        if (empty($inclusion)) {
            Flash::error('Inclusion not found');

            return redirect(route('inclusions.index'));
        }

        $inclusion = $this->inclusionRepository->update($request->all(), $id);

        Flash::success('Inclusion updated successfully.');

        return redirect(route('inclusions.index'));
    }

    /**
     * Remove the specified Inclusion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inclusion = $this->inclusionRepository->findWithoutFail($id);

        if (empty($inclusion)) {
            Flash::error('Inclusion not found');

            return redirect(route('inclusions.index'));
        }

        $this->inclusionRepository->delete($id);

        Flash::success('Inclusion deleted successfully.');

        return redirect(route('inclusions.index'));
    }
}

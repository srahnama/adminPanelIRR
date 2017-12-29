<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserLicenceRequest;
use App\Http\Requests\UpdateUserLicenceRequest;
use App\Repositories\UserLicenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserLicenceController extends AppBaseController
{
    /** @var  UserLicenceRepository */
    private $userLicenceRepository;

    public function __construct(UserLicenceRepository $userLicenceRepo)
    {
        $this->userLicenceRepository = $userLicenceRepo;
    }

    /**
     * Display a listing of the UserLicence.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userLicenceRepository->pushCriteria(new RequestCriteria($request));
        $userLicences = $this->userLicenceRepository->all();

        return view('user_licences.index')
            ->with('userLicences', $userLicences);
    }

    /**
     * Show the form for creating a new UserLicence.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_licences.create');
    }

    /**
     * Store a newly created UserLicence in storage.
     *
     * @param CreateUserLicenceRequest $request
     *
     * @return Response
     */
    public function store(CreateUserLicenceRequest $request)
    {
        $input = $request->all();

        $userLicence = $this->userLicenceRepository->create($input);

        Flash::success('User Licence saved successfully.');

        return redirect(route('userLicences.index'));
    }

    /**
     * Display the specified UserLicence.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userLicence = $this->userLicenceRepository->findWithoutFail($id);

        if (empty($userLicence)) {
            Flash::error('User Licence not found');

            return redirect(route('userLicences.index'));
        }

        return view('user_licences.show')->with('userLicence', $userLicence);
    }

    /**
     * Show the form for editing the specified UserLicence.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userLicence = $this->userLicenceRepository->findWithoutFail($id);

        if (empty($userLicence)) {
            Flash::error('User Licence not found');

            return redirect(route('userLicences.index'));
        }

        return view('user_licences.edit')->with('userLicence', $userLicence);
    }

    /**
     * Update the specified UserLicence in storage.
     *
     * @param  int              $id
     * @param UpdateUserLicenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserLicenceRequest $request)
    {
        $userLicence = $this->userLicenceRepository->findWithoutFail($id);

        if (empty($userLicence)) {
            Flash::error('User Licence not found');

            return redirect(route('userLicences.index'));
        }

        $userLicence = $this->userLicenceRepository->update($request->all(), $id);

        Flash::success('User Licence updated successfully.');

        return redirect(route('userLicences.index'));
    }

    /**
     * Remove the specified UserLicence from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userLicence = $this->userLicenceRepository->findWithoutFail($id);

        if (empty($userLicence)) {
            Flash::error('User Licence not found');

            return redirect(route('userLicences.index'));
        }

        $this->userLicenceRepository->delete($id);

        Flash::success('User Licence deleted successfully.');

        return redirect(route('userLicences.index'));
    }
}

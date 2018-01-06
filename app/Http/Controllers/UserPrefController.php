<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserPrefRequest;
use App\Http\Requests\UpdateUserPrefRequest;
use App\Repositories\UserPrefRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserPrefController extends AppBaseController
{
    /** @var  UserPrefRepository */
    private $userPrefRepository;

    public function __construct(UserPrefRepository $userPrefRepo)
    {
        $this->userPrefRepository = $userPrefRepo;
    }

    /**
     * Display a listing of the UserPref.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userPrefRepository->pushCriteria(new RequestCriteria($request));
        $userPrefs = $this->userPrefRepository->all();

        return view('user_prefs.index')
            ->with('userPrefs', $userPrefs);
    }

    /**
     * Show the form for creating a new UserPref.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_prefs.create');
    }

    /**
     * Store a newly created UserPref in storage.
     *
     * @param CreateUserPrefRequest $request
     *
     * @return Response
     */
    public function store(CreateUserPrefRequest $request)
    {
        $input = array_remove_null($request->all());

        $userPref = $this->userPrefRepository->create($input);

        Flash::success('User Pref saved successfully.');

        return redirect(route('userPrefs.index'));
    }

    /**
     * Display the specified UserPref.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userPref = $this->userPrefRepository->findWithoutFail($id);

        if (empty($userPref)) {
            Flash::error('User Pref not found');

            return redirect(route('userPrefs.index'));
        }

        return view('user_prefs.show')->with('userPref', $userPref);
    }

    /**
     * Show the form for editing the specified UserPref.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userPref = $this->userPrefRepository->findWithoutFail($id);

        if (empty($userPref)) {
            Flash::error('User Pref not found');

            return redirect(route('userPrefs.index'));
        }

        return view('user_prefs.edit')->with('userPref', $userPref);
    }

    /**
     * Update the specified UserPref in storage.
     *
     * @param  int              $id
     * @param UpdateUserPrefRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserPrefRequest $request)
    {
        $userPref = $this->userPrefRepository->findWithoutFail($id);

        if (empty($userPref)) {
            Flash::error('User Pref not found');

            return redirect(route('userPrefs.index'));
        }

        $userPref = $this->userPrefRepository->update($request->all(), $id);

        Flash::success('User Pref updated successfully.');

        return redirect(route('userPrefs.index'));
    }

    /**
     * Remove the specified UserPref from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userPref = $this->userPrefRepository->findWithoutFail($id);

        if (empty($userPref)) {
            Flash::error('User Pref not found');

            return redirect(route('userPrefs.index'));
        }

        $this->userPrefRepository->delete($id);

        Flash::success('User Pref deleted successfully.');

        return redirect(route('userPrefs.index'));
    }
}

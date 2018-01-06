<?php

namespace App\Http\Controllers;

use App\Helpers\myfilter;
use App\Http\Requests\CreateUserExperienceRequest;
use App\Http\Requests\UpdateUserExperienceRequest;
use App\Repositories\UserExperienceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserExperienceController extends AppBaseController
{
    /** @var  UserExperienceRepository */
    private $userExperienceRepository;

    public function __construct(UserExperienceRepository $userExperienceRepo)
    {
        $this->userExperienceRepository = $userExperienceRepo;
    }

    /**
     * Display a listing of the UserExperience.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userExperienceRepository->pushCriteria(new RequestCriteria($request));
        $userExperiences = $this->userExperienceRepository->all();

        return view('user_experiences.index')
            ->with('userExperiences', $userExperiences);
    }

    /**
     * Show the form for creating a new UserExperience.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_experiences.create');
    }

    /**
     * Store a newly created UserExperience in storage.
     *
     * @param CreateUserExperienceRequest $request
     *
     * @return Response
     */
    public function store(CreateUserExperienceRequest $request)
    {
        $input = array_remove_null($request->all());

        $userExperience = $this->userExperienceRepository->create($input);

        Flash::success('User Experience saved successfully.');

        return redirect(route('userExperiences.index'));
    }

    /**
     * Display the specified UserExperience.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userExperience = $this->userExperienceRepository->findWithoutFail($id);

        if (empty($userExperience)) {
            Flash::error('User Experience not found');

            return redirect(route('userExperiences.index'));
        }

        return view('user_experiences.show')->with('userExperience', $userExperience);
    }

    /**
     * Show the form for editing the specified UserExperience.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userExperience = $this->userExperienceRepository->findWithoutFail($id);

        if (empty($userExperience)) {
            Flash::error('User Experience not found');

            return redirect(route('userExperiences.index'));
        }

        return view('user_experiences.edit')->with('userExperience', $userExperience);
    }

    /**
     * Update the specified UserExperience in storage.
     *
     * @param  int              $id
     * @param UpdateUserExperienceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserExperienceRequest $request)
    {
        $userExperience = $this->userExperienceRepository->findWithoutFail($id);

        if (empty($userExperience)) {
            Flash::error('User Experience not found');

            return redirect(route('userExperiences.index'));
        }

        $userExperience = $this->userExperienceRepository->update($request->all(), $id);

        Flash::success('User Experience updated successfully.');

        return redirect(route('userExperiences.index'));
    }

    /**
     * Remove the specified UserExperience from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userExperience = $this->userExperienceRepository->findWithoutFail($id);

        if (empty($userExperience)) {
            Flash::error('User Experience not found');

            return redirect(route('userExperiences.index'));
        }

        $this->userExperienceRepository->delete($id);

        Flash::success('User Experience deleted successfully.');

        return redirect(route('userExperiences.index'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserCarRequest;
use App\Http\Requests\UpdateUserCarRequest;
use App\Repositories\UserCarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserCarController extends AppBaseController
{
    /** @var  UserCarRepository */
    private $userCarRepository;

    public function __construct(UserCarRepository $userCarRepo)
    {
        $this->userCarRepository = $userCarRepo;
    }

    /**
     * Display a listing of the UserCar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userCarRepository->pushCriteria(new RequestCriteria($request));
        $userCars = $this->userCarRepository->all();

        return view('user_cars.index')
            ->with('userCars', $userCars);
    }

    /**
     * Show the form for creating a new UserCar.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_cars.create');
    }

    /**
     * Store a newly created UserCar in storage.
     *
     * @param CreateUserCarRequest $request
     *
     * @return Response
     */
    public function store(CreateUserCarRequest $request)
    {
        $input = array_remove_null($request->all());

        $userCar = $this->userCarRepository->create($input);

        Flash::success('User Car saved successfully.');

        return redirect(route('userCars.index'));
    }

    /**
     * Display the specified UserCar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userCar = $this->userCarRepository->findWithoutFail($id);

        if (empty($userCar)) {
            Flash::error('User Car not found');

            return redirect(route('userCars.index'));
        }

        return view('user_cars.show')->with('userCar', $userCar);
    }

    /**
     * Show the form for editing the specified UserCar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userCar = $this->userCarRepository->findWithoutFail($id);

        if (empty($userCar)) {
            Flash::error('User Car not found');

            return redirect(route('userCars.index'));
        }

        return view('user_cars.edit')->with('userCar', $userCar);
    }

    /**
     * Update the specified UserCar in storage.
     *
     * @param  int              $id
     * @param UpdateUserCarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserCarRequest $request)
    {
        $userCar = $this->userCarRepository->findWithoutFail($id);

        if (empty($userCar)) {
            Flash::error('User Car not found');

            return redirect(route('userCars.index'));
        }

        $userCar = $this->userCarRepository->update($request->all(), $id);

        Flash::success('User Car updated successfully.');

        return redirect(route('userCars.index'));
    }

    /**
     * Remove the specified UserCar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userCar = $this->userCarRepository->findWithoutFail($id);

        if (empty($userCar)) {
            Flash::error('User Car not found');

            return redirect(route('userCars.index'));
        }

        $this->userCarRepository->delete($id);

        Flash::success('User Car deleted successfully.');

        return redirect(route('userCars.index'));
    }
}

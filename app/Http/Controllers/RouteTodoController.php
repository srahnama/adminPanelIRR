<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRouteTodoRequest;
use App\Http\Requests\UpdateRouteTodoRequest;
use App\Repositories\RouteTodoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RouteTodoController extends AppBaseController
{
    /** @var  RouteTodoRepository */
    private $routeTodoRepository;

    public function __construct(RouteTodoRepository $routeTodoRepo)
    {
        $this->routeTodoRepository = $routeTodoRepo;
    }

    /**
     * Display a listing of the RouteTodo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->routeTodoRepository->pushCriteria(new RequestCriteria($request));
        $routeTodos = $this->routeTodoRepository->all();

        return view('route_todos.index')
            ->with('routeTodos', $routeTodos);
    }

    /**
     * Show the form for creating a new RouteTodo.
     *
     * @return Response
     */
    public function create()
    {
        return view('route_todos.create');
    }

    /**
     * Store a newly created RouteTodo in storage.
     *
     * @param CreateRouteTodoRequest $request
     *
     * @return Response
     */
    public function store(CreateRouteTodoRequest $request)
    {
        $input = array_remove_null($request->all());

        $routeTodo = $this->routeTodoRepository->create($input);

        Flash::success('Route Todo saved successfully.');

        return redirect(route('routeTodos.index'));
    }

    /**
     * Display the specified RouteTodo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $routeTodo = $this->routeTodoRepository->findWithoutFail($id);

        if (empty($routeTodo)) {
            Flash::error('Route Todo not found');

            return redirect(route('routeTodos.index'));
        }

        return view('route_todos.show')->with('routeTodo', $routeTodo);
    }

    /**
     * Show the form for editing the specified RouteTodo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $routeTodo = $this->routeTodoRepository->findWithoutFail($id);

        if (empty($routeTodo)) {
            Flash::error('Route Todo not found');

            return redirect(route('routeTodos.index'));
        }

        return view('route_todos.edit')->with('routeTodo', $routeTodo);
    }

    /**
     * Update the specified RouteTodo in storage.
     *
     * @param  int              $id
     * @param UpdateRouteTodoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRouteTodoRequest $request)
    {
        $routeTodo = $this->routeTodoRepository->findWithoutFail($id);

        if (empty($routeTodo)) {
            Flash::error('Route Todo not found');

            return redirect(route('routeTodos.index'));
        }

        $routeTodo = $this->routeTodoRepository->update($request->all(), $id);

        Flash::success('Route Todo updated successfully.');

        return redirect(route('routeTodos.index'));
    }

    /**
     * Remove the specified RouteTodo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $routeTodo = $this->routeTodoRepository->findWithoutFail($id);

        if (empty($routeTodo)) {
            Flash::error('Route Todo not found');

            return redirect(route('routeTodos.index'));
        }

        $this->routeTodoRepository->delete($id);

        Flash::success('Route Todo deleted successfully.');

        return redirect(route('routeTodos.index'));
    }
}

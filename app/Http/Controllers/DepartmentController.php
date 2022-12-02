<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response|View
     * @throws AuthorizationException
     */
    public function index(): Response|View
    {
        $this->authorize(Department::class);

        return view('departments.index')->with([
            'departments' => Department::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     * @throws AuthorizationException
     */
    public function create(): View
    {
        $this->authorize(Department::class);

        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreDepartmentRequest  $request
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function store(StoreDepartmentRequest $request): RedirectResponse
    {
        $this->authorize(Department::class);
        Department::create($request->only('name'));

        return redirect(route('departments.index'))->with(['success' => 'New department was created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  Department  $department
     * @return View
     * @throws AuthorizationException
     */
    public function show(Department $department): View
    {
        $this->authorize('view', $department);

        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Department  $department
     * @return View
     * @throws AuthorizationException
     */
    public function edit(Department $department): View
    {
        $this->authorize('update', $department);

        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateDepartmentRequest  $request
     * @param  Department  $department
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(UpdateDepartmentRequest $request, Department $department): RedirectResponse
    {
        $this->authorize('update', $department);
        $department->update($request->only('name'));

        return redirect(route('departments.show', $department))->with(['success' => 'Department info was updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Department  $department
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function destroy(Department $department): RedirectResponse
    {
        $this->authorize('delete', $department);
        $department->delete();

        return redirect(route('departments.index'))->with(['success' => 'Department was deleted']);
    }
}

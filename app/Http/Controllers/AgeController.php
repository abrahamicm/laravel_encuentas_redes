<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgeRequest;
use App\Http\Requests\UpdateAgeRequest;
use App\Repositories\AgeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AgeController extends AppBaseController
{
    /** @var  AgeRepository */
    private $ageRepository;

    public function __construct(AgeRepository $ageRepo)
    {
        $this->ageRepository = $ageRepo;
    }

    /**
     * Display a listing of the Age.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ages = $this->ageRepository->all();

        return view('ages.index')
            ->with('ages', $ages);
    }

    /**
     * Show the form for creating a new Age.
     *
     * @return Response
     */
    public function create()
    {
        return view('ages.create');
    }

    /**
     * Store a newly created Age in storage.
     *
     * @param CreateAgeRequest $request
     *
     * @return Response
     */
    public function store(CreateAgeRequest $request)
    {
        $input = $request->all();

        $age = $this->ageRepository->create($input);

        Flash::success('Age saved successfully.');

        return redirect(route('ages.index'));
    }

    /**
     * Display the specified Age.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $age = $this->ageRepository->find($id);

        if (empty($age)) {
            Flash::error('Age not found');

            return redirect(route('ages.index'));
        }

        return view('ages.show')->with('age', $age);
    }

    /**
     * Show the form for editing the specified Age.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $age = $this->ageRepository->find($id);

        if (empty($age)) {
            Flash::error('Age not found');

            return redirect(route('ages.index'));
        }

        return view('ages.edit')->with('age', $age);
    }

    /**
     * Update the specified Age in storage.
     *
     * @param int $id
     * @param UpdateAgeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgeRequest $request)
    {
        $age = $this->ageRepository->find($id);

        if (empty($age)) {
            Flash::error('Age not found');

            return redirect(route('ages.index'));
        }

        $age = $this->ageRepository->update($request->all(), $id);

        Flash::success('Age updated successfully.');

        return redirect(route('ages.index'));
    }

    /**
     * Remove the specified Age from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $age = $this->ageRepository->find($id);

        if (empty($age)) {
            Flash::error('Age not found');

            return redirect(route('ages.index'));
        }

        $this->ageRepository->delete($id);

        Flash::success('Age deleted successfully.');

        return redirect(route('ages.index'));
    }
}

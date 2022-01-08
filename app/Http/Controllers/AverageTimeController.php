<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAverageTimeRequest;
use App\Http\Requests\UpdateAverageTimeRequest;
use App\Repositories\AverageTimeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AverageTimeController extends AppBaseController
{
    /** @var  AverageTimeRepository */
    private $averageTimeRepository;

    public function __construct(AverageTimeRepository $averageTimeRepo)
    {
        $this->averageTimeRepository = $averageTimeRepo;
    }

    /**
     * Display a listing of the AverageTime.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $averageTimes = $this->averageTimeRepository->all();

        return view('average_times.index')
            ->with('averageTimes', $averageTimes);
    }

    /**
     * Show the form for creating a new AverageTime.
     *
     * @return Response
     */
    public function create()
    {
        return view('average_times.create');
    }

    /**
     * Store a newly created AverageTime in storage.
     *
     * @param CreateAverageTimeRequest $request
     *
     * @return Response
     */
    public function store(CreateAverageTimeRequest $request)
    {
        $input = $request->all();

        $averageTime = $this->averageTimeRepository->create($input);

        Flash::success('Average Time saved successfully.');

        return redirect(route('averageTimes.index'));
    }

    /**
     * Display the specified AverageTime.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $averageTime = $this->averageTimeRepository->find($id);

        if (empty($averageTime)) {
            Flash::error('Average Time not found');

            return redirect(route('averageTimes.index'));
        }

        return view('average_times.show')->with('averageTime', $averageTime);
    }

    /**
     * Show the form for editing the specified AverageTime.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $averageTime = $this->averageTimeRepository->find($id);

        if (empty($averageTime)) {
            Flash::error('Average Time not found');

            return redirect(route('averageTimes.index'));
        }

        return view('average_times.edit')->with('averageTime', $averageTime);
    }

    /**
     * Update the specified AverageTime in storage.
     *
     * @param int $id
     * @param UpdateAverageTimeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAverageTimeRequest $request)
    {
        $averageTime = $this->averageTimeRepository->find($id);

        if (empty($averageTime)) {
            Flash::error('Average Time not found');

            return redirect(route('averageTimes.index'));
        }

        $averageTime = $this->averageTimeRepository->update($request->all(), $id);

        Flash::success('Average Time updated successfully.');

        return redirect(route('averageTimes.index'));
    }

    /**
     * Remove the specified AverageTime from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $averageTime = $this->averageTimeRepository->find($id);

        if (empty($averageTime)) {
            Flash::error('Average Time not found');

            return redirect(route('averageTimes.index'));
        }

        $this->averageTimeRepository->delete($id);

        Flash::success('Average Time deleted successfully.');

        return redirect(route('averageTimes.index'));
    }
}

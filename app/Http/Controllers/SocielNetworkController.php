<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSocielNetworkRequest;
use App\Http\Requests\UpdateSocielNetworkRequest;
use App\Repositories\SocielNetworkRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SocielNetworkController extends AppBaseController
{
    /** @var  SocielNetworkRepository */
    private $socielNetworkRepository;

    public function __construct(SocielNetworkRepository $socielNetworkRepo)
    {
        $this->socielNetworkRepository = $socielNetworkRepo;
    }

    /**
     * Display a listing of the SocielNetwork.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $socielNetworks = $this->socielNetworkRepository->all();

        return view('sociel_networks.index')
            ->with('socielNetworks', $socielNetworks);
    }

    /**
     * Show the form for creating a new SocielNetwork.
     *
     * @return Response
     */
    public function create()
    {
        return view('sociel_networks.create');
    }

    /**
     * Store a newly created SocielNetwork in storage.
     *
     * @param CreateSocielNetworkRequest $request
     *
     * @return Response
     */
    public function store(CreateSocielNetworkRequest $request)
    {
        $input = $request->all();

        $socielNetwork = $this->socielNetworkRepository->create($input);

        Flash::success('Sociel Network saved successfully.');

        return redirect(route('socielNetworks.index'));
    }

    /**
     * Display the specified SocielNetwork.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $socielNetwork = $this->socielNetworkRepository->find($id);

        if (empty($socielNetwork)) {
            Flash::error('Sociel Network not found');

            return redirect(route('socielNetworks.index'));
        }

        return view('sociel_networks.show')->with('socielNetwork', $socielNetwork);
    }

    /**
     * Show the form for editing the specified SocielNetwork.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $socielNetwork = $this->socielNetworkRepository->find($id);

        if (empty($socielNetwork)) {
            Flash::error('Sociel Network not found');

            return redirect(route('socielNetworks.index'));
        }

        return view('sociel_networks.edit')->with('socielNetwork', $socielNetwork);
    }

    /**
     * Update the specified SocielNetwork in storage.
     *
     * @param int $id
     * @param UpdateSocielNetworkRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSocielNetworkRequest $request)
    {
        $socielNetwork = $this->socielNetworkRepository->find($id);

        if (empty($socielNetwork)) {
            Flash::error('Sociel Network not found');

            return redirect(route('socielNetworks.index'));
        }

        $socielNetwork = $this->socielNetworkRepository->update($request->all(), $id);

        Flash::success('Sociel Network updated successfully.');

        return redirect(route('socielNetworks.index'));
    }

    /**
     * Remove the specified SocielNetwork from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $socielNetwork = $this->socielNetworkRepository->find($id);

        if (empty($socielNetwork)) {
            Flash::error('Sociel Network not found');

            return redirect(route('socielNetworks.index'));
        }

        $this->socielNetworkRepository->delete($id);

        Flash::success('Sociel Network deleted successfully.');

        return redirect(route('socielNetworks.index'));
    }
}

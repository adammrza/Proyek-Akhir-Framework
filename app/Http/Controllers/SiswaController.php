<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Repositories\SiswaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SiswaController extends AppBaseController
{
    /** @var SiswaRepository $siswaRepository*/
    private $siswaRepository;

    public function __construct(SiswaRepository $siswaRepo)
    {
        $this->siswaRepository = $siswaRepo;
    }

    /**
     * Display a listing of the Siswa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $siswas = $this->siswaRepository->all();

        return view('siswas.index')
            ->with('siswas', $siswas);
    }

    /**
     * Show the form for creating a new Siswa.
     *
     * @return Response
     */
    public function create()
    {
        return view('siswas.create');
    }

    /**
     * Store a newly created Siswa in storage.
     *
     * @param CreateSiswaRequest $request
     *
     * @return Response
     */
    public function store(CreateSiswaRequest $request)
    {
        $siswa = $this->siswaRepository->createSiswa($request);

        Flash::success('Data siswa berhasil disimpan.');

        return redirect(route('siswas.index'));
    }

    /**
     * Display the specified Siswa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Data siswa tidak ditemukan');

            return redirect(route('siswas.index'));
        }

        return view('siswas.show')->with('siswa', $siswa);
    }

    /**
     * Show the form for editing the specified Siswa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Data siswa tidak ditemukan');

            return redirect(route('siswas.index'));
        }

        return view('siswas.edit')->with('siswa', $siswa);
    }

    /**
     * Update the specified Siswa in storage.
     *
     * @param int $id
     * @param UpdateSiswaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSiswaRequest $request)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Data siswa tidak ditemukan');

            return redirect(route('siswas.index'));
        }

        $siswa = $this->siswaRepository->update($request->all(), $id);

        Flash::success('Data siswa berhasil diperbarui.');

        return redirect(route('siswas.index'));
    }

    /**
     * Remove the specified Siswa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $siswa = $this->siswaRepository->find($id);

        if (empty($siswa)) {
            Flash::error('Data siswa tidak ditemukan');

            return redirect(route('siswas.index'));
        }

        $this->siswaRepository->delete($id);

        Flash::success('Data siswa berhasil dihapus.');

        return redirect(route('siswas.index'));
    }
}

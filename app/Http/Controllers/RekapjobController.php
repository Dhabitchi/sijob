<?php

namespace App\Http\Controllers;

use App\Rekapjob;
use App\User;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class RekapjobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $rekapjob = Rekapjob::all();

        return view('sijob.rekapjob', ['rekapjob' => $rekapjob]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $user = User::all();

        return view('sijob.createrekapjob', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Rekapjob::create($request->only(['nama', 'job', 'waktu', 'waktu2']) + ['status' => 'berjalan']);

        return redirect()->route('rekapjob');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Factory|View
     */
    public function edit(Rekapjob $rekapjob)
    {
        $user = User::all();

        return view('sijob.editrekapjob', compact('rekapjob','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Rekapjob $rekapjob)
    {
        $rekapjob->update([
            'nama' => $request->nama,
            'job' => $request->job,
            'waktu' => $request->waktu,
            'waktu2' => $request->waktu2,
            'status' => $request->status
        ]);
        return redirect()->route('rekapjob');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Rekapjob $rekapjob)
    {
        $rekapjob->delete();
        return redirect()->route('rekapjob')->with('alert-succes', 'Data berhasil dihapus!');
    }
}

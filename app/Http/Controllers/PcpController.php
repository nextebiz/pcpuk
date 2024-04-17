<?php

namespace App\Http\Controllers;

use App\Models\Pcp;
use Inertia\Inertia;
use GuzzleHttp\Client;
use App\Http\Requests\StorePcpRequest;
use App\Http\Requests\SearchPcpRequest;
use App\Http\Requests\UpdatePcpRequest;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class PcpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search_error = null;
        // Session::forget('search_error');

        return Inertia::render('Pcp/Index')->with(['search_error' => $search_error]);
    }


    public function pcp()
    {
        if ($data = Session::get('car_data')) {
            return Inertia::render('Pcp/Form')->with([
                'car_data' => $data
            ]);
        } else {
            dd('no data');
        }

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // return to_route('pcp.index');
        // return Inertia::render('Pcp/Form');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StorePcpRequest $request)
    {

        // dd($request->all());

        Pcp::create($request->all());

        return to_route('pcp.index');

    }
    public function search(SearchPcpRequest $request)
    {
        // dd($request->all());

        $regno = $request->input('regno');

        $client  = new Client();
        $url = env('API_URL');
        $key = env('API_KEY');

        // $response = $request->getBody();

        try {

            $response = $client->request('POST', $url, [
                'headers' => [
                    // 'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'x-api-key' => $key
                ],
                'json' => [
                    'registrationNumber' => $regno
                ],
                // 'debug' => true

            ]);
            $data = $response->getBody()->getContents();
            $car_data = json_decode($data);
            // dd($car_data);

            // return Inertia::render('Pcp/Form')->with([
            //     'car_data' => $car_data
            // ]);

            Session::put('car_data', $car_data);
            Session::save();



            return redirect()->route('pcp.pcp');
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            // return Inertia::render('Pcp/Index')->with(['search_error' => 'No results found for registration number ' . $regno]);
            Session::flash('search_error', 'Failed to search registration number: ' . $regno);
            return to_route('pcp.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pcp $pcp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pcp $pcp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePcpRequest $request, Pcp $pcp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pcp $pcp)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function response;

class CountryController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index (): Response {
    return response('', 404);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create (): Response {
    return response('', 404);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request $request
   * @return Response
   */
  public function store (Request $request): Response {
    return response('', 404);
  }

  /**
   * Display the specified resource.
   *
   * @param  Country $country
   * @return Response
   */
  public function show (Country $country): Response {
    return response('', 404);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  Country $country
   * @return Response
   */
  public function edit (Country $country): Response {
    return response('', 404);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Request $request
   * @param  Country $country
   * @return Response
   */
  public function update (Request $request, Country $country): Response {
    return response('', 404);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Country $country
   * @return Response
   */
  public function destroy (Country $country): Response {
    return response('', 404);
  }
}

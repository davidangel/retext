<?php

class TwilioController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		// accept incoming twilio text messages, and respond if a keyword is matched

		$body = Input::get('Body', false);

		$keyword = preg_replace("/[^A-Za-z0-9]/u", " ", $body);
		$keyword = trim($keyword);
		$keyword = strtolower($keyword);

		$response = Keyword::where('keyword', $keyword)->pluck('response');

		$twilio_response = new Services_Twilio_Twiml();
		$twilio_response->sms($response);

		if($response) return $twilio_response;

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('twilios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('twilios.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('twilios.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

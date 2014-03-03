<?php

class KeywordsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$keywords = Keyword::all();
        return View::make('keywords.index')->with('keywords', $keywords);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('keywords.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$active = Input::get('active', false);
		$keyword = new Keyword();

		$keyword->keyword = $input['keyword'];
		$keyword->response = $input['response'];

		if($keyword->save()) return Redirect::action('keywords.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('keywords.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$keyword = Keyword::find($id);

        return View::make('keywords.edit')->with('keyword', $keyword);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();

		$rules = array(
			'keyword'       => 'required|max:30',
			'response'      => 'required|max:160'
		);
		$validator = Validator::make(Input::all(), $rules);


		$keyword = Keyword::find($id);
		$keyword->keyword = $input['keyword'];
		$keyword->response = $input['response'];
		$keyword->save();

		return Redirect::route('home')->with('flash_message', 'Keyword/Response updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$keyword = Keyword::find($id);
		$keyword->delete();
		return Redirect::route('home')->with('flash_message', 'Successfully deleted record.');
	}

}

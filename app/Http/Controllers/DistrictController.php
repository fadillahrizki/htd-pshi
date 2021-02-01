<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

/**
 * Class DistrictController
 * @package App\Http\Controllers
 */
class DistrictController extends Controller
{

    public function __construct()
    {
        $this->province = new Province;
        $this->province_map = [];
        $provinces = $this->province->get();
        foreach($provinces as $province)
            $this->province_map[$province->id] = $province->name;
        $this->provinces = $this->province->with('regencies')->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::paginate();

        return view('district.index', compact('districts'))
            ->with('i', (request()->input('page', 1) - 1) * $districts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = new District();
        $provinces = $this->province_map;
        $regencies = $this->provinces;
        return view('district.create', compact('district','provinces','regencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(District::$rules);

        $district = District::create($request->all());

        return redirect()->route('districts.index')
            ->with('success', 'District created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $district = District::find($id);

        return view('district.show', compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $district = District::find($id);
        $regencies = $this->provinces;
        $provinces = $this->province_map;
        return view('district.edit', compact('district','provinces','regencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  District $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        request()->validate(District::$rules);

        $district->update($request->all());

        return redirect()->route('districts.index')
            ->with('success', 'District updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $district = District::find($id)->delete();

        return redirect()->route('districts.index')
            ->with('success', 'District deleted successfully');
    }
}

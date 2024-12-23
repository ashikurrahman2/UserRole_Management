<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RentController extends Controller
{

    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $rent= Rent::all();
            return DataTables::of($rent)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="fa fa-edit"></i>
                              </a>
                                <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                    <i class="fa fa-trash"></i>
                                </button>
                            <form id="delete-form-' . $row->id . '" action="' . route('rent.destroy', $row->id) . '" method="POST" style="display: none;">
                                ' . csrf_field() . '
                                ' . method_field('DELETE') . '
                            </form>';
                return $actionbtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.pages.rent.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'rentproperty_id'=>'required|string|max:500',
            'rentproperty_type'=> 'required|string|max:500',
            'rentproperty_status'=> 'required|string|max:500',
            'rentproperty_price'=> 'required|string|max:500',
            'rent_rooms' => 'required|integer|max:255',
            'bed_rooms' => 'required|integer|max:255',
            'bath_rooms' => 'required|integer|max:255',
            'garages' => 'required|integer|max:255',
            'build_up' => 'required|date',
        ]);
        Rent::newRent($request);
        $this->toastr->success('Rent created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rent $rent)
    {
        $rent = Rent::all();
        return view('admin.pages.property.edit', compact('rent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rent $rent)
    {
        $request->validate([

            'rentproperty_id'=>'required|string|max:500',
            'rentproperty_type'=> 'required|string|max:500',
            'rentproperty_status'=> 'required|string|max:500',
            'rentproperty_price'=> 'required|string|max:500',
            'rent_rooms' => 'required|integer|max:255',
            'bed_rooms' => 'required|integer|max:255',
            'bath_rooms' => 'required|integer|max:255',
            'garages' => 'required|integer|max:255',
            'build_up' => 'required|date',
        ]);
       
        Rent::updateRent($request, $rent);
        $this->toastr->success('Rent Updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rent $rent)
    {
        Rent::deleteRent($rent);
        $this->toastr->success('Rent deleted successfully!');
        return back();
    }
}

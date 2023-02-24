<?php

namespace App\Http\Controllers;
use App\Models\KelompokRenta;
use App\Models\Rental;
use Illuminate\Http\Request;

class rentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //deklarasi variabel title yg akan tampil pada view
            $rentals=Rental::all();
            $title="Daftar rental";
            //(object) digunakan untuk instansiasikan array menjadi object
            //agar data dapat ditampilkan dalam object $item->nik
            //jika tidak (object), maka data dapat ditampilkan menggunakan $item['nik']
            $rental=[(object)[
            'id_penjual'=>1,
            'nama'=>'rental 1',
            'nik' => '123456',
            'alamat'=> 'Singapadu',
            'nama_kelompok'=> 'Jaya Mula',
            'telp' => '082772892',
            'foto' => 'uploads/petanis/petani1.png '
            ],(object)[
            'id_penjual'=>2,
            'nama'=>'Petani 2',
            'nik' => '32145',
            'alamat'=> 'Tegalalang',
            'nama_kelompok'=> 'Tani Maju',
            'telp' => '988292882 ',
            'foto' => 'uploads/petanis/petani2.png'
            ]];
            //dapat juga disimpan dalam sebuah collection data
            //sehingga data petani dapat menggunakan beberapa fungsi collection
            $rental=collect($rental);
            //mengirimkan seluruh variabel untuk ditampilkan pada view
            $rentals=rental::paginate(2);
            return view('admin.daftarrental',compact('title','rentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

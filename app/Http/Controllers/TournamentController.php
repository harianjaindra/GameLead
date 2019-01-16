<?php

namespace App\Http\Controllers;

use App\tournament;
use Illuminate\Http\Request;
use App\Category;

class TournamentController extends Controller
{
    //
    public function test()
    {
        $tour = tournament::all();
        return view ('test',compact('tour'));
    }
    public function inserttournament() {
        $categories = Category::all();
        return view('addtournament', compact('categories'));
    }
    public function doinserttour(Request $request){
        $titlee = $request -> title;
        $captionn = $request -> caption;
        $kategori = $request -> category;
        $hadiah = $request -> prize;
        $gambar = $request -> picture;
        $harga = $request -> price;
        $lokasi = $request -> location;
        $kontak = $request -> contactto;
        $deskripsi = $request -> description;
        $tour = new tournament();

        if($request->hasFile('Picture'))
        {
            $file = $request->Picture;
            $filename = $file->getClientOriginalName();
            $file->move('Aset/',$filename);
        }

        $tour ->title = $titlee;
        $tour ->caption = $captionn;
        $tour ->category = $kategori;
        $tour ->prize = $hadiah;
        $tour ->picture = $filename;
        $tour ->price = $harga;
        $tour ->location = $lokasi;
        $tour ->contactto = $kontak;
        $tour ->description = $deskripsi;
        $tour->owner = $titlee;
        $tour->save();
        return redirect('/services');
    }

    public function tourdetail($id)
    {
        $tour = tournament::find($id);
        return view('tourdetail',compact('tour'));
    }

    public function deletetour($id)
    {
        tournament::destroy($id);
        return redirect('/services');
    }
    public function viewedittour($id)
    {
        $tour= tournament::find($id);
        return view('edittour',compact('tour'));
    }

    public function edittour(Request $request)
    {
        $tour = tournament::find($request->id);
        $titlee = $request -> title;
        $captionn = $request -> caption;
        $kategori = $request -> category;
        $hadiah = $request -> prize;
        $gambar = $request -> picture;
        $harga = $request -> price;
        $lokasi = $request -> location;
        $kontak = $request -> contactto;
        $deskripsi = $request -> description;

        if($request->hasFile('Picture'))
        {
            $file = $request->Picture;
            $filename = $file->getClientOriginalName();
            $file->move('Aset/',$filename);
        }

        $tour ->title = $titlee;
        $tour ->caption = $captionn;
        $tour ->category = $kategori;
        $tour ->prize = $hadiah;
        $tour ->price = $harga;
        $tour ->location = $lokasi;
        $tour ->contactto = $kontak;
        $tour ->description = $deskripsi;
        $tour->owner = $titlee;
        $tour->save();
        return redirect('/services');
    }

}

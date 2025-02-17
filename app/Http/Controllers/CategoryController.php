<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::query()
        ->when($request->filled('search'),function($categories) use ($request){
            return $categories->where('name','like', '%' . $request->seacrh . '%');
        })
        ->where('user_id', Auth::user()->id)
        ->latest()
        ->get();
        return view('pages.category.index',compact('categories'));
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
    public function store(CategoryRequest $request)
    {
        try{
            $data = $request->validated();
            Category::create($data);

            return redirect()->route('category.index')->with('success','Data berhasil ditambahkan');
        } catch (\Throwable $e){
            return redirect()->route('category.index')->with('error','Data tidak dapat di tambahkan');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        try{
            if($request){
                $data = $request->validated();
                $data['user_id'] = Auth::user()->id;
                $category->update($data);

            }else{
                return redirect()->route('category.index')->with('success','Berhasil Update Data');
            }

            return redirect()->route('category.index')->with('success','Berhasil Update Data');
        } catch (\Throwable $e){
            return redirect()->route('category.index')->with('error','Update data gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
       try{
        if($category){
            $category->delete();
        }else{
            return redirect()->route('category.index')->with('error','Data tidak ditemukan');
        }
        return redirect()->route('category.index')->with('success','Data berhasil dihapus');

       } catch (\Throwable $e){
            return redirect()->route('category.index')->with('error','Tidak dapat menghapus data');
       }
    }
}

<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Category;
use App\Models\FinanceLog;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FinanceLogRequest;

class FinanceLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = FinanceLog::query();

        $financeLogs = $query
            ->latest()
            ->where('user_id',Auth::user()->id)
            ->when($request->month, function($query) use ($request) {
                return $query->whereMonth('created_at', $request->month);
            })
            ->when($request->year, function($query) use ($request) {
                return $query->whereYear('created_at', $request->year);
            })
            ->when($request->start_of_week && $request->end_of_week, function($query) use ($request) {
                return $query->whereBetween('created_at', [$request->start_of_week,$request->end_of_week]);
            })
            ->when($request->type, function ($query) use ($request) {
                return $query->whereIn('type', $request->type);
            })
            ->when($request->method, function ($query) use ($request) {
                return $query->whereIn('payment_method', $request->method);
            })
            ->when($request->category, function ($query) use ($request) {
                return $query->whereIn('category_id', $request->category);
            })
            ->when($request->date, function ($query) use ($request) {
                return $query->whereDate('transaction_date', '=', $request->date);
            })
            ->paginate(10);


        $categories = Category::where('user_id',Auth::user()->id)->get();
        return view('pages.finance_log.index', compact('financeLogs','categories'));
    }

    public function load(Request $request){
        $query = FinanceLog::query();

        $financeLogs = $query
            ->latest()
            ->where('user_id',Auth::user()->id)
            ->when($request->month, function($query) use ($request) {
                return $query->whereMonth('created_at', $request->month);
            })
            ->when($request->year, function($query) use ($request) {
                return $query->whereYear('created_at', $request->year);
            })
            ->when($request->start_of_week && $request->end_of_week, function($query) use ($request) {
                return $query->whereBetween('created_at', [$request->start_of_week,$request->end_of_week]);
            })
            ->when($request->type, function ($query) use ($request) {
                return $query->whereIn('type', $request->type);
            })
            ->when($request->method, function ($query) use ($request) {
                return $query->whereIn('payment_method', $request->method);
            })
            ->when($request->category, function ($query) use ($request) {
                return $query->whereIn('category_id', $request->category);
            })
            ->when($request->date, function ($query) use ($request) {
                return $query->whereDate('transaction_date', '=', $request->date);
            })
            ->paginate(10);


        $categories = Category::where('user_id',Auth::user()->id)->get();

        return response()->json([
            'financeLogs' => $financeLogs,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('user_id',Auth::user()->id)->get();
        return view('pages.finance_log.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FinanceLogRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        FinanceLog::create($data);
        return redirect()->route('finance.log.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(FinanceLog $financeLog)
    {
        return view('pages.finance_log.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FinanceLog $financeLog)
    {
        $categories = Category::where('user_id',Auth::user()->id)->get();
        return view('pages.finance_log.edit', compact('financeLog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FinanceLogRequest $request, FinanceLog $financeLog)
    {
        try {
            if ($request) {
                $data = $request->validated();
                $financeLog->update($data);
            } else {
                return redirect()->route('finance.log.index')->with('success', 'Berhasil memperbarui data');
            }

            return redirect()->route('finance.log.index')->with('success', 'Berhasil memperbarui data');
        } catch (\Throwable $e) {
            return redirect()->route('finance.log.index')->with('error', 'Gagal memperbarui data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FinanceLog $financeLog)
    {
        try {
            if ($financeLog) {
                $financeLog->delete();
                return response()->json(['success' => 'Berhasil menghapus data'], 200); // Return success response
            } else {
                return response()->json(['error' => 'Data tidak ditemukan'], 404); // Return error response if log not found
            }
        } catch (\Throwable $e) {
            // You can log the exception for debugging purposes
            \Log::error('Delete Error: ' . $e->getMessage());

            return response()->json(['error' => 'Gagal menghapus data'], 500); // Return server error response
        }
    }
}

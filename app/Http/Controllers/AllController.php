<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\FinanceLog;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function dashboard(Request $request)
    {

        $totalIncome = FinanceLog::where('type', 'income')->sum('nominal');
        $totalExpense = FinanceLog::where('type', 'expense')->sum('nominal');

        $totalTransaction = FinanceLog::all()->count();

        $totalBalance = $totalIncome - $totalExpense;

        $year = Carbon::now()->year; //tahun ini
        $month = Carbon::now()->month; //bulan ini

        $months = $request->month;
        $years = $request->year;

        $totalIncomeMonth = FinanceLog::where('type', 'income')
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->sum('nominal');


        $totalExpenseMonth = FinanceLog::where('type', 'expense')
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->sum('nominal');

        $totalBalanceMonth = $totalIncomeMonth - $totalExpenseMonth;

        // $financeLogs = FinanceLog::latest()
        // ->whereMonth('created_at', $month)
        // ->whereYear('created_at',$year)
        // ->paginate(10);

        $query = FinanceLog::query();

        $financeLogs = $query
            ->latest()
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


        $categories = Category::all();

        return view('pages.dashboard', compact('categories','financeLogs', 'totalBalance','totalExpenseMonth','totalIncomeMonth', 'totalBalanceMonth', 'totalIncome', 'totalExpense','totalTransaction'));
    }
}

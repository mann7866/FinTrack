<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\FinanceLog;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function dashboard()
    {

        $totalIncome = FinanceLog::where('type', 'income')->sum('nominal');
        $totalExpense = FinanceLog::where('type', 'expense')->sum('nominal');
        $totalTransaction = FinanceLog::all()->count();

        $totalBalance = $totalIncome - $totalExpense;
        
        $year = Carbon::now()->year; //tahun ini
        $month = Carbon::now()->month; //bulan ini

        $totalIncomeMonth = FinanceLog::where('type', 'income')
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->sum('nominal');


        $totalExpenseMonth = FinanceLog::where('type', 'expense')
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->sum('nominal');

        $totalBalanceMonth = $totalIncomeMonth - $totalExpenseMonth;

        $financeLogs = FinanceLog::latest()
        ->whereMonth('created_at', $month)
        ->whereYear('created_at',$year)
        ->paginate(10);

        return view('pages.dashboard', compact('financeLogs', 'totalBalance','totalExpenseMonth','totalIncomeMonth', 'totalBalanceMonth', 'totalIncome', 'totalExpense','totalTransaction'));
    }
}

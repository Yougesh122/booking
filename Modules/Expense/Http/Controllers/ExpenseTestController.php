<?php

namespace Modules\Expense\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Expense\Models\Expense;
use Modules\Expense\Services\ExpenseService;

class ExpenseTestController extends Controller
{
    protected ExpenseService $expense;


    public function index()
    {
        $expenses = Expense::get();

        return view('expense::index',compact('expenses'));
    }

}

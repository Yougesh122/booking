<x-expense::layouts.master>
    <h1>Hello World</h1>
    @dd($expenses);
    <p>Module: {!! config('expense.name') !!}</p>
</x-expense::layouts.master>

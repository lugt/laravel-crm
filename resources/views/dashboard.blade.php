
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('content')
    <div class="card row ">
        <div class="card-header">
            Info
        </div>
        <div class="card-body">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Welcome to the Customer Managing System with 6 tables ready.
                    </div>
                </div>
            </div>
            <div class="clearfix row"></div>
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item"> <a href="{{ route('suppliers.index')  }}">suppliers</a> </li>
                    <li class="list-group-item"> <a href="{{ route('customers.index')  }}">customers</a> </li>
                    <li class="list-group-item"> <a href="{{ route('employees.index')  }}">employees</a> </li>
                    <li class="list-group-item"> <a href="{{ route('products.index')  }}">products</a> </li>
                    <li class="list-group-item"> <a href="{{ route('purchases.index')  }}">purchases</a> </li>
                    <li class="list-group-item"> <a href="{{ route('logs.index')  }}">logs</a> </li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>

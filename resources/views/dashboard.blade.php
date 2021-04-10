<!DOCTYPE html>
<html>
<head>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action ="/payment" method="POST">
                    @csrf
                        <div>
                            <label for="amount">Amount:</label>
                            <input type="text" id="amount" name="amount"><br><br>
                            <label for="reference">Reference:</label>
                            <input type="text" id="reference" name="reference"><br><br>
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>

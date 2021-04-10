<!DOCTYPE html>
<head>
	<title>COPYandPAY PHP</title>
	<script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $checkoutId }}"></script>

</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Payment') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <form action="http://127.0.0.1:8000/result" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
                        @csrf
                    </form>
                    </div>
                </div>
                
            </div>
        </div>
    </x-app-layout>
    </body>
</html>
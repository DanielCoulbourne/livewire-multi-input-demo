<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        @livewireStyles

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Message</title>
    </head>
    <body>
        <div class="w-screen h-screen bg-gray-900 flex flex-col justify-center items-center">
            <div class="w-4/5 max-w-lg mb-4 flex justify-between">
                <h1 class="text-purple-600 text-xl">Email Killer</h1>

                <div >
                    <a class="ml-2 text-purple-400" href="{{ route('messages.index') }}">Outbox</a>
                    <a class="ml-2 text-purple-400" href="{{ route('messages.create') }}">Compose</a>
                </div>
            </div>
            <div class="w-4/5 max-w-lg p-4 bg-gray-800">
                {{ $slot }}
            </div>
        </div>

        @livewireScripts
    </body>
</html>

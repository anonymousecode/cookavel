<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookaVel</title>
</head>
<body>
    <x-layout>
        <x-slot name="content">
            <div class="container py-5">
                <!-- Title and Subtitle -->
                <div class="text-center mb-4">
                    <h1 class="fw-bold"  style="color:#F26A21;">Welcome to CookaVel</h1>
                    <p class="text-muted">Your culinary adventure starts here!</p>
                </div>

                <!-- Search Form -->
                <div class="row justify-content-center mb-4">
                    <div class="col-md-6">
                        <form action="{{ route('getRecipe') }}" method="get" class="d-flex gap-2">
                            @csrf
                            <input type="text" name="input" id="input" class="form-control" placeholder="What would you like to cook today?">
                            <button type="submit" class="btn text-light" style="background:#F26A21;">Search</button>
                        </form>
                    </div>
                </div>

                <!-- Alphabet Buttons -->
                <div class="row justify-content-center g-2">
                    @php
                        $alphabets = range('A', 'Z');
                    @endphp

                    @foreach($alphabets as $alphabet)
                        <div class="col-auto">
                            <button class="btn "
                                    onclick="window.location = '{{ route('fromAlphabet', $alphabet) }}'" style="border-color:#F26A21;">
                                {{ $alphabet }}
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-slot>
    </x-layout>
</body>
</html>

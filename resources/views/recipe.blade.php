<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookaVel</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <x-layout>
        <x-slot name="content">
            <div class="container py-5">
                <div class="row mb-4">
                    <h1 class="text-center" style="color:#F26A21;">{{ $data['meals'][0]['strMeal'] }}</h1>
                    <p class="text-center mt-2 mb-4 fs-5 text-secondary">
                        {{ $data['meals'][0]['strCategory'] }} &mdash; {{ $data['meals'][0]['strArea'] }}
                    </p>

                </div>

                <div class="row mb-5 align-items-start g-4">
                    <div class="col-md-6">
                        <img src="{{ $data['meals'][0]['strMealThumb'] }}" alt="Meal Image" class="img-fluid rounded shadow">
                    </div>

                    <div class="col-md-6">
                        <h3 class="mb-3 text-secondary">Ingredients</h3>
                        <ul class="list-group bg-light">
                            @for ($i = 1; $i <= 20; $i++)
                                @php
                                    $ingredient = $data['meals'][0]['strIngredient' . $i] ?? '';
                                    $measure = $data['meals'][0]['strMeasure' . $i] ?? '';
                                @endphp

                                @if ($ingredient != '')
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>{{ $ingredient }}</span>
                                        <span class="text-muted">{{ $measure }}</span>
                                    </li>
                                @endif
                            @endfor
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <h3 class="text-secondary">Instructions</h3>
                    <div class="card bg-light">
                        <div class="card-body">
                            <p class="card-text ">{{ $data['meals'][0]['strInstructions'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <h3 class="text-secondary mb-2">Youtube</h3>
                    <div class=" bg-light">
                        @php
                            $youtube = $data['meals'][0]['strYoutube'];
                            $embedUrl = str_replace("watch?v=", "embed/", $youtube);
                        @endphp
                        <iframe class="card-img-top"  width="50%" height="315" src="{{$embedUrl }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-layout>

    <!-- Bootstrap 5 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

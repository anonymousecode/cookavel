<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CookaVel</title>
</head>
<body>
  <x-layout>
    <x-slot name="content">
      <div class="container py-4">
        <h2 class="mb-4">Results for {{ $input }}</h2>

        <div class="row g-4">
          @for ($i = 0; $i < count($data['meals']); $i++)
            <div class="col-md-4">
              <div class="card h-100 shadow-sm">
                <a href="{{ route('fromRecipeList', $data['meals'][$i]['idMeal']) }}" class="text-decoration-none text-dark">
                  <img
                    src="{{ $data['meals'][$i]['strMealThumb'] }}"
                    class="card-img-top"
                    alt="Image of {{ $data['meals'][$i]['strMeal'] }}"
                  />
                  <div class="card-body">
                    <h5 class="card-title">{{ $data['meals'][$i]['strMeal'] }}</h5>
                  </div>
                </a>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </x-slot>
  </x-layout>

</body>
</html>

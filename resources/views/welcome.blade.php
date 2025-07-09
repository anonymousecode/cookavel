<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookaVel</title>
</head>
<body>
    <x-layout>

    <x-slot  name="content">
        <div>
            <h1>Welcome to CookaVel</h1>
            <p>Your culinary adventure starts here!</p>

            <form action="{{route('getRecipe')}}" method="get">
                @csrf
                <input type="text" name="input" id="input" placeholder="What would you like to cook today?"><br>
                <input type="submit" class="btn">
            </form>
            
        </div>

        <div>
            @php
                $alphabets = [ 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
            @endphp

            @foreach($alphabets as $alphabet)
                <button class="btn">{{$alphabet}}</button>
            @endforeach
        </div>
    </x-slot>

    </x-layout> 
</body>
</html>
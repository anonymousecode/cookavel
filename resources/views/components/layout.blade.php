<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookaVel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <div class="container">
        <div class="row py-3">
            <div class="col d-flex justify-content-between align-items-center">
                <a href="/" style="text-decoration: none; color: inherit;">
                  <h1 class="fw-semibold"  style="color:#F26A21;">CookaVel</h1>

                </a>
                <a href="https://github.com/anonymousecode/cookavel" target="_blank">
                    <img src="{{ asset('images/github.png') }}" class="img-fluid" style="width:40px;" alt="GitHub">
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    {{ $content }}
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center mt-auto py-3">
        <p class="mb-0 text-muted">&copy; {{ date('Y') }} CookaVel. All rights reserved.</p>
    </footer>

</body>
<style>
  body{
  font-family: "Playpen Sans", cursive;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
</style>
</html>

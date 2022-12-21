<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <title>laravel-primi-passi</title>
</head>
<body class="bg-dark">
    <div class="container p-5">
        <h1 class="text-white text-center">Juventus Players</h1>
        <div class="d-flex justify-content-center py-5">
            <div class="card w-50 bg-dark border-light">
                @foreach ($strikers as $striker)
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="text-white m-0">{{ $striker }}</h5>
                    <a href="/scheda" class="btn btn-outline-light w-25">Scheda</a>
                </div>
                @endforeach
                <div class="card-body text-center">
                  <a href="#" class="btn btn-light">Aggiungi</a>
                </div>
              </div>
        </div>
    </div>
</body>
</html>

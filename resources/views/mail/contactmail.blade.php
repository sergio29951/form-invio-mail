<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1>contatto ricevuto da : {{ $name }}</h1>
            </div>
            <div class="col-12">
                <h3>info:</h3>
                <ul>
                    <li>{{ $email }}</li>
                    <li>{{ $phone }}</li>
                    
                </ul>
            </div>
            <div class="col-12">
                <h3>Messaggio</h3>
                <p>{!! $mex !!}</p>
            </div>
        </div>
    </section>
    
  </body>
</html>

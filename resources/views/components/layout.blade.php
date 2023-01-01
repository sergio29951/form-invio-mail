<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo3.png" type="image/x-icon">
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <title>IT - Solution </title>
</head> 
<body>

    <x-navbar/>
    
    {{ $slot }}

    <div class="container-fluid footer-custom">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <x-footer/>
                </div>
            </div>
        </section>
        
    </div>

    {{-- JS AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>
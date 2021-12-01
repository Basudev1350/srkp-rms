<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    
    <title>RMS</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    
</head>
<body>
   
    <div id="dashboard">
        @yield('dashboard')
    </div>
</body>
</html>


                
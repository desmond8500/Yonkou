<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yonkou</title>
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>
<body>
    <div class="wrapper ">
        {{-- @include('yonkou.index.sidebar') --}}
        <div class="main-panel">
        {{-- @include('layouts.navbars.navs.auth') --}}
        @yield('content')
        {{-- @include('layouts.footers.auth') --}}
    </div>
</div>

</body>
</html>

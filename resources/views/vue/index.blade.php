<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <base href="{{ config('app.base') }}">
    <title>REtraining - Guia facetado de Elicitação de Requisitos</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
</head>
<body>
    <div id="app">
        <loading :active.sync="this.$store.getters.isLoading" :can-cancel="false"></loading>

        <div class="columns">
            <sidebar></sidebar>
            <div class="column is-8 is-8-tablet is-9-desktop is-9-widescreen is-10-fullhd">
                <router-view ></router-view>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>
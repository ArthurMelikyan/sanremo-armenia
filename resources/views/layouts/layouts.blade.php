<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Arthur Melikyan">
    <meta name="description" content="{{(!empty($_desc)) ? $_desc : 'Սան Ռեմո Հայաստան' }}">
    <meta name="keywords" content="{{(!empty($_title)) ? $_title : 'Սան Ռեմո Հայաստան' }}">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{{(!empty($_desc)) ? $_desc : 'Սան Ռեմո Հայաստան' }}" />
    <meta property="og:title" content="{{ (!empty($_title)) ? $_title : 'Սան Ռեմո Հայաստան' }}" />
    <meta property="og:image" content="{{ (!empty($_meta_img)) ? asset('storage') . '/' . $_meta_img : asset('assets/images/ogimg.jpg')}}" />
    <link href="{{asset('assets/images/ico.ico')}}" rel="icon">
    <title>{{(!empty($_title)) ? $_title : 'Սան Ռեմո Հայաստան'}}</title>    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" defer integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
        crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
    <div class="container-fulid">
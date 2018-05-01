@extends('layouts.master', ['title' => 'Home'])
@section('content')
    <div class="container">
        <h2> What is Laracarte? </h2>
        <p>
            Laracarte is a clone app of <a href="https://laramap.com">Laramap.com</a>.
        </p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fas fa-exclamation-triangle"></i>This App has been built by <a href="#">RickFAF Dev</a> for learning purposes.</strong>
                </p>
            </div>
        </div>
        <p> Feel free to help to improve the <a href="#">source code</a>. </p>
        <hr>
        <h2> What is Laramap? </h2>
        <p> Laramap is a website by which Laracarte was inspired </p>
        <p> More infos <a href="https://laramap.com/p/about">here</a>. </p>
        <hr>
        <h2> Which tools and services are used in laracarte? </h2>
        <p> Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email
        and other sections.</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocalisation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@endsection
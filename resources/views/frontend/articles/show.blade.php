@extends('layouts.frontend.master')
@section('title', $article->title)
@section('content')
    <div class="container-fluid">
        <div class="px-2 py-1">
            <!-- breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                </ol>
            </nav>
        </div>
        <div class="row px-2 py-1">
            <div class="col-12">
                <h2 class="card-title">{{ $article->title }}</h2>
                <span class="badge bg-primary">Irma Tobing</span>
            </div>
        </div>
    </div>
    <div class="row py-1">
        <div class="col-12">
            <div style="background-color: #E7E7E7" class="p-4">
                {!! $article->body !!}
            </div>
        </div>
    </div>
@endsection

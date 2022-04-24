@extends('layouts.app')

@section('content')
    <button class="bg-origin-padding bg-violet-200 rounded-md shadow p-2 border-2 " >
        <a href={{url('/Post')}} class="text-gray-700 font-bold py-2 px-6">
            Go Back
        </a>
    </button>
    <div class="max-w-sm my-4 bg-white border-2 border-gray-300 mb-2 p-6 rounded-md tracking-wide shadow-lg">
        <h1>{{$post->title}}</h1>   
        <small>Written on {{$post->created_at}}</small>
    </div>
@endsection
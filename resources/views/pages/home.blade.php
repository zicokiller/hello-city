@extends('app')

@section('title')



@section('content')
    
        <img src={{asset("/images/french_flag.webp")}} alt="French Flag">
        <h1 class="pt-3 text-5xl text-indigo-600">Hello from France!</h1>

        <p class="pt-2 text-lg text-center text-gray-700">It's currently {{date('h:i A')}}</p>

        
@endsection
      
    


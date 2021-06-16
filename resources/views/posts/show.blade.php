@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <!-- <div class="bg-gray-50 border-2 w-full p-4 rounded-lg"> -->
        <div class="bg-gray-50 border-2 w-8/12 p-4 rounded-lg">
        <!-- <div class="w-8/12 bg-white p-6 rounded-lg"> -->
            <x-post :post="$post" />
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            @guest
                <p> Please log in to create post </p>
            @endguest
            @auth
                <form action="{{ route('posts') }}" method="post" class="mb-6">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only"> Body </label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Post somthing..."></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded"> Post </button>
                    </div>
                </form>
            @endauth

            <div>
                Post index
            </div>
        </div>
    </div>
@endsection
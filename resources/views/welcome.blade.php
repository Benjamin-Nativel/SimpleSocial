@extends('layouts.app')



@section('main')


<div class="max-w-sm m-4 mt-5 overflow-hidden rounded-lg shadow-sm">

    <!--first trending tweet-->
    <div class="flex">
        <div class="flex-1">
            <p class="w-48 px-4 mt-3 ml-2 text-xs text-gray-400">1 . Trending</p>
            <h2 class="w-48 px-4 ml-2 font-bold ">#Microsoft363</h2>
            <p class="w-48 px-4 mb-3 ml-2 text-xs text-gray-400">5,466 posts</p>

        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class="float-right text-2xl text-gray-400 rounded-full hover:bg-gray-800 hover:text-blue-300">
                <svg class="w-5 h-5 m-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>


    <!--second trending tweet-->

    <div class="flex">
        <div class="flex-1">
            <p class="w-48 px-4 mt-3 ml-2 text-xs text-gray-400">2 . Politics . Trending</p>
            <h2 class="w-48 px-4 ml-2 font-bold ">#HI-Fashion</h2>
            <p class="w-48 px-4 mb-3 ml-2 text-xs text-gray-400">8,464 posts</p>

        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class="float-right text-2xl text-gray-400 rounded-full hover:bg-gray-800 hover:text-blue-300">
                <svg class="w-5 h-5 m-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>


    <!--third trending tweet-->

    <div class="flex">
        <div class="flex-1">
            <p class="w-48 px-4 mt-3 ml-2 text-xs text-gray-400">3 . Rock . Trending</p>
            <h2 class="w-48 px-4 ml-2 font-bold ">#Ferrari</h2>
            <p class="w-48 px-4 mb-3 ml-2 text-xs text-gray-400">5,586 Concepts</p>

        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class="float-right text-2xl text-gray-400 rounded-full hover:bg-gray-800 hover:text-blue-300">
                <svg class="w-5 h-5 m-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>
    <!--show more-->
    <div class="flex">
        <div class="flex-1 p-4">
            <h2 class="w-48 px-4 ml-2 text-sm font-semibold text-blue-400">Show more</h2>
        </div>
    </div>

@endsection
<x-app-layout>
<div class="w-full text-center font-mono bg-rose-200">
            <br>
            <br>
            <br>
            <br>
                <div class="text-base"><h1>Morning ☀ Menu</h1></div>
                <br>
                    <ul class="justify-center">
                        <li>トーストセット 選べるペースト</li>
                        <li>季節のスープ</li>
                        <li>ドリンク</li>
                        <li>coffee (冷たいcold、温かいhot)</li>
                    <br>
                    <br>
                    <br>
                    <br>
                <h1>Lunch Menu</h1>
                    <br>
                        <li>お肉かお魚の定食</li>
                        <li>季節のスープ</li>
                        <li>ドリンク</li>
                    <br>
                    <br>
                    <br>
                    <br>
                <h1>Dinner Menu</h1>
                    <br> 
                        <li>店主のきまぐれ</li>
                        <li>季節のスープ</li>
                        <li>ビール、ソフトドリンク各種</li>
                    <br>
                    <br>
                    <br>
                    <br>
            </div>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts.index') }}
        </h2>
    </x-slot> -->

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    Information
                </div>
            </div>
        </div>
    </div> -->

<div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

        <!-- @if(session('notice'))
            <div class="bg-blue-100 border-blue-500 text-blue-700 border-l-4 p-4 my-2">
                {{ session('notice') }}
            </div>
        @endif -->

        <x-flash-message :message="session('notice')" />

         <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
             @foreach ($posts as $post)
                 <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                     <a href="{{ route('posts.show', $post) }}">
                         <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">{{ $post->title }}</h2>
                         <h3>{{ $post->user->name }}</h3>
                         <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                             <span class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $post->created_at ? 'NEW' : '' }}</span>
                             {{ $post->created_at }}
                         </p>
                         <img class="w-full mb-2" src="{{ $post->image_url }}" alt="">
                         <p class="text-gray-700 text-base">{{ Str::limit($post->body, 50) }}</p>
                     </a>
                 </article>
             @endforeach
            </div>
            {{ $posts->links() }}
        </div>
</x-app-layout>

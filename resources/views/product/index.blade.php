@extends('layouts.app')
@section('title','Products' )
@section('content')

        <!-- component cards -->
       
<div class="container  mx-auto px-4 md:px-12 bg-white">
    
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
        @foreach ($categories as $category)
        @php
            $children = TCG\Voyager\Models\Category::where('parent_id',$category->id)->get()   
        @endphp
        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3  ">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

               <a href="{{ route('products',['category_id'=>$category->id]) }}">
                    <img alt="Placeholder" class="block h-80 w-full"  src="{{asset('storage/'.$category->image)}}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4 justify-center">
                    <h1 class="text-lg text-blue-500">
                        <a class="no-underline hover:underline text-blue-800" href="{{ route('products',['category_id'=>$category->id]) }}">
                            {{ $category->name }}
                        </a>
                    </h1>
                    
                </header>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

      @endforeach
    </div>
</div>
@endsection
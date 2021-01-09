@if (count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg mb-1">
       {{$error}}
    </div>
    
        
    @endforeach
@endif

@if (session('success'))
   <div class="bg-green-300 relative text-green-600 py-3 px-3 rounded-lg mb-1">
         {{ session('success') }}
    </div>
    
@endif

@if (session('error'))
   <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg mb-1">
         {{ session('error') }}
    </div>
    
@endif
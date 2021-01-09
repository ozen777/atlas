@component('mail::message')
<!-- This is an example component -->
<div class="mx-10 pt-15">
    <div class="grid gap-6 mb-8 md:grid-cols-2">
               <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                 <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                Message from {{ $data['name'] }}
                 </h4>
                 <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                    Email: {{ $data['email'] }}
                     </h4>
                 <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                Company name:    {{ $data['companyName'] }}
                 </h4>
                 <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                Country:    {{ $data['Country'] }}
                 </h4>
                 <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                PhoneNumber    {{ $data['phoneNumber'] }}
                 </h4>
                 <p class="text-gray-600 dark:text-gray-400">
                    {{ $data['message'] }}
                 </p>
               </div>
             
             </div>
 
@endcomponent

{{-- resources/views/admin/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    عدد المشاريع: {{ $projectCount }}
                </div>
            </div>
        </div>
    </div> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">    
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 flex justify-between items-center">
                    <h3 class="text-lg font-semibold">عدد المشاريع: {{ $projectsCount ?? 0 }}</h3>
                    <a href="{{ route('admin.projects.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        إضافة مشروع
                    </a>
                </div>
            </div>

         
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 flex justify-between items-center">
                    <h3 class="text-lg font-semibold">عدد العملاء: {{ $servicesCount ?? 0 }}</h3>
                    <a href="{{ route('admin.services.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        إضافة عميل
                    </a>
                </div>
            </div>

          
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("تم تسجيل الدخول بنجاح!") }}
                </div>
            </div>
        </div>
    </div>
 
</x-app-layout>

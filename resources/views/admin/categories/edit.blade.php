<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2  bg-sky-800 hover:bg-sky-950 rounded-lg text-white">Povratak</a>
</div>

<div class="m-2 p-2 bg-slate-700 rounded flex justify-center">
<div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
  <form method="POST" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
  @csrf  
  @method('PUT')
  <div class="sm:col-span-6">
      <label for="name" class="block text-sm font-medium text-white"> Ime </label>
      <div class="mt-1">
        <input type="text" id="name" name="name" value="{{ $category->name }}" class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-500 @enderror" />
        @error('name')
        <div class="text-sm text-red-400">{{ $message }}</div>
          @enderror
      </div>
    </div>
    <div class="sm:col-span-6">
      <label for="image" class="block text-sm font-medium text-white"> Slika </label>
      <div>
        <img class="w-32 h-32" src="{{ Storage::url($category->image)}}">
        @error('image')
        <div class="text-sm text-red-400">{{ $message }}</div>
          @enderror
      </div>
      <div class="mt-1">
        <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('image') border-red-500 @enderror" />
      </div>
    </div>
    <div class="sm:col-span-6 pt-5">
      <label for="description" class="block text-sm font-medium text-white"> Opis </label>
      <div class="mt-1">
        <textarea id="description" name="description" rows="3"  class="shadow-sm focus:ring-indigo-500 appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-500 @enderror">
          {{ $category->description }}
        </textarea>
        @error('description')
        <div class="text-sm text-red-400">{{ $message }}</div>
          @enderror
      </div>
    </div>
    <div class="mt-6 p-4">
    <button type="submit" class="px-4 py-2 bg-sky-800 hover:bg-sky-950 rounded-lg text-white">Update</button>
</div>
</form>
</div>
</div>


        </div>
    </div>
</x-admin-layout>

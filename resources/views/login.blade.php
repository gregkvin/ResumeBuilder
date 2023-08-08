<x-layout>
@section('title', 'Login')
<x-navbar />
<div class="flex justify-center">
    <div class="block min-w-sm rounded-lg border border-gray-100 p-6 overflow-hidden">
   <h1 class="py-8 font-bold text-gray-800 text-center text-3xl font-mono">Sign in to your account</h1>
    <form class="space-y-6" action="/login" method="POST">
      @csrf
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-3">
          <input id="email" name="email" type="email" value="{!! old('email') !!}" autocomplete="email" required class="block w-full rounded-md border-0 p-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
        </div>
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" value="{{old('password')}}" autocomplete="current-password" required class="block w-full rounded-md border-0 p-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
        </div>
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-slate-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white hover:text-black shadow-sm hover:bg-slate-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Sign in</button>
      </div>

      

    </form>

    <p class="mt-7 text-center text-sm"> First timer?
      <span><a href="{{route('register')}}" class="leading-6 text-stone-800 hover:text-stone-500">Create an account</a></span>
    </p>

   

</x-layout>
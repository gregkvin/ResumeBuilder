<x-layout>
@section('title', 'Register')
<x-navbar />

<div class="flex justify-center">
    <div class="block sm:w-512 rounded-lg border border-gray-100 p-6 overflow-hidden">
    
    <div class="border-b border-gray-900/10 pb-12">
      <h1 class="text-center text-3xl font-mono font-semibold text-gray-900">Let's get started!</h1>
      
    <form method="POST" action="{{route('store')}}"> 
        @csrf
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
          <div class="mt-1">
            <input type="text" name="firstname" id="firstname" autocomplete="firstname" class="block w-full rounded-md border-0 p-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6" value="{{old('firstname')}}" />
          </div>
          @error('firstname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="sm:col-span-3">
          <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
          <div class="mt-1">
            <input type="text" name="lastname" id="lastname" autocomplete="lastname" class="block w-full rounded-md border-0 p-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6" value="{{old('lastname')}}">
          </div>
          @error('lastname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="sm:col-span-6">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-1">
            <input id="email" name="email" type="email" value="{{old('email')}}" autocomplete="email" class="block w-full rounded-md border-0 p-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
          </div>
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="sm:col-span-3">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        <div class="mt-1">
          <input id="password" name="password" type="password" value="{{old('password')}}" autocomplete="password" required class="block w-full rounded-md border-0 p-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
        </div>
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div class="sm:col-span-3">
          <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
        <div class="mt-1">
          <input id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}" type="password" autocomplete="password_confirmation" required class="block w-full rounded-md border-0 p-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
        </div>
        @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      </div>
    </div>

    <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-slate-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white hover:text-black shadow-sm hover:bg-slate-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Register</button>
      </div>

</form>

<p class="mt-7 text-center text-sm"> Already a user?
      <span><a href="{{route('login')}}" class="leading-6 text-stone-800 hover:text-stone-500">Login</a></span>
    </p>



</div>



</div>

</x-layout>
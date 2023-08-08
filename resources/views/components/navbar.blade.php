<nav class="sticky top-0 bg-gray-200 z-[500]">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
     @auth
      <form class="inline" method="POST" action="/logout">
        @csrf
        <button type="submit" class="text-stone-600 hover:text-gray-200 hover:bg-stone-400 rounded-md px-3 py-2 text-md font-medium"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
     </form>
     @endauth
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center mt-2">
        @auth
        <a href="{{url('/'.auth()->user()->id.'/resume')}}"><img src="{{ asset('logo/resumexpress.png') }}" class="w-36" alt="" /></a>
        @endauth
        @guest
        <a href="{{url('/')}}"><img src="{{ asset('logo/resumexpress.png') }}" class="w-36" alt="" /></a>
        @endguest
        </div>
      </div>
      @guest
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
     @endguest
     @auth
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="hidden sm:block">
      <form class="inline" method="POST" action="/logout">
        @csrf
        <button type="submit" class="text-stone-600 hover:text-gray-200 hover:bg-stone-400 rounded-md px-3 py-2 text-md font-medium"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp; Logout</button>
     </form>
     </div>
     @endauth
        </div>
      </div>
    </div>
  </div>
</nav>
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
        <div class="hidden sm:block">
      <a href="/register" class="bg-gray-900 text-white rounded-md px-3 py-2 text-md font-medium" aria-current="page">+ Get Started</a>
     </div>
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
        <!-- Profile dropdown -->
        <!--
        <div class="relative ml-3">
          <div>
            
            <button data-dropdown-toggle="dropdown" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>

          <div id="dropdown" class="hidden right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
        Active: "bg-gray-100", Not Active: "" 
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
-->
          
        </div>
      </div>
    </div>
  </div>

</nav>
<script>

    </script>
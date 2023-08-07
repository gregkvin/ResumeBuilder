<x-layout>
@section('title', 'Hola!')
<x-navbar />
<div class="relative isolate px-6 py-2 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-[#f4caca] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-4">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
      </div>
      <div class="text-center">
        <div class="dynamic-text">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">The <span></span> way to create a resume.</h1>
        </div>
        <p class="mt-6 text-lg leading-8 text-gray-600">Through <b>resumexpress</b>, we're dedicated to simplifying your journey to career success. Our user-friendly platform empowers job seekers of all backgrounds to create polished and professional resumes effortlessly.</p>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-x-6 items-center justify-center">
    <div class="sm:order-1 mb-4 sm:mb-0">
        <a href="{{route('register')}}" class="rounded-md bg-slate-300 px-3.5 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-slate-600 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 block w-full md:w-auto">Create resumes</a>
    </div>

    <div class="sm:order-2">
    <form class="flex items-center" action="{{ route('search') }}" method="post">   
        @csrf
    <label for="search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ceb9b1}</style><path d="M64 112c-8.8 0-16 7.2-16 16V384c0 8.8 7.2 16 16 16H512c8.8 0 16-7.2 16-16V128c0-8.8-7.2-16-16-16H64zM0 128C0 92.7 28.7 64 64 64H512c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM176 320H400c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm-72-72c0-8.8 7.2-16 16-16h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V248zm16-96h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V168c0-8.8 7.2-16 16-16zm64 96c0-8.8 7.2-16 16-16h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H200c-8.8 0-16-7.2-16-16V248zm16-96h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H200c-8.8 0-16-7.2-16-16V168c0-8.8 7.2-16 16-16zm64 96c0-8.8 7.2-16 16-16h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H280c-8.8 0-16-7.2-16-16V248zm16-96h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H280c-8.8 0-16-7.2-16-16V168c0-8.8 7.2-16 16-16zm64 96c0-8.8 7.2-16 16-16h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H360c-8.8 0-16-7.2-16-16V248zm16-96h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H360c-8.8 0-16-7.2-16-16V168c0-8.8 7.2-16 16-16zm64 96c0-8.8 7.2-16 16-16h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H440c-8.8 0-16-7.2-16-16V248zm16-96h16c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H440c-8.8 0-16-7.2-16-16V168c0-8.8 7.2-16 16-16z"/></svg>
    </div>
        <input type="text" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter code or link..." required>
    </div>

    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-stone-600 rounded-lg hover:text-stone-300 hover:bg-stone-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Search
    </button>
</form>
    </div>
</div>
@error('search')
        <p class="text-red-500 mt-4 float-left sm:float-none sm:ml-32 text-xs">Resume not found</p>
    @enderror

      </div>
    </div>

    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
<style>
.dynamic-text span {
    position: relative;
}

.dynamic-text span::before{
    content: "easier";
    color: #8E8B9C;
    animation: words 20s infinite;
}

.dynamic-text span::after{
    content: "";
    position: absolute;
    width:calc(100% + 8px);
    height:100%;
    background-color: #ffffff;
    border-left: 2px solid #8e8b9c;
    right:-8px;
    animation: cursor .8s infinite, typing 20s steps(14) infinite;
}

@keyframes cursor {
    to {
        border-left: 2px solid #ff7f5000;
    }
}

@keyframes words {
    0%, 20% {
        content: "easier";
    }

    21%, 40% {
        content: "simple";
    }

    41%, 60% {
        content: "convenient";
    }

    61%, 80% {
        content: "efficient";
    }

    81%, 100% {
        content: "smart";
    }
}

@keyframes typing {
    10%, 15%, 30%, 35%, 50%, 55%, 70%, 75%, 90%, 95%{
        width:0;
    }
    5%, 20%, 25%, 40%, 45%, 60%, 65%, 80%, 85% {
        width:calc(100% + 8px);
    }
}
</style>


</div>





</x-layout>
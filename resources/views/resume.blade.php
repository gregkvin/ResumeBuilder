<x-layout>
@section('title', 'Resume')
<x-navbar />

<div class="flex flex-col items-center justify-center py-10">
    <h1 class="text-3xl mb-3 md:text-5xl font-light font-mono text-gray-800 mb-2 text-center">Explore <b>My Resumes</b></h1>
    <p class="text-lg text-gray-500">Browse through your saved resume entries</p>
</div>

@if(count($resumes) == 0)
<div class="flex justify-center">
    <p>You have not added a resume.</p>
</div>
<div class="flex justify-center mt-5">
    <p class="mt-7 text-center text-sm">
        <button type="button" id="open" class="bg-slate-200 px-3 py-2 rounded-md">Add new resume</button>
    </p>
</div>
@else
<div class="p-6 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($resumes as $resumeData)
    <a href="{{url('/'.$resumeData->slug)}}">
        <div class="border rounded-lg shadow-md p-4 hover:border-lime-800 hover:shadow-lg transition duration-300">
            <p class="truncate text-sm font-semibold leading-6 text-lime-800">{{$resumeData->slug}}</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">Latest update: {{$resumeData->updated_at}}</p>
        </div>
    </a>
    @endforeach
</div>

<div class="px-10 py-6 text-xs m-3">
    {{$resumes->links()}}
</div>

<p class="mt-7 text-center text-sm">
    <a href="{{route('new')}}" type="button" class="bg-slate-200 px-3 py-2 rounded-md">Add new resume</a>
</p>
@endif

</x-layout>

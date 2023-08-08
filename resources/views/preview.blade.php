<x-layout>
@section('title', 'Resume')
<x-navbar />

<div class="my-4 mx-8">
@auth
<a href="{{ route('index', auth()->user()->id) }}" class="text-xs text-gray-500 hover:text-slate-500"><i class="fa fa-arrow-left mr-1"></i>Back to Dashboard</a>
</div>
<div class="flex justify-end items-center mx-2 sm:mx-16">
    <a href="{{url('/'.$resume->slug.'/download')}}" class="px-4 py-1 text-sm text-slate rounded hover:text-emerald-800 focus:outline-none">
        <i class="fas fa-download"></i> <span>&nbsp;Download</span>
</a>
    <input type="hidden" value="{{(url('/'.$resume->slug))}}" id="resume_url">
    <button onclick="copyTheURL()" class="px-4 py-1 text-sm text-slate rounded hover:text-blue-800 focus:outline-none">
    <i class="fas fa-copy"></i> <span>&nbsp;Copy URL</span>
    </button>
    <a href="{{(url('/'.$resume->slug.'/edit'))}}" class="px-4 py-1 text-sm text-slate rounded hover:text-yellow-800 focus:outline-none">
        <i class="fas fa-edit"></i> <span>&nbsp;Edit</span>
    </a>
    <a href="{{(url('/'.$resume->slug.'/delete'))}}" class="px-4 py-1 text-sm text-slate rounded hover:text-red-800 focus:outline-none">
        <i class="fas fa-trash"></i> <span>&nbsp;Delete </span>
    </a>
@endauth

@guest
<a href="{{url('/')}}" class="text-xs text-gray-500 hover:text-slate-500"><i class="fa fa-arrow-left mr-1"></i>Back to Dashboard</a>
</div>
<div class="flex justify-end items-center mx-2 sm:mx-16">
<a href="{{url('/'.$resume->slug.'/download')}}" class="px-4 py-2 text-sm text-slate rounded hover:text-emerald-800 focus:outline-none">
        <i class="fas fa-download"></i> &nbsp;Download
</a>
@endguest
</div>
<div class="container mx-auto p-6 bg-white rounded shadow-md mt-10">

        <h1 class="text-3xl font-semibold border-slate-500 mb-2">{{$resume->first_name}}&nbsp;{{$resume->last_name}}</h1>
        <p class="text-gray-500 mb-4">{{$resume->title}}</p>
        <hr class="border-1.5 border-slate-500 mb-2">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4">
        <div class="flex items-center">
            <i class="fas fa-envelope text-gray-600 mr-2"></i>
            <p class="text-gray-500 text-xs">
            @if($resume->email === null)
            -
            @else
            {{ $resume->email }}
            @endif
        </p>
        </div>
        <div class="flex items-center">
            <i class="fas fa-phone text-gray-600 mr-2"></i>
            <p class="text-gray-500 text-xs">
            @if($resume->phone_no === null)
            -
            @else
            {{ $resume->phone_no }}
            @endif
        </p>
        </div>
        <div class="flex items-center">
            <i class="fas fa-location-pin text-gray-600 mr-2"></i>
            <p class="text-gray-500 text-xs">
            @if($resume->location === null)
            -
            @else
            {{ $resume->location }}
            @endif
        </p>
        </div>
        <div class="flex items-center">
            <i class="fab fa-linkedin-in text-gray-600 mr-2"></i>
            <p class="text-gray-500 text-xs">
            @if($resume->linkedin_url === null)
            -
            @else
            {{ $resume->linkedin_url }}
            @endif
        </p>
        </div>
    </div>

        <hr class="border-1.5 border-slate-500 mt-2 mb-3">
        @if($resume->summary !== null)
        <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Profile</h2>
                <p class="text-gray-600 description">{{$resume->summary}}</p>
            </div>
            <hr class="border-1.5 border-slate-500 mt-2 mb-3">
        @endif
        
        @php
        $educationCount = DB::table('education')->where('resume_id', $resume->id)->count();
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">    
            @if($educationCount !== 0)
            <div>
                <h2 class="text-xl font-semibold mb-2">Education</h2>
                @php
                $sortedEducations = $resume->educations()->orderBy('start_date', 'desc')->get();
                @endphp
                @foreach($sortedEducations as $education)
                @php $startDate = \Carbon\Carbon::parse($education->start_date);
                     $endDate = \Carbon\Carbon::parse($education->end_date);
                @endphp
                <div class="border border-slate-300 rounded-lg p-4 transition-transform mb-2 transform hover:border-2">
                <p class="text-gray-600 mb-2"><span class="font-semibold text-md text-emerald-800">{{$education->degree}}</span><br>{{$education->school_name}}<br>{{$education->school_location}}<br>{{$startDate->format('F Y')}} - {{$endDate->format('F Y')}}</p>
                </div>
                @endforeach
            </div>
            @endif
            <hr class="sm:hidden border-1.5 border-slate-500">
            @php
            $experienceCount = DB::table('experiences')->where('resume_id', $resume->id)->count();
            @endphp
            @if($experienceCount !== 0)
            <div>
                <h2 class="text-xl font-semibold mb-2">Experience</h2>
                @php
                $sortedExperiences = $resume->experiences()->orderBy('start_date', 'desc')->get();
                @endphp
                @foreach($sortedExperiences as $experience)
                @php $startDate = \Carbon\Carbon::parse($experience->start_date);
                     $endDate = \Carbon\Carbon::parse($experience->end_date);
                @endphp
                <div class="border border-slate-300 rounded-lg p-4 transition-transform mb-2 transform hover:border-2">
                <p class="text-gray-600 mb-2"><span class="font-semibold text-md text-emerald-800">{{$experience->job_title}}</span><br>{{$experience->company_name}}<br>{{$experience->company_location}}<br>{{$startDate->format('F Y')}} - {{$endDate->format('F Y')}}</p>
                @if($experience->description !== null)
                <hr class="border-1 mb-2">
                <p class="text-xs text-gray-600 mb-6 description">{{$experience->description}}</p>
                </div>
                @endif
                @endforeach
            </div>
            @endif
        </div>
        
    </div>

<script>

function copyTheURL(){
    var urlVal = document.getElementById("resume_url");

    urlVal.select();
    navigator.clipboard.writeText(urlVal.value);
    alert("Resume URL has been copied to clipboard!");
}



</script>

<style>
    .description {
            text-align: justify;
        }

        @media (max-width: 640px) {
        /* Hide text for buttons on mobile view */
        .flex > a > span,
        .flex > button > span {
            font-size: 0; /* Hide text */
        }
    }
    </style>



</x-layout>
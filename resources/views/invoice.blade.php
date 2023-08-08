<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Resume</title>
    <style>
        body {
            font-family: Times New Roman, serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            padding: 5px;
            text-align: center;
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 5px;
        }
        .contact-item {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .education {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .degree {
            font-weight: bold;
        }
        .location-date {
            text-align: left;
        }
        .experience {
            margin-bottom: 15px;
        }
        .job-title {
            font-weight: bold;
        }
        .company-name {
            color: #666;
        }
        .description {
            text-align: justify;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{$resume->first_name}} {{$resume->last_name}}</h1>
        <p>{{$resume->title}}</p>
    </header>
    <div class="container">
        <div class="section">
            <h2>Contact Information</h2>
            <div class="contact-info">
                <div class="contact-item">
                    @if($resume->email !== null)
                    <p>Email: {{$resume->email}}</p>
                    @endif
                    @if($resume->phone_no !== null)
                    <p>Phone: {{$resume->phone_no}}</p>
                    @endif
                    @if($resume->linkedin_url !== null)
                    <p>Linkedin URL: {{$resume->linkedin_url}}</p>
                    @endif
                    @if($resume->location !== null)
                    <p>Location: {{$resume->location}}</p>
                    @endif
                </div>
            </div>
        </div>
        @if($resume->summary !== null)
        <div class="section">
            <h2>Summary</h2>
            <p class="description">{{$resume->summary}}</p>
        </div>
        @endif
        @php
        $educationCount = DB::table('education')->where('resume_id', $resume->id)->count();
        @endphp
        @if($educationCount !== 0)
        <div class="section">
            <h2>Education</h2>
            @php
                $sortedEducations = $resume->educations()->orderBy('start_date', 'desc')->get();
                @endphp
            @foreach($sortedEducations as $education)
                @php
                    $startDate = \Carbon\Carbon::parse($education->start_date);
                    $endDate = \Carbon\Carbon::parse($education->end_date);
                @endphp
                <div class="education">
                    <div>
                        <p class="degree">{{$education->degree}}<br> {{$education->school_name}}</p>
                        <p class="location-date">{{$education->school_location}} <br> {{$startDate->format('F Y')}} - {{$endDate->format('F Y')}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
        @php
        $experienceCount = DB::table('experiences')->where('resume_id', $resume->id)->count();
        @endphp
        @if($experienceCount !== 0)
        <div class="section">
            <h2>Experience</h2>
            @php
                $sortedExperiences = $resume->experiences()->orderBy('start_date', 'desc')->get();
                @endphp
            @foreach($sortedExperiences as $experience)
                @php
                    $startDate = \Carbon\Carbon::parse($experience->start_date);
                    $endDate = \Carbon\Carbon::parse($experience->end_date);
                @endphp
                <div class="experience">
                    <p class="job-title">{{$experience->job_title}}</p>
                    <p class="company-name">{{$experience->company_name}}</p>
                    <p>{{$startDate->format('F Y')}} - {{$endDate->format('F Y')}}</p>
                    <p class="description">{{$experience->description}}</p>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</body>
</html>

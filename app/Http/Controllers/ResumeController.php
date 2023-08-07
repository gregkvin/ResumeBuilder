<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experiences;
use App\Models\Resume;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = Resume::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->paginate(6);
        return view('resume', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function newResume(){
        $randomString = Str::random(10);
        $newResume = Resume::create([
            'id' => Str::uuid()->toString(),
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($randomString),
        ]);
        return redirect(route('create', $newResume->slug));
    }
    public function create($slug)
    {
        $user = auth()->user();
        $resume = Resume::where('slug', $slug)->first();
        return view('create', compact(['resume', 'user']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume, $slug)
    {
        $resume = Resume::where('slug', $slug)->first();
        return view('preview', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $resume = Resume::find($slug);
        $resume = Resume::where('slug', $slug)->first();
        return view('edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */

    private function saveBasicInfo(Request $request, $slug)
    {
    $resume = Resume::where('slug', $slug)->first();
    $resume->first_name = $request->first_name;
    $resume->last_name = $request->last_name;
    $resume->title = $request->title;
    $resume->summary = $request->summary;

    return $resume;
    }
    public function savePersonal(Request $request, $slug){
        $resume = $this->saveBasicInfo($request, $slug);
        $resume->save();

        return redirect('/resume');
    }

    public function saveSocial(Request $request, $slug){
        $resume = $this->saveBasicInfo($request, $slug);
        $resume->email = $request->email;
        $resume->phone_no = $request->phone;
        $resume->linkedin_url = $request->linkedin_url;
        $resume->location = $request->location;
        $resume->save();

        return redirect('/resume');
    }


    public function search(Request $request)
    {

        $searchTerm = $request->input('search');

        if (preg_match('/^[a-z0-9\-]+$/', $searchTerm)) {
            $rules = [
                'search' => 'required|exists:resumes,slug',
            ];
        } elseif (filter_var($searchTerm, FILTER_VALIDATE_URL)) {
            $rules = [
                'search' => 'required|url',
            ];
        } else {
            return redirect()->back();
        }
        
        $request->validate($rules);
        
        if (isset($rules['exists:resumes,slug'])) {
            $resume = Resume::where('slug', $searchTerm)->first();
            if ($resume) {
                return redirect()->route('preview', $resume->slug);
            }
        } else {
                return redirect($searchTerm);
        }
    }
    

public function update(Request $request, Resume $resume, $slug)
    {
        $resumeData = $this->saveBasicInfo($request, $slug);
        $resumeData->email = $request->email;
        $resumeData->phone_no = $request->phone;
        $resumeData->linkedin_url = $request->linkedin_url;
        $resumeData->location = $request->location;
        $resumeData->save();

        $resume = Resume::where('slug', $slug)->first();

    if ($resume) {
        $educationData = $resume->education;
        $experiencesData = $resume->experience;
        $schoolNames = $request->input('school_name');
        $schoolLocations = $request->input('school_location');
        $degrees = $request->input('degree');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $companyNames = $request->input('company_name');
        $companyLocations = $request->input('company_location');
        $jobTitle = $request->input('job_title');
        $workStartDate = $request->input('work_start_date');
        $workEndDate = $request->input('work_end_date');
        $workDescription = $request->input('work_description');

        $educations = Education::where('resume_id', $resume->id)->get();
        $experiences = Experiences::where('resume_id', $resume->id)->get();

    // Loop through each record and delete it

    foreach ($educations as $education) {
        $education->delete(); // This will trigger model events and delete related data
    }   

    foreach($experiences as $experience){
        $experience->delete();
    }

    if ($educationData === null) {
        if (
            isset($schoolNames) && 
            isset($schoolLocations) && 
            isset($degrees) && 
            isset($startDate) && 
            isset($endDate)
        ) {
        // Create and update new education record
        for ($i = 0; $i < count($schoolNames); $i++) {
            if (isset($schoolNames[$i]) && isset($schoolLocations[$i]) && isset($degrees[$i]) && isset($startDate[$i]) && isset($endDate[$i])){
            $newEducation =  new Education([
                'school_name' => $schoolNames[$i],
                'school_location' => $schoolLocations[$i],
                'degree' => $degrees[$i],
                'start_date' => $startDate[$i],
                'end_date' => $endDate[$i]
            ]);
        
            $newEducation->id = Str::uuid()->toString(); // Generate UUID
            $newEducation->resume_id = $resume->id;
            $newEducation->save();
        }
    }
    }


    } 

    if ($experiencesData === null) {
        // Create and update new education record
        if (
            isset($companyNames) && 
            isset($companyLocations) && 
            isset($jobTitle) && 
            isset($workStartDate) && 
            isset($workEndDate) &&
            isset($workDescription)
        ) {
        
        for ($i = 0; $i < count($companyNames); $i++) {
            if (isset($companyNames[$i]) && isset($companyLocations[$i]) && isset($jobTitle[$i]) && isset($workStartDate[$i]) && isset($workEndDate[$i]) && isset($workDescription[$i])){
            $newExperience =  new Experiences([
                'company_name' => $companyNames[$i],
                'company_location' => $companyLocations[$i],
                'job_title' => $jobTitle[$i],
                'start_date' => $workStartDate[$i],
                'end_date' => $workEndDate[$i],
                'description' => $workDescription[$i],
            ]);

            $newExperience->id = Str::uuid()->toString(); // Generate UUID
            $newExperience->resume_id = $resume->id;
            $newExperience->save();
        }
    }
    }
}

}
    $resume->updated_at = now();
    $resume->save();
    return redirect(route('preview', $resume->slug));

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume, $slug)
    {
        $resume = Resume::where('slug', $slug)->first();
        $resume->delete();
        return redirect(route('index', auth()->user()->id));
    }

    public function download($slug){
        $resume = Resume::where('slug', $slug)->first();
        
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('invoice', ['resume' => $resume]);
        return $pdf->download('invoice-'.Carbon::now()->timestamp.'.pdf');
    }
}

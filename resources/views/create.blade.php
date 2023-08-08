<x-layout>
@section('title', 'Create Resume')
<x-navbar />

<!-- component -->
<div class="p-5 m-0">
<form method="post" action="{{url($resume->slug.'/update')}}">
        @csrf @method('put')
<a href="{{route('index', auth()->user()->id)}}" class="md:p-7 p-2 text-xs text-gray-500"><i class="fa fa-arrow-left">&nbsp;&nbsp;</i>Back to Dashboard</a>
<button type="submit" class="text-sm hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-slate-200  
        bg-slate-100 
        float-right
        md:mr-16 mr-4
        text-slate-700 
        border duration-200 ease-in-out 
        border-slate-600 transition
        font-light"><i class="far fa-save mr-1 mt-[3px]"></i><span class="font-bold">Save</span></button>    
<div class="mx-4 p-4">
        <div class="step-bar">
          <div class="step-line" id="step_line"></div>
          <div class="step step-active" data-title="Personal"></div>
          <div class="step" data-title="Social"></div>
          <div class="step" data-title="Education"></div>
          <div class="step" data-title="Experiences"></div>
        </div>
    <div class="mt-8 p-4">
        <div class="form-step form-step-active">
        <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> First Name</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="first_name" name="first_name" value="{{auth()->user()->first_name}}" placeholder="Your first name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Last Name</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="last_name" name="last_name" value="{{auth()->user()->last_name}}" placeholder="Your last name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Profile Title</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="title" name="title" placeholder="Senior Data Analyst" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Profile Summary</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                    <textarea class="w-full p-2" rows="4" cols="60"  name="summary" placeholder="Describe your profile here..."></textarea>
                </div>
            </div>
      </div>
      <div class="flex p-2 mt-4">
            <!--<button class="btn-prev text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-gray-700 
        border duration-200 ease-in-out 
        border-gray-600 transition">Previous</button> -->
            <div class="flex-auto flex flex-row-reverse">
                <a class="btn btn-next text-sm  ml-2 hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-slate-600  
        bg-slate-600 
        text-slate-100 
        border duration-200 ease-in-out 
        border-slate-600 transition
        font-light">Next</a>
            </div>
        </div>
    </div>

        
        <div class="form-step">
        <form method="post" action="{{url($resume->slug.'/update2')}}">
        @csrf @method('put')
        

        <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Email</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="email" name="email" value="{{auth()->user()->email}}" placeholder="john.appleseed@example.com" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Phone Number</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="phone" name="phone" placeholder="(+60) 11-11xx-xxxx" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Linkedin URL</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="linkedin_url" name="linkedin_url" placeholder="www.linkedin.com/in/johnxxxxx" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Location</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="location" name="location" placeholder="Kuala Lumpur, Malaysia" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
            </div>
      </div>

      <div class="flex p-2 mt-4">
        <a class="btn btn-prev text-sm hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-gray-700 
        border duration-200 ease-in-out 
        border-gray-600 transition
        font-light">Previous</a>
            <div class="flex-auto flex flex-row-reverse">
                <a class="btn btn-next text-sm  ml-2 hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-slate-600  
        bg-slate-600 
        text-slate-100 
        border duration-200 ease-in-out 
        border-slate-600 transition
        font-light">Next</a>
            </div>
        </div>
      </div>


      <div class="form-step">
        <div id="education-container">
        <div class="education-entry">
        <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Institution Name</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="school_name" name="school_name[]" placeholder="Enter your institution name here." class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Institution Location</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="school_location" name="school_location[]" placeholder="Kuala Lumpur, Malaysia" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Degree</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="degree" name="degree[]" placeholder="BSc(Hons) in Computer Science" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Start Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="start_date" name="start_date[]" type="date" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> End Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="end_date" name="end_date[]" type="date" min=""  class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
            </div>
          </div>
          </div>
      </div>

      <div class="flex p-2 mt-4">
        <a class="btn btn-prev text-sm hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-gray-700 
        border duration-200 ease-in-out 
        border-gray-600 transition font-light">Previous</a>
            <div class="flex-auto flex flex-row-reverse">
                <a class="btn btn-next text-sm  ml-2 hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-slate-600  
        bg-slate-600 
        text-slate-100 
        border duration-200 ease-in-out 
        border-slate-600 transition
        font-light">Next</a>
        <a id="add-education-btn" class="text-sm hover:scale-110 ml-2 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-slate-200  
        bg-slate-100 
        text-slate-700 
        border duration-200 ease-in-out 
        border-slate-600 transition
        font-light">Add education</a>
        </div>
      </div>
</div>

      <div class="form-step">
      <div id="work-container">
        <div class="work-entry">
        <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Company Name</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="company_name" name="company_name[]" placeholder="Enter your company name here." class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Company Location</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="company_location" name="company_location[]" placeholder="Kuala Lumpur, Malaysia" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Job Title</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="job_title" name="job_title[]" placeholder="  IT Internship" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Start Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="work_start_date" name="start_date[]" type="date" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> End Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="work_end_date" name="end_date[]" type="date" min=""  class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Description</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                    <textarea class="w-full p-2" rows="4" cols="60"  placeholder="Describe what you are doing there..."></textarea>
                </div>
            </div>
          </div>
          </div>
      </div>

      <div class="flex p-2 mt-4">
        <a class="btn btn-prev text-sm hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-gray-700 
        border duration-200 ease-in-out 
        border-gray-600 transition font-light">Previous</a>
            <div class="flex-auto flex flex-row-reverse">
                
        <a id="add-experience-btn" class="text-sm hover:scale-110 ml-2 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-slate-200  
        bg-slate-100 
        text-slate-700 
        border duration-200 ease-in-out 
        border-slate-600 transition
        font-light">Add work experience</a>
            </div>
        </div>
      </div>
    </div>
</div>
    </div>
</form>

    


<style>
.step-bar{
  position:relative;
  display:flex;
  justify-content: space-between;
  counter-reset: step;
  margin: 2rem 0 4rem 0;
}

.step-bar::before,
.step-line {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 4px;
  width: 100%;
  background-color: #dcdcdc;
  z-index: -1;
}

.step-line {
  background-color: #64748b;
  width: 0%;
  transition: 0.3s;
}

@media only screen and (min-width: 768px) {
  .step-bar {
    margin-left: 50px;
    margin-right: 50px;
  }
}

.step {
  width: 2.1875rem;
  height: 2.1875rem;
  background-color: #dcdcdc;
  border-radius:50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.step::before {
  counter-increment: step;
  content: counter(step);
}

.step::after {
  content: attr(data-title);
  position: absolute;
  top: calc(100% + 0.75rem);
  font-size: 0.85rem;
  font-weight: light;
  color: #666;
}

.step-active {
  background-color: #64748b;
  color: white;
}

.step-active::after {
  content: attr(data-title);
  position: absolute;
  top: calc(100% + 0.75rem);
  font-size: 0.85rem;
  font-weight: bold;
  color: #64748b;
}

.form-step {
  display:none;
}

.form-step-active {
  display:block;
}

</style>

<script>
const prevBtn = document.querySelectorAll(".btn-prev");
const nextBtn = document.querySelectorAll(".btn-next");
const barSteps = document.querySelectorAll(".step");
const formSteps = document.querySelectorAll(".form-step");
const lineSteps = document.getElementById("step_line");

let formStepsNum = 0;

nextBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormStep();
    updateProgressBar();
  });
});

prevBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormStep();
    updateProgressBar();
  });
});

function updateFormStep(){
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
    formStep.classList.remove("form-step-active");
  });
  formSteps[formStepsNum].classList.add("form-step-active");

}

function updateProgressBar(){
  barSteps.forEach((barStep, idx) => {
    if(idx < formStepsNum + 1 ){
      barStep.classList.add("step-active");
    } else {
      barStep.classList.remove("step-active");
    }
  });


}

const progressActive=document.querySelectorAll(".step-active");

step_line.style.width = ((progressActive.length - 1) / (lineSteps.length - 1)) * 100 + "%";

function endMonth(){
  const endMonthInput = document.getElementById('end_date');
  endMonthInput.removeAttribute('disabled');
  endMonthInput.min = this.value; // Set minimum value for end month
}

document.addEventListener('DOMContentLoaded', function() {
    const startMonthInput = document.getElementById('start_date');
    const endMonthInput = document.getElementById('end_date');
    const workStartMonthInput = document.getElementById('work_start_date');
    const workEndMonthInput = document.getElementById('work_end_date');
    const educationContainer = document.getElementById('education-container');
    const workingContainer = document.getElementById('work-container');
    const addEducationButton = document.getElementById('add-education-btn');
    const addWorkingButton = document.getElementById('add-experience-btn');

    startMonthInput.addEventListener('change', function() {
        endMonthInput.removeAttribute('disabled');
        endMonthInput.min = this.value; // Set minimum value for end month
    });

    workStartMonthInput.addEventListener('change', function() {
        workEndMonthInput.removeAttribute('disabled');
        workEndMonthInput.min = this.value; // Set minimum value for end month
    });

    addEducationButton.addEventListener('click', function() {
        const educationEntry = document.createElement('div');
        educationEntry.classList.add('education-entry');
        educationEntry.innerHTML = `
        <hr class="my-4 border-2">
        <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Institution Name</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="school_name" name="school_name[]" placeholder="Enter your institution name here." class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Institution Location</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="school_location" name="school_location[]" placeholder="Kuala Lumpur, Malaysia" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Degree</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="degree" name="degree[]" placeholder="BSc(Hons) in Computer Science" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Start Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="start_date_inner" name="start_date[]"  type="date" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                       
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> End Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="end_date_inner" name="end_date[]" type="date" min="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
            </div>
            </div>
            <div class="flex p-2 mt-4">
            <div class="flex-auto flex flex-row-reverse">
                <button class="remove-btn btn btn-next text-sm  ml-2 hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-rose-700  
        bg-rose-600 
        text-rose-100 
        border duration-200 ease-in-out 
        border-rose-800 transition
        font-light">Remove</button>
            </div>
        </div>
        `;

        educationContainer.appendChild(educationEntry);
    });


    educationContainer.addEventListener('click', function(event) {
        const startDateInput = document.getElementById('start_date_inner');
        const endDateInput = document.getElementById('end_date_inner');

        if (event.target.classList.contains('remove-btn')) {
            event.target.closest('.education-entry').remove();
        }

        startDateInput.addEventListener('change', function() {
          endDateInput.removeAttribute('disabled');
          endDateInput.min = this.value; 
        });
    });


    addWorkingButton.addEventListener('click', function() {
        const workingEntry = document.createElement('div');
        workingEntry.classList.add('work-entry');
        workingEntry.innerHTML = `
        <hr class="my-4 border-2">
        <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Company Name</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="company_name" name="company_name[]" placeholder="Enter your company name here." class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Company Location</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="company_location" name="company_location[]" placeholder="Kuala Lumpur, Malaysia" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Job Title</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="job_title" name="job_title[]" placeholder="  IT Internship" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Start Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="work_start_date" name="start_date[]" type="date" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> End Period</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                        <input id="work_end_date" name="end_date[]" type="date" min="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Description</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                    <textarea class="w-full p-2" rows="4" cols="60"  placeholder="Describe what you are doing there..."></textarea>
                </div>
            </div>
          </div>
            <div class="flex p-2 mt-4">
            <div class="flex-auto flex flex-row-reverse">
                <button class="remove-btn btn btn-next text-sm  ml-2 hover:scale-110 focus:outline-none flex justify-center px-2 py-1 rounded font-bold cursor-pointer 
        hover:bg-rose-700  
        bg-rose-600 
        text-rose-100 
        border duration-200 ease-in-out 
        border-rose-800 transition
        font-light">Remove</button>
            </div>
        </div>
        `;

        workingContainer.appendChild(workingEntry);
    });


    workingContainer.addEventListener('click', function(event) {
        const startDateInput = document.getElementById('start_date_inner');
        const endDateInput = document.getElementById('end_date_inner');

        if (event.target.classList.contains('remove-btn')) {
            event.target.closest('.work-entry').remove();
        }

        startDateInput.addEventListener('change', function() {
          endDateInput.removeAttribute('disabled');
          endDateInput.min = this.value; 
        });
    });

});

</script>


</x-layout>
@if(session()->has('message'))
<div class="flex justify-center">
<div x-data="{show:true}" x-init="setTimeout(()=>show=false, 2000)" x-show="show"

    class="fixed top-2 bg-slate-800 rounded text-white px-8 py-3 opacity-50">
    <p>
        {{session('message')}}
</p>
</div>
</div>


@endif
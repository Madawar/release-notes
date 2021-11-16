 <div class="{{ $class }}">
     <div class="overflow-hidden shadow-md">
         <!-- card header -->
         <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase leading-loose">
             v.{{ $readme->semver_version }}
             <span class="float-right">{{ Carbon\Carbon::parse($readme->release_date)->format('j-M-y') }}</span>
             <br />
             <span class="text-sm text-gray-600">{{ $readme->description }}</span>
         </div>

         <!-- card body -->
         <div class="p-6 bg-white border-b border-gray-200 leading-loose">
             <!-- content goes here -->
             {!! $readme->release_notes !!}
         </div>
         <!-- card footer -->
         <div class="p-6 bg-white border-gray-200 text-right">
             <!-- button link -->
             <a class="bg-blue-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded uppercase"
                 href="{{ route('release.notify', ['id' => $readme->id]) }}">Notify Users Of Changes</a>
         </div>
     </div>
 </div>

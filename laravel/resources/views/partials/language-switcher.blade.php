<div class="dropdown">
   <a class="btn btn-primary dropdown-toggle border" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
       {{ $availableLocales[$currentLocale] }} ({{ $currentLocale }})
   </a>
   <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
   @foreach($availableLocales as $locale => $localeName)
       @if($locale !== $currentLocale)
           <li><a class="dropdown-item" href="{{ url('language/'.$locale) }}">{{ $localeName }} ({{ $locale }})</a></li>
       @endif
   @endforeach
   </ul>       
</div>  
<!-- After blade -->\

<h1> {{$heading;}} </h1>

{{-- @php    
    $test=1;
@endphp --}}
{{-- {{$test}} --}}

{{-- @if (count($listings) ==0)
    <p>no listing found</p>
@endif --}}
@unless (count($listings) == 0)

@foreach($listings as $listing)
<h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['tittle'];}}</a>
</h2>
<p>
    {{$listing['description'];}}
</p>
@endforeach  

@else
    <p>No listings found</p>
@endunless
<h1> From blade templates</h1>
<h1> header user </h1>

@if($user=='Najmul')
<h2> Hello {{$user}} </h2>
@elseif($user=='Saiful')
<h2> Hi {{$user}} </h2>
@else
<h2> Unknown user </h2>
@endif

@foreach(users as $user)
<h1> {{$user}} </h1>
@endforeach

@for($i=0; $i<10; $i++)
<h2> {{$i}} </h2>
@endfor

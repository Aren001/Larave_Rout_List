@include('headerOperators')
<hr>
<div>


<h1>OPERATORS ARRAYS  MAIN</h1>
<hr>

<!-- @if($user=='ara')

<b>HELOO {{$user}}</b>

@endif -->

<hr>
{{10+10}}

<hr>

@for($i=0;$i<=5;$i++)
<h4>{{$i}}</h4>
@endfor

<hr>

<!-- FIlen nermucuma -->
<b>@include ('innerOperators')</b> 
<br>
@foreach($user as $item)

<h3>{{$item}}</h3>

@endforeach

<!-- <script>
    var data = @json($user);
    console.log(data);
</script> -->



</div>
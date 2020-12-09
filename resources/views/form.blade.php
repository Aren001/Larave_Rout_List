<h1>FORM</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="form" method="POST" > 
    @csrf
    <input type="text" name="username" placeholder="Name" ><br>
    <span style="background-color: red;"> @error('username'){{$message}}@enderror </span><br>
    <input type="text" name="password" placeholder="Parol" ><br>
    <span style="background-color: red;"> @error('password'){{$message}}@enderror </span><br>
    <button type="submit">ENTER</button>
</form>
<hr>
<a href="/">HOME</a>
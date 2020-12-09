<h1>LOGIN</h1>
<hr>
@if(session('username'))
<h3 style="background-color: greenyellow;">{{echo session('username')}}  ADDED </h3>
@endif

<hr>
<!-- action='user' //profile-i hamar -->
<form action="sesion" method="POST" >   
    @csrf
    <input type="text" name="username" placeholder="Name" ><br><br>

    <input type="text" name="password" placeholder="Parol" ><br>

    <button type="submit">LOGIN</button>
</form>

<b><h1>ADD MEMBER</h1></b>


<form action="list" method="POST" > 
    @csrf
    <input type="text" name="name" placeholder="Name" ><br><br>
<span style="background-color: red;"> @error('name'){{$message}}@enderror </span><br>    
    <input type="text" name="email" placeholder="email" ><br><br>
<span style="background-color: red;"> @error('email'){{$message}}@enderror </span><br>
    <input type="text" name="address" placeholder="address" ><br><br>
    <span style="background-color: red;"> @error('address'){{$message}}@enderror </span><br>
  
    <button type="submit">ADD</button>
</form>



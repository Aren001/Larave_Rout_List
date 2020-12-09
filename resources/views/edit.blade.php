<b><h1>EDIT MEMBER</h1></b>


<form action="/edit" method="POST" > 
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" placeholder="Name" value="{{$data['name']}}" ><br><br>
    <span style="background-color: red;"> @error('name'){{$message}}@enderror </span><br> 
    
    <input type="text" name="email" placeholder="email" value="{{$data['email']}}"><br><br>
    <span style="background-color: red;"> @error('email'){{$message}}@enderror </span><br> 

    <input type="text" name="address" placeholder="address" value="{{$data['address']}}"><br><br>
    <span style="background-color: red;"> @error('address'){{$message}}@enderror </span><br> 
  
    <button type="submit">UPDATE</button>
</form>
<h1> HTTP REQUEST </h1>

<form action="httprequest"  method="POST">
    <!-- {{method_field("PUT")}}  -->
    {{method_field("DELETE")}}
    @csrf
    <input type="text" name="username" placeholder="Name" ><br><br>
    <input type="text" name="password" placeholder="Parol" ><br>
   
    <button type="submit">ENTER</button>
</form>
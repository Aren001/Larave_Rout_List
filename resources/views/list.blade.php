<h1>LIST</h1>

<hr>
<b><a href="/">Back to HOME</a></b>
<hr>
<h1>USER LIST</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>

    @foreach($members as $item)

    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <!-- 2 DEVNEL ashxatuma -->
        <!-- <td><a href="delete/{{$item->id}}" >DELETE</a></td>  --> 
        <td><a href={{"delete/" . $item["id"]}} >DELETE</a></td>
        <td><a href={{"edit/" . $item["id"]}} >EDIT</a></td>
      
    </tr>

    @endforeach


   

</table>


<span class="div1"><b>
        {{$members->links()}}
    </b></span>


    <style>
        .w-5{
            display: none;
            background-color: red;
            
        }
       
    </style>

<hr>
<b><a href="add">Back to Add</a></b>
<hr>

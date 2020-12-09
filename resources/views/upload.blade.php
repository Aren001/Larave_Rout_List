<h1>Upload File</h1>

<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="files"><br><br>
    <button type="submit">UPLOAD file</button>

</form>

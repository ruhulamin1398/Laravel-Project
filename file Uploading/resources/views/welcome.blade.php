
<form action="{{route('files.store')}}" method="post" enctype="multipart/form-data">
@csrf

<input type="file" name="file1" id="" required> 
<input type="submit" value="Upload">

</form>
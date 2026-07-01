<div>
    <h1>List of all images</h1>
    <a href="upload-image">Upload More Images</a>
    <br>
    <br>
    <br>
    @foreach ($images as $img)
    <img src="{{ url('storage/uploads/'.$img->path) }}" alt="" width="100">
    <br>
    <br>
    @endforeach
</div>
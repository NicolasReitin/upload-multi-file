{{-- Forms --}}

<label class="mt-2" for="filename">Fichiers à upload (.pdf, .ppt, .docx, .zip)</label>
<input type="file" class="form-control" name="filename[]" id="filename" style="width: 400px" multiple>


{{-- --------------------------------error message because file format prohibited --------------------------------}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



{{-- --------------------------------success message --------------------------------}}

    @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div> 
    @endif
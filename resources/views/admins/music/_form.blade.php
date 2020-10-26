<div class="row">
    <div class="col-md-12">

        <div class="form-group row">
            <label for="singer_id" class="col-md-3 col-form-label">Singer</label>
            <div class="col-md-9">
                <select name="singer_id" class="custom-select @error('singer_id') is-invalid @enderror">
                    @foreach($singers as $id => $name)
                        <option {{ $id == old('singer_id', $music->singer_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('singer_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="name" value="{{ old('name', $music->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="path" class="col-md-3 col-form-label">Music Path</label>
            <div class="col-md-9">
                @if($music->path)
                    <audio controls>
                        <source src="{{ asset('storage/uploads/music/'. $music->singer_id . "/" . $music->path) }}" type="audio/ogg; codecs=vorbis">
                        <source src="{{ asset('storage/uploads/music/' . $music->singer_id . "/" . $music->path) }}" type="audio/mpeg">
                    </audio><br>
                    <hr>
                    <p>Փոփոխել երաժտությունը</p>
                    <input type="file" name="path" value="{{ old('path', $music->path) }}" id="path" class=" @error('path') is-invalid @enderror">
                @else
                    <input type="file" name="path" value="{{ old('path', $music->path) }}" id="path" class=" @error('path') is-invalid @enderror">
                    @error('path')
                    <br><div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                @endif
            </div>
        </div>

        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ $music->exists ? 'Update' : 'Save' }}</button>
                <a href=" {{ route('music.index') }} " class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>

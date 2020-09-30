<div class="row">
    <div class="col-md-12">

        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Cities</label>
            <div class="col-md-9">
                <select name="city_id" class="custom-select @error('city_id') is-invalid @enderror">
                    @foreach($city as $id => $name)
                        <option {{ $id == old('city_id', $friend->city_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('city_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="name" value="{{ old('name', $friend->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="tel" class="col-md-3 col-form-label">Tel</label>
            <div class="col-md-9">
                <input type="text" name="tel" value="{{ old('tel', $friend->tel) }}" id="tel" class="form-control @error('tel') is-invalid @enderror">
                @error('tel')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" value="{{ old('email', $friend->email) }}" id="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ $friend->exists ? 'Update' : 'Save' }}</button>
                <a href=" {{ route('friends.index') }} " class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>

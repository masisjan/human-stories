<div class="row">
    <div class="col-md-12">

        <div class="form-group row">
            <label for="id" class="col-md-3 col-form-label">Id</label>
            <div class="col-md-9">
                <input type="text" name="id" value="{{ old('id', $user->id) }}" id="id" class="form-control @error('id') is-invalid @enderror">
                @error('id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="name" value="{{ old('name', $user->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" value="{{ old('email', $user->email) }}" id="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="type" class="col-md-3 col-form-label">Type</label>
            <div class="col-md-9">
                <input type="text" name="type" value="{{ old('type', $user->type) }}" id="type" class="form-control @error('type') is-invalid @enderror">
                @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ $user->exists ? 'Update' : 'Save' }}</button>
                <a href=" {{ route('users.index') }} " class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Admin</label>
            <div class="col-md-9">
                <select name="admin_id" class="custom-select @error('admin_id') is-invalid @enderror">
                    @foreach($users as $id => $name)
                        <option {{ $id == old('admin_id', $post->admin_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('admin_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Friend</label>
            <div class="col-md-9">
                <select name="friend_id" class="custom-select @error('friend_id') is-invalid @enderror">
                    @foreach($friends as $id => $name)
                        <option {{ $id == old('friend_id', $post->friend_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('friend_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="city_id" class="col-md-3 col-form-label">City</label>
            <div class="col-md-9">
                <select name="city_id" class="custom-select @error('city_id') is-invalid @enderror">
                    @foreach($cityposts as $id => $name)
                        <option {{ $id == old('city_id', $post->city_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
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
            <label for="company_id" class="col-md-3 col-form-label">Type comments</label>
            <div class="col-md-9">
                <select name="type_comment" class="custom-select @error('type_comment') is-invalid @enderror">
                    <option value="not">not</option>
                    <option value="yes">yes</option>
                </select>
                @error('type_comment')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="music_fon_id" class="col-md-3 col-form-label">Fon Music</label>
            <div class="col-md-9">
                <select name="music_fon_id" class="custom-select @error('music_fon_id') is-invalid @enderror">
                    @foreach($musics as $id => $name)
                        <option {{ $id == old('music_fon_id', $post->music_fon_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('music_fon_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="first_name" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="name" value="{{ old('name', $post->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="date" class="col-md-3 col-form-label">date</label>
            <div class="col-md-9">
                <input type="text" name="date" value="{{ old('date', $post->date) }}" id="date" class="form-control @error('date') is-invalid @enderror">
                @error('date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" value="{{ old('email', $post->email) }}" id="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-3 col-form-label">Phone</label>
            <div class="col-md-9">
                <input type="text" name="phone" value="{{ old('phone', $post->phone) }}" id="phone" class="form-control @error('phone') is-invalid @enderror">
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Address</label>
            <div class="col-md-9">
                <textarea name="address" id="address" rows="3" class="form-control @error('address') is-invalid @enderror">{{ old('address', $post->address) }}</textarea>
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Company</label>
            <div class="col-md-9">
                <select name="company_id" class="custom-select @error('company_id') is-invalid @enderror">
{{--                    @foreach($companies as $id => $name)--}}
{{--                        <option {{ $id == old('company_id', $contact->company_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>--}}
{{--                    @endforeach--}}
                </select>
                @error('company_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ $post->exists ? 'Update' : 'Save' }}</button>
                <a href=" {{ route('posts.index') }} " class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>

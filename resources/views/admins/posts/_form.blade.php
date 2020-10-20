<div class="row">
    <div class="col-md-12">

{{--        <div class="form-group row">--}}
{{--            <label for="company_id" class="col-md-3 col-form-label">Admin</label>--}}
{{--            <div class="col-md-9">--}}
{{--                <select name="admin_id" class="custom-select @error('admin_id') is-invalid @enderror">--}}
{{--                    @foreach($users as $id => $name)--}}
{{--                        <option {{ $id == old('admin_id', $post->admin_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                @error('admin_id')--}}
{{--                <div class="invalid-feedback">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}

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
                    @foreach($city as $id => $name)
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
                    @foreach($music as $id => $name)
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
            <label for="video" class="col-md-3 col-form-label">Video</label>
            <div class="col-md-9">
                <input type="text" name="video" value="{{ old('video', $post->video) }}" id="video" class="form-control @error('video') is-invalid @enderror">
                @error('video')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-3 col-form-label">Image</label>
            <div class="col-md-9">
                @if($post->image)
                    <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $post->image) }}" style="width:100px" alt=""><br>
                    <input type="hidden" name="image" value="{{ $post->image }}" id="image" class=" @error('image') is-invalid @enderror">
                @else
                    <input type="file" name="image" value="{{ old('image', $post->image) }}" id="image" class=" @error('image') is-invalid @enderror">
                    @error('image')
                    <br><div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                @endif
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
            <label for="position" class="col-md-3 col-form-label">Position</label>
            <div class="col-md-9">
                <input type="text" name="position" value="{{ old('position', $post->position) }}" id="position" class="form-control @error('position') is-invalid @enderror">
                @error('position')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="biography" class="col-md-3 col-form-label">Biography</label>
            <div class="col-md-9">
                <textarea name="biography" id="biography" rows="3" class="form-control @error('biography') is-invalid @enderror">{{ old('biography', $post->biography) }}</textarea>
                @error('biography')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="other" class="col-md-3 col-form-label">Other</label>
            <div class="col-md-9">
                <textarea name="other" id="other" rows="3" class="form-control @error('other') is-invalid @enderror">{{ old('other', $post->other) }}</textarea>
                @error('other')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="speech" class="col-md-3 col-form-label">Speech</label>
            <div class="col-md-9">
                <textarea name="speech" id="speech" rows="3" class="form-control @error('speech') is-invalid @enderror">{{ old('speech', $post->speech) }}</textarea>
                @error('speech')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="images" class="col-md-3 col-form-label">Images</label>
            <div class="col-md-9">
                @if($post->images)
                    <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $post->images) }}" style="width:100px" alt=""><br>
                    <input type="hidden" name="images" value="{{ $post->images }}" id="images" class=" @error('images') is-invalid @enderror">
                @else
                    <input type="file" multiple name="images[]" value="{{ old('images', $post->images) }}" id="images" class=" @error('images') is-invalid @enderror">
                    @error('images')
                    <br><div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="family" class="col-md-3 col-form-label">Family</label>
            <div class="col-md-9">
                <textarea name="family" id="family" rows="3" class="form-control @error('family') is-invalid @enderror">{{ old('family', $post->family) }}</textarea>
                @error('family')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="gender" class="col-md-3 col-form-label">Gender</label>
            <div class="col-md-9">
                <select name="gender" class="custom-select @error('gender') is-invalid @enderror">
                    <option value="not">Gender</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                </select>
                @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="publish" class="col-md-3 col-form-label">Publish</label>
            <div class="col-md-9">
                <select name="publish" class="custom-select @error('publish') is-invalid @enderror">
                    <option value="not">not</option>
                    <option value="yes">yes</option>
                </select>
                @error('publish')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="qr" class="col-md-3 col-form-label">Qr</label>
            <div class="col-md-9">
                <select name="qr" class="custom-select @error('qr') is-invalid @enderror">
                    <option value="not">not</option>
                    <option value="yes">yes</option>
                </select>
                @error('qr')
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

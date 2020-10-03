<div class="row">
    <div class="col-md-12">

        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Post id</label>
            <div class="col-md-9">
                <select name="post_id" class="custom-select @error('post_id') is-invalid @enderror">
                    @foreach($posts as $id => $name)
                        <option {{ $id == old('post_id', $comment->post_id) ? 'selected' : '' }} value="{{ $id }}">{{ $id }}</option>
                    @endforeach
                </select>
                @error('post_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

{{--        <div class="form-group row">--}}
{{--            <label for="company_id" class="col-md-3 col-form-label">Type comments</label>--}}
{{--            <div class="col-md-9">--}}
{{--                <select name="type_comment" class="custom-select @error('type_comment') is-invalid @enderror">--}}
{{--                    <option value="not">not</option>--}}
{{--                    <option value="yes">yes</option>--}}
{{--                </select>--}}
{{--                @error('type_comment')--}}
{{--                <div class="invalid-feedback">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="form-group row">
            <label for="comment" class="col-md-3 col-form-label">Comment</label>
            <div class="col-md-9">
                <input type="text" name="comment" value="{{ old('comment', $comment->comment) }}" id="comment" class="form-control @error('comment') is-invalid @enderror">
                @error('comment')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="name" value="{{ old('name', $comment->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
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
                <input type="text" name="email" value="{{ old('email', $comment->email) }}" id="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="tel" class="col-md-3 col-form-label">Tel</label>
            <div class="col-md-9">
                <input type="text" name="tel" value="{{ old('tel', $comment->tel) }}" id="tel" class="form-control @error('tel') is-invalid @enderror">
                @error('tel')
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

        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ $comment->exists ? 'Update' : 'Save' }}</button>
                <a href=" {{ route('comments.index') }} " class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>

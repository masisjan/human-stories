<input type="hidden" name="post_id" value="{{ $post->id }}">
<input type="hidden" name="publish" value="not">

<p>
    <input class="w3-input w3-padding-16 form-control @error('name') is-invalid @enderror" type="text"
           placeholder="Անուն" required name="name" id="name">
</p>
@error('name')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

<p>
    <input class="w3-input w3-padding-16 form-control @error('email') is-invalid @enderror" type="text"
           placeholder="Էլ. Փոստ" required name="email" id="email">
</p>
@error('email')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

<p>
    <input class="w3-input w3-padding-16 form-control @error('tel') is-invalid @enderror" type="text"
           placeholder="Հեռախոս" required name="tel" id="tel">
</p>
@error('tel')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

<p>
    <input class="w3-input w3-padding-16 form-control @error('comment') is-invalid @enderror" type="text"
           placeholder="Կարծիք" required name="comment" id="comment" >
</p>
@error('comment')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

<p>
    <button class="w3-button w3-light-grey w3-padding-large btn btn-primary" type="submit">
        <i class="fa fa-paper-plane"></i> ԹՈՂՆԵԼ ԿԱՐԾԻՔ
    </button>
</p>

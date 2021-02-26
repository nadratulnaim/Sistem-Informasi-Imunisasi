<div class="form-grup">
    <label for="judul_post">Judul</label>
    <input type="text" name="judul_post" value=" {{ old('judul_post') ?? $post->judul_post}}" id="judul_post" class="form-control">
    @error('judul_post')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>
<div class="form-grup">
    <label for="isi_post">Isi</label>
    <textarea name="isi_post" id="isi_post" class="form-control">{{ old('isi_post') ?? $post->isi_post}}</textarea>
    @error('isi_post')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>
<br>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Update'}}</button>
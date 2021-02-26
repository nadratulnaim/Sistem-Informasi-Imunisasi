<div class="form-grup">
    <label for="nama_imunisasi">Nama Imunisasi</label>
    <input type="text" name="nama_imunisasi" value=" {{ old('nama_imunisasi') ?? $imunisasi->nama_imunisasi}}" id="nama_imunisasi" class="form-control">
    @error('nama_imunisasi')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>

<br>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Update'}}</button>
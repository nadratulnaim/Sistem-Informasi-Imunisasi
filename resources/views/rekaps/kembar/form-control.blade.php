<div class="form-grup">
    <label for="nama_bayi">Nama Bayi</label>
    <input type="text" name="nama_bayi" value=" {{ old('nama_bayi') ?? $bayi->nama_bayi}}" id="nama_bayi" class="form-control">
    @error('nama_bayi')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-grup">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value=" {{ old('jenis_kelamin') ?? $bayi->jenis_kelamin}}" id="jenis_kelamin" class="form-control">
    @error('jenis_kelamin')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-grup">
    <label for="tanggal_lahir">Tanggal lahir</label>
    <input type="text" name="tanggal_lahir" value=" {{ old('tanggal_lahir') ?? $bayi->tanggal_lahir}}" id="jenis_kelamin" class="form-control">
    @error('tanggal_lahir')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-grup">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="{{ old('alamat') ?? $bayi->alamat}}" id="alamat" class="form-control">
    @error('alamat')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-grup">
    <label for="nama_orangtua">Nama Orangtua</label>
    <input type="text" name="nama_orangtua" value=" {{ old('nama_orangtua') ?? $bayi->nama_orangtua}}" id="jenis_kelamin" class="form-control">
    @error('nama_orangtua')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-grup">
    <label for="imunisasi">Imunisasi yang sudah diberikan</label>
    <select name="imunisasi[]" id="imunisasi" class="form-control" multiple>
        @foreach ($imunisasis as $imunisasi)
        <option {{ $bayi->imunisasis()->find($imunisasi) ? 'selected' : '' }} value="{{ $imunisasi->id }}">{{$imunisasi->nama_imunisasi}}</option>
        @endforeach
    </select>
    @error('imunisasi')
        <div class="mt-2 text-danger">
            {{$message}}
        </div>
    @enderror
</div>

<br>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Update'}}</button>
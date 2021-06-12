<form action="{{route('buku.store')}} " method="post">
    @csrf
    Judul: <input type="text" name="judul_buku">
    Tahun Terbit: <input type="text" name="tahun_terbit">
    <button type="submit">Simpan</button>
</form>
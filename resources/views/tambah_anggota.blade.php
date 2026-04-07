<form action="{{ route('simpan.anggota') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama Anggota" required>
    <input type="email" name="email" placeholder="Email Anggota" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Simpan Sekarang</button>
</form>
Nama:

<form action="/test/store" method="post">
    {{ csrf_field() }}
    <input type="text" name="name">

    <input type="submit" value="Simpan Data">
</form>

<form action="{{ route('insert') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>
<form action="{{ route('payment') }}" method="post">
    @csrf
    <input type="text" name="name" id=""><br>
    <input type="text" name="email" id=""><br>
    <input type="text" name="address" id=""><br>
    <input type="text" name="street" id=""><br>
    <input type="text" name="neighborhood" id=""><br>
    <button type="submit">pay</button>
</form>

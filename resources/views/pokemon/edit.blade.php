<form action="{{ url('pokemon/'.$pokemon->id.'/edit') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$pokemon->name}}">
    <input type="text" name="type" placeholder="Type" value="{{$pokemon->type}}"required>
    <input type="number" name="power" placeholder="Power" value="{{$pokemon->power}}"required> 
    <button type="submit">Create Pokemon</button>
</form>
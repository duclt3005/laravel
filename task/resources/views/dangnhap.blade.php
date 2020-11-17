@if (isset($error) )
    {{ $error}}
@endif
<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit">
</form>
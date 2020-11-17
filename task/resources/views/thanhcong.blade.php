@if(Auth::check())
<h1>Dang nhap thanh cong</h1>
@if(isset($user))
    {{$user->name}}
    {{$user->email}}
    <a href="{{url('logout')}}">Logout</a>
@endif
@else
    <h1>Bna chua dang nhap</h1>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a class="nav-link" href="{{route('siswa.index')}}">Data siswa</a>
  <a class="nav-link" href="{{ route('akun.index') }}">Data akun</a>
  <a class="nav-link" href="{{ route('pelanggaran.index') }}">Data Pelanggaran</a>
  <a href="{{route('logout')}}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
    <form id="logout-form" action="{{route('logout')}}" method="POST">
      @csrf

    </form>
    <h1>dashboard admin</h1>
    @if ($massage=Session::get('success'))
    <p>{{$massage}}</p>
    @else
    <p>you are logged in!</p>
    @endif
</body>
</html>
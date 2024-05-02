@extends('dashboard')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@section('content')
    <main class="login-form">
        <h1>Chi tiết user {{ $user->name }}</h1>
        <div class="container">
            <div class="row justify-content-center">
                <table class="table border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>MSSV</th>
                            <th>IMG</th>
                            <th>Email</th>
                            <th>Favorities</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->mssv }}</td>
                            <td><img class="border border-primary" src="{{ asset('storage/imgs/' . $user->photo) }}"
                                    alt="..." width="50" height="50"></td>
                            <td>{{ $user->email }}</td>
                            <th>{!! $user->favorities !!}</th>
                        </tr>
                    </tbody>
                </table>

                <div class="box">
                    <h1>Info</h1>
                    @if ($user->posts->isNotEmpty())
                        <table border="1">
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                            </tr>
                            <tr>
                                <td>{{ $user->profile->first_name }}</td>
                                <td>{{ $user->profile->last_name }}</td>
                            </tr>
                        </table>
                        <h2>Bài viết</h2>
                        <table border="1">
                            <tr>
                                <th>ID</th>
                                <td>Name</td>
                            </tr>
                            @foreach ($user->posts as $post)
                                <tr>
                                    <td>{{ $post->post_id }}</td>
                                    <td>{{ $post->post_name }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <h2>Sở thích</h2>
                        <table border="1">
                            <tr>
                                <th>ID</th>
                                <td>Name</td>
                                <td></td>
                            </tr>
                            @if (is_array($user->favorities) || is_object($user->favorities))
                                @foreach ($user->favorities as $favorite)
                                    <tr>
                                        <td>{{ $favorite->favorite_id }}</td>
                                        <td>{{ $favorite->favorite_name }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <td> {{ $user->favorities }}</td>
                            @endif
                        </table>
                    @else
                        <div>Không có bài viết</div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection

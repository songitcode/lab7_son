@extends('dashboard')
<link rel="stylesheet" href="/front-end/article-style.css">
<style>
</style>
@section('content_list_posts')
    <section>
        <h1>Danh sách sở thích</h1>
        <div class="box-favorite">
            <div class="chua-danh-sach">
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                    @foreach ($baiViet as $item)
                        <tr>
                            <td>{{ $item->post_id }}</td>
                            <td>{{ $item->post_name }}</td>
                            <td>{{ $item->post_description }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection

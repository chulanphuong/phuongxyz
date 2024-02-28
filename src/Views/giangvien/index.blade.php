@extends('master')

@section('title')
    danh sach giang vien
@endsection

@section('content')
<a href="/giang-vien/add" class="btn btn-info ">them</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        @foreach ($giangViens as $giangvien)
            <tr>
                <td>{{$giangvien['id']}}</td>
                <td>{{$giangvien['name']}}</td>
                <td>{{$giangvien['email']}}</td>
                <td>{{$giangvien['phone']}}</td>
                <td>
                    <a href="/giang-vien/{{$giangvien['id']}}/update" class="btn btn-warning ">Sua</a>
                    <a href="/giang-vien/{{$giangvien['id']}}/delete"
                        onclick="return confirm('co chac chan xoa khong?')"
                        class="btn btn-danger ">Xoa</a>
                </td>
            </tr>
            
        @endforeach
    </table>
@endsection
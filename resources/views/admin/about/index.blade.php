@extends('layouts.admin')
@section('content')
<div class="container">
    <a href="{{ route('admin.about.form') }}" class="btn btn-primary">Add</a>


    @if (Session::has('success'))
    <div class="alert alert-success text-center">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="mb-3"></div>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Content</th>
                <th>Created_at</th>
                <th>Update_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($data as $row)
            <tr>
                <td>{{ ($row->id) }}</td>
                <td>{{ ($row->name) }}</td>
                <td>{{ ($row->lastname) }}</td>
                <td>{{ ($row->content) }}</td>
                <td>{{ ($row->created_at) }}</td>
                <td>{{ ($row->update_at) }}</td>
                <td>
                    <a class="btn btn-warning px-1" href="">ແກ້ໄຂ</a>
                    <button type="button" class="btn btn-danger btn_remove" data_id="{{ ($row->id) }}" data_name="{{ ($row->name) }}" data-bs-toggle="modal" data-bs-target="#exampleModal">ລົບ </button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>




    <!-- Modal -->
    <form action="" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ລົບຂໍ້ມູນຫຼັງສື</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-danger text-center h3">ທ່ານຕ້ອງການລົບຂໍ້ມູຸນ ຫຼື ບໍ່ ?</div>
                        <input type="hidden" name="id" id="form_id" class="form-control">
                        <input type="text" disabled id="form_name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ຍົກເລີກ</button>
                        <button type="submit" class="btn btn-danger">ລົບ</button>
                    </div>
                </div>
            </div>
        </div>
    </form>



</div>
@endsection

@section('script')
<script>
    $('.btn_remove').click(function() {
        // get value
        let id = $(this).attr('data_id');
        let name = $(this).attr('data_name');
        // set value
        $('#form_id').val(id);
        $('#form_name').val(name);
    });
</script>
@endsection
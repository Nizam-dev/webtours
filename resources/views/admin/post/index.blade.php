@extends('admin.template.master')
@section('judul','Postingan')
@push('css')
<style>
    td .fa-solid{
        cursor: pointer;
    }
</style>
@endpush
@section('content')

<div class="card">
    <div class="card-header">
        <h5>Postingan Saya
            <a href="{{route('home.create')}}" class="btn btn-outline-primary float-right">
                Buat Postingan
            </a>
        </h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Thumnail</th>
                    <th style="width: 40px"></th>
                    <th style="width: 40px"></th>
                    <th style="width: 40px"></th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($postingan as $post)
                <tr>
                    <td>{{$post->judul}}</td>
                    <td>
                        <img src="{{asset('public/images/thumnail/'.$post->thumnail)}}"  class="img-size-32">
                    </td>
                    <td>
                        <a href="{{route('home.edit',$post->id)}}">
                            <span class="fa-solid fa-pen-to-square text-warning"></span>
                        </a>
                    </td>
                    <td>
                        <span onclick="hapus(`{{route('home.delete',$post->id)}}`)" class="fa-solid fa-trash text-danger"></span>
                    </td>
                    <td>
                        <a href="{{url('details/'.str_replace(' ', '-', $post->judul).'/'.$post->id)}}" target="_blank" rel="noopener noreferrer"><span class="fa-solid fa-eye text-success"></span></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td rowspan="5">Tidak Ada Postingan</td>
                </tr>
                @endif
                
             
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection

@push('js')
<script>
    function hapus(url) {
        Swal.fire({
            title: 'Do you want to save the changes?',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            customClass: {
                actions: 'my-actions',
                cancelButton: 'order-1 right-gap',
                confirmButton: 'order-2',
            }
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace(url)
            }
        })
    }

</script>
@endpush
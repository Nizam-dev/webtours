@extends('admin.template.master')
@section('judul','Media Sosial')
@push('css')
<style>
    td .fa-solid {
        cursor: pointer;
    }

    tr i {
        cursor: pointer;
    }
</style>
@endpush
@section('content')

<div class="card">
    <div class="card-header">
        <h5>Media Sosial
        </h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Media Sosial</th>
                    <th>Logo</th>
                    <th>Akun</th>
                    <th style="width: 40px">Edit</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Whatsapp</td>
                    <td><i class="fab fa-whatsapp text-success"></i></td>
                    <td> {{$sosial_media->whatsapp == null ? '-' : $sosial_media->whatsapp}} </td>
                    <td><i onClick="media_sosial('whatsapp','{{$sosial_media->whatsapp}}')" class="fa fa-edit text-primary"></i></td>
                </tr>

                <tr>
                    <td>Facebook</td>
                    <td><i class="fab fa-facebook-square text-primary"></i></td>
                    <td> {{$sosial_media->facebook == null ? '-' : $sosial_media->facebook}} </td>
                    <td><i onClick="media_sosial('facebook','{{$sosial_media->facebook}}')" class="fa fa-edit text-primary"></i></td>
                </tr>

                <tr>
                    <td>Instagram</td>
                    <td><i class="fab fa-instagram" style="color:#8e44ad;"></i></td>
                    <td> {{$sosial_media->instagram == null ? '-' : $sosial_media->instagram}} </td>
                    <td><i onClick="media_sosial('instagram','{{$sosial_media->instagram}}')" class="fa fa-edit text-primary"></i></td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



<div class="modal fade" id="media_sosial" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('mediasosial.post')}}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>

    </div>

</div>

@endsection

@push('js')
<script>

    function media_sosial(name,value) {

        switch (name) {
            case "whatsapp":
                nama_media = 'whatsapp'
                header = 'Whatsapp'
                break;
            case "facebook":
                nama_media = 'facebook'
                header = 'Facebook'
                break;
            case "instagram":
                nama_media = 'instagram'
                header = 'Instagram'
                break;
        
            default:
                break;
        }

        $("#media_sosial .modal-title").html(header)
        $("#media_sosial .modal-body .form-group").empty()
        $("#media_sosial .modal-body .form-group").append(`<input class="form-control" name=${nama_media} value=${value}> `)
        $("#media_sosial").modal('show')
    }

</script>
@endpush
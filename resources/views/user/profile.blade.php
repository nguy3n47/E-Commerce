@extends('frontend.layouts.master')
@section('title', 'Profile'.' || '.Auth::user()->name)
@section('main-content')
<section class="section-content">
    <div class="container">
        <div class="card mx-auto" style="max-width:900px; margin-top:20px; margin-bottom:20px;">
            <div class="card-body">
                <h4 class="card-title mb-4">Profile</h4>
                <form method="POST" enctype="multipart/form-data" action="{{route('user.update.profile', Auth::user()->id)}}">
                    @csrf
                    <div class="form-group">
                        <img id="profileImg" src="{{ Storage::url(Auth::user()->avatar)}}" class="img-sm rounded-circle border">
                        <label for="file-input">
                            <i style="font-size: 28px;" class="fas fa-camera"></i>
                        </label>
                        <input id="file-input" name="avatar" style="display: none;" type="file" />
                    </div>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Name</label>
                            <input name="name" required type="text" class="form-control" value="{{Auth::user()->name}}">
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Email</label>
                            <input name="email" required type="email" class="form-control"
                                value="{{Auth::user()->email}}">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Phone</label>
                            <input name="phone" required type="text" class="form-control"
                                value="{{Auth::user()->phone}}">
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input name="address" required type="text" class="form-control"
                                value="{{Auth::user()->address}}">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </form>
            </div> <!-- card-body.// -->
        </div>
    </div><!-- container // -->
</section>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
    $("#file-input").change(function () {
    readURL(this, 'profileImg');
    });
    function readURL(input, id) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
    $('#' + id).attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);

    }
    }
</script>
@endpush
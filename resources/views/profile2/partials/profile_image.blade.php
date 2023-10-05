

{{-- <img class="w-full md:w-4/5 z-50" src="{{ asset('/Sources') }}/hero.png" />
@if (Auth::user()->profile_image)
    <img src="{{ asset('/storage' . Auth::user()->profile_image) }}" alt="Profile Image">
@endif

<form action="/profile/image" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="profile_image" accept="image/*">
    <button type="submit">Upload Profile Image</button>
</form> --}}
<style>
    .responsive-image {
        max-width: 50%;
        height: auto;
    }
</style>

<div class="container">
    <a href="/studenteve" class="fw-bold fs-5 btn btn-primary">  <i class="fa fa-arrow-left"> </i>Back</a>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-dark">
                
                <div class="card-header">Profile Image</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-success">
                        {{ session('error') }}
                    </div>
                @endif

                    <center>
                @if (Auth::user()->profile_image)
                <div class="border border-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 200px; height: 200px; overflow: hidden;">
                    <img src="{{ url('/storage/' . Auth::user()->profile_image) }}" alt="" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                </div>

                @else
                            <!-- Display the default profile image -->
                            <div class="border border-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 200px; height: 200px; overflow: hidden;">
                                <img src="{{ asset('/Sources') }}/def.jpg" alt="Default Profile Image" style="max-width: 200px; max-height: 200px;">
                            </div>
                            
                @endif
            </center>

                    <form action="/profile/image" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="profile_image">Profile Image</label>
                            <input type="file" class="form-control-file" id="profile_image" name="profile_image" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary" alt="Upload photo">{{ __('Upload') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
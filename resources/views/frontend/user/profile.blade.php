@extends('layouts.frontend')

@section('content')
       <!-- Page Title -->
<style>
   .btn-primary .primary:disabled {
    color: #fff;
    background-color: #cfcfcf !important;
    border-color: #e0e0e0 !important;
}
</style>

        <!-- Page Content -->
        <div class="page-content pt-0 pull-up-30 protrude">
            <div class="container">
            @if(session('success'))
            <div class="mt5" style="margin-top:60px;">
            <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
            @endif
            <div class="row p-5">
     <div class="col-xl-3 col-lg-3">
     @include('frontend.user.menu')




     </div>
     <div class="col-xl-8 col-lg-8">
    <!-- My Profile Section -->
    <form method="POST" action="{{ route('user.updateProfile') }}">
    @csrf
    @method('PATCH') {{-- Use PATCH method for updating --}}
    <h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>My Profile</h4>
    <div class="row mb-5">
        <div class="form-group col-sm-12">
            <label>First Name:</label>
            <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <label>Last Name:</label>
            <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <label>Mobile Number:</label>
            <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary float-right btn-sm">Save</button>
</form>


    <!-- Email Section -->
    <form class="mt-5" method="POST" action="{{ route('user.updateEmail') }}">
    @csrf

    <h4 class="border-bottom mt-5 pb-4"><i class="ti ti-email mr-3 text-primary"></i>EMAIL</h4>
    <div class="row mb-5">
        <div class="form-group col-sm-12">
            <label>Email:</label>
            <input id="email" type="email" name="email" value="{{ $user->email }}" class="form-control">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary float-right btn-sm" id="saveButton" disabled>Save</button>
</form>

    <!-- Password Section -->
    <form method="POST" action="{{ route('user.updatePassword') }}">
    @csrf

    <h4 class="border-bottom mt-5 pb-4"><i class="ti ti-lock mr-3 text-primary"></i>PASSWORD</h4>
    @if ($errors->any())
    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row mb-5">
    <div class="form-group col-sm-12">
            <label>Current Password:</label>
            <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror">
            @error('current_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group col-sm-12">
            <label>New Password:</label>
            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror">
            @error('new_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group col-sm-12">
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror">
            @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary float-right btn-sm">Save</button>
</form>

</div>


 
            </div>
        </div>

        <!-- Section -->
    

   
   
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const emailInput = document.getElementById("email");
        const saveButton = document.getElementById("saveButton");

        // Store the initial email value
        let initialEmailValue = emailInput.value;

        // Function to check if email value has changed
        function checkEmailChange() {
            if (emailInput.value !== initialEmailValue) {
                // Email value has changed, enable the submit button
                saveButton.removeAttribute("disabled");
            } else {
                // Email value has not changed, disable the submit button
                saveButton.setAttribute("disabled", "disabled");
            }
        }

        // Check for changes when the page loads
        checkEmailChange();

        // Add an input event listener to the email input
        emailInput.addEventListener("input", checkEmailChange);
    });
</script>
@endsection
@extends('layouts.admin')

@section('title', 'Two-Factor Authentication')

@section('content')
<div class="container">
    <h1 class="mt-4">Two-Factor Authentication</h1>
    <div class="card">
        <div class="card-header">
            <h5>Verify Your Identity</h5>
        </div>
        <div class="card-body">
            <p>Please enter the verification code sent to your registered email or phone number.</p>
            <form id="two-factor-form">
                <div class="form-group">
                    <label for="verification-code">Verification Code</label>
                    <input type="text" class="form-control" id="verification-code" name="verification_code"
                        placeholder="Enter your verification code" required>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary" type="submit">Verify</button>
                </div>
                <div class="alert alert-danger mt-3" style="display: none;" id="error-message">
                    The provided code is invalid.
                </div>
            </form>
        </div>
    </div>
</div>

@section('scripts')
<script>
document.getElementById('two-factor-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Simulating a verification process
    const verificationCode = document.getElementById('verification-code').value;

    // For demonstration, let's assume the correct code is '123456'
    if (verificationCode === '123456') {
        alert('Verification successful!');
        // Redirect to dashboard or perform any other action here
    } else {
        // Show error message if the code is incorrect
        document.getElementById('error-message').style.display = 'block';
    }
});
</script>
@endsection

@endsection
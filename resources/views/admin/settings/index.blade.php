@extends('layouts.admin')

@section('title', 'Settings')

@section('content')
<div class="">

    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body shadow">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h5>Settings</h5>
                            </div>
                            <div class="">
                                <!-- Right-side notification and icons -->
                                <div class="col-auto nav-right">
                                    <button class="icon-btn">
                                        <i class="fas fa-bell"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-user-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ url('admin/settings/save') }}" method="POST">
            <!-- General Settings -->
            <h4>General Settings</h4>
            <div class="mb-3">
                <label for="siteLogo" class="form-label">Site Logo URL</label>
                <input type="text" class="form-control" id="siteLogo" name="siteLogo" required>
            </div>
            <div class="mb-3">
                <label for="contactEmail" class="form-label">Contact Email</label>
                <input type="email" class="form-control" id="contactEmail" name="contactEmail" required>
            </div>

            <!-- Payment Gateway Configuration -->
            <h4>Payment Gateway Settings</h4>
            <div class="mb-3">
                <label for="paymentGateway" class="form-label">Payment Gateway</label>
                <select class="form-control" id="paymentGateway" name="paymentGateway">
                    <option value="paypal">PayPal</option>
                    <option value="stripe">Stripe</option>
                    <option value="square">Square</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="apiKey" class="form-label">API Key</label>
                <input type="text" class="form-control" id="apiKey" name="apiKey" required>
            </div>

            <!-- Email & SMS Notifications Settings -->
            <h4>Email/SMS Notification Settings</h4>
            <div class="mb-3">
                <label for="emailNotifications" class="form-label">Enable Email Notifications</label>
                <select class="form-control" id="emailNotifications" name="emailNotifications">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="smsNotifications" class="form-label">Enable SMS Notifications</label>
                <select class="form-control" id="smsNotifications" name="smsNotifications">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <!-- Security Settings -->
            <h4>Security Settings</h4>
            <div class="mb-3">
                <label for="twoFactorAuth" class="form-label">Enable Two-Factor Authentication (2FA)</label>
                <select class="form-control" id="twoFactorAuth" name="twoFactorAuth">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <!-- Save Button -->
            <button type="submit" class="btn btn-success">Save Settings</button>
        </form>
    </div>
</div>
@endsection
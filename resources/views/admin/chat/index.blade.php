@extends('layouts.admin')

@section('title', 'Live Chat')

@section('content')
<div class="container">
    <h1 class="mt-4">Live Chat</h1>
    <div class="card">
        <div class="card-header">
            <h5>Chat with Us</h5>
        </div>
        <div class="card-body">
            <div class="chat-box" id="chat-box"
                style="height: 400px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;">
                <!-- Messages will be appended here -->
                <div class="message">
                    <strong>User:</strong>
                    <span>Hello, I need help with my booking.</span>
                </div>
                <div class="message">
                    <strong>Support:</strong>
                    <span>Sure! What seems to be the problem?</span>
                </div>
            </div>
            <form id="chat-form" class="mt-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type your message here..." id="message-input"
                        required>
                    <button class="btn btn-primary" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('scripts')
<script>
document.getElementById('chat-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const input = document.getElementById('message-input');
    const message = input.value;

    // Append the new message to the chat box
    const chatBox = document.getElementById('chat-box');
    const newMessage = document.createElement('div');
    newMessage.classList.add('message');
    newMessage.innerHTML = `<strong>You:</strong> <span>${message}</span>`;
    chatBox.appendChild(newMessage);

    // Clear the input field
    input.value = '';

    // Scroll to the bottom of the chat box
    chatBox.scrollTop = chatBox.scrollHeight;
});
</script>
@endsection

@endsection
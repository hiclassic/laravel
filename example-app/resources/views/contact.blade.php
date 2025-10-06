@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Contact Us</h2>
            <p>If you have any questions, suggestions, or just want to say hello — feel free to reach out using the form below. We’d love to hear from you!</p>

            <form action="{{ route('contact.submit') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-3">
                    <label for="name">Your Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" required placeholder="John Doe">
                </div>

                <div class="mb-3">
                    <label for="email">Email Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="you@example.com">
                </div>

                <div class="mb-3">
                    <label for="message">Your Message <span class="text-danger">*</span></label>
                    <textarea name="message" id="message" class="form-control" rows="5" required placeholder="Write your message here..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

            <h4 class="mt-5">Other Ways to Reach Us</h4>
            <ul>
                <li><strong>Email:</strong> contact@myblog.com</li>
                <li><strong>Twitter:</strong> <a href="https://twitter.com/yourprofile" target="_blank">@myblog</a></li>
                <li><strong>Facebook:</strong> <a href="https://facebook.com/yourpage" target="_blank">MyBlog Page</a></li>
            </ul>
        </div>
    </div>
@endsection

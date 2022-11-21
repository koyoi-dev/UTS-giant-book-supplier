@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-5 me-auto">
                <h2 class="fw-bold display-4">Contact Us</h2>
                <p class="mb-5 text-muted lh-lg">If you have any questions or queries a member of staff will always be
                    happy to help. Feel free to contact us by telephone or email, and we will be sure to get back to you
                    as soon as possible.</p>
                <ul class="list-unstyled pl-md-5 mb-5 lh-lg">
                    <li class="d-flex text-black mb-2">
                        <span class="me-3"><i data-feather="map"></i></span> {{ $data["address"]["street"] }}<br>
                        {{ $data["address"]["details"] }} <br>
                        {{ $data["address"]["city"] }}, {{ $data["address"]["province"] }} <br>
                        {{ $data["address"]["country"] }}
                    </li>
                    <li class="d-flex text-black mb-2"><span class="me-3"><i
                                data-feather="phone"></i></span> {{ $data["phone"] }}
                    </li>
                    <li class="d-flex text-black mb-2"><span class="me-3"><i
                                data-feather="mail"></i></span>{{ $data["email"] }}</li>
                    <li class="d-flex text-black"><span class="me-3"><i
                                data-feather="clock"></i></span>{{ $data["openHours"] }}</li>
                </ul>
            </div>
            <div class="col-md-6">
                <form class="mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary py-2 px-4">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection

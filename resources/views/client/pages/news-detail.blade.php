@extends('client.layout.main')

@section('content-client')
    <section class="cover-background one-fifth-screen bg-dark-gray ipad-top-space-margin d-flex align-items-center"
        style="background-image: url({{ asset('storage/assets/attach/' . $data->landscape) }})">
        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 position-relative"
                    data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;translateY&quot;:[30,0],&quot;opacity&quot;:[0,1],&quot;duration&quot;:600,&quot;delay&quot;:0,&quot;staggervalue&quot;:300,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
                    <div class="d-inline-block mb-20px">
                        <span class="text-white fs-18 opacity-6">
                            <span class="text-white">{{ timesInd($data->created_at) }}</span>
                            <span class="d-inline-block fs-24 opacity-5 align-middle ms-15px me-15px">&bull;</span>
                        </span>
                    </div>

                    <h1
                        class="text-white w-60 lg-w-80 md-w-70 sm-w-100 alt-font fw-700 ls-minus-2px text-shadow-double-large mb-0">
                        {{ $data->name }}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-4">
        <div class="container">
            <div class="row justify-content-center"
                data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;translateY&quot;:[50,0],&quot;opacity&quot;:[0,1],&quot;duration&quot;:1200,&quot;delay&quot;:0,&quot;staggervalue&quot;:150,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
                <div class="text-center mb-2">
                    <img src="{{ asset('storage/assets/attach/' . $data->potrait) }}" width="500" alt="">
                </div>
                <div class="col-lg-10 last-paragraph-no-margin">
                    {!! $data->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container"
            data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mb-2">
                    <h6 class="alt-font text-dark-gray fw-500">{{ $data->comments->count() }} Komentar</h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <ul class="blog-comment">
                        @foreach ($data->comments->where('parent_id', null) as $comment)
                            <li>
                                <div class="d-block w-100 align-items-center align-items-md-start ">
                                    <a href="#" class="text-dark-gray fw-500">{{ $comment->user }}</a>
                                    <a href="#comments" class="btn-reply text-uppercase section-link reply-button"
                                        data-toggle="reply-form-{{ $comment->id }}">Balas</a>
                                    <div class="fs-14 lh-24 mb-10px">{{ $comment->created_at->format('d M Y') }}
                                    </div>
                                    <p class="w-85 sm-w-100">{{ $comment->comment }}</p>
                                </div>
                                <!-- Form for replying to a comment -->
                                <form action="{{ route('comments.reply', $comment->id) }}" method="POST" class="reply-form"
                                    id="reply-form-{{ $comment->id }}" style="display: none; margin-left: 20px;">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input class="input-name border-radius-4px form-control required" type="text"
                                            name="user" placeholder="Nama Anda">
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea name="comment" class="form-control" rows="2" placeholder="Balas"></textarea>
                                        <input type="hidden" name="news_id" value="{{ $data->id }}">
                                    </div>
                                    <button type="submit" class="btn btn-secondary rounded btn-sm">Submit</button>
                                </form>

                                <!-- Display replies -->
                                <ul class="child-comment">
                                    @foreach ($comment->replies as $reply)
                                        <li>
                                            <div class="d-block w-100 align-items-center align-items-md-start "
                                                style="margin-left: 20px; padding-left: 10px; border-left: 2px solid #ddd;">
                                                <a href="#" class="text-dark-gray fw-500">{{ $reply->user }}</a>
                                                <div class="fs-14 lh-24 mb-10px">
                                                    {{ $reply->created_at->format('d M Y') }}</div>
                                                <p class="w-85 sm-w-100">{{ $reply->comment }}</p>
                                            </div>

                                            <!-- Form for replying to a reply -->

                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="comments">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-3 sm-mb-6">
                    <h6 class="alt-font text-dark-gray fw-500 mb-5px">Tulis Komentar Anda</h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <form action="{{ route('comments.store') }}" method="POST" class="row contact-form-style-02">
                        @csrf
                        <div class="col-md-12 mb-30px">
                            <input class="input-name border-radius-4px form-control required" type="text" name="user"
                                placeholder="Nama Anda">
                        </div>

                        <div class="col-md-12 mb-30px">
                            <textarea class="border-radius-4px form-control" cols="40" rows="4" name="comment"
                                placeholder="Komentar Anda"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="news_id" value="{{ $data->id }}">
                            <button class="btn btn-dark-gray btn-small btn-round-edge" type="submit">Kirim</button>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.reply-button').forEach(button => {
            button.addEventListener('click', function() {
                const replyForm = document.getElementById(this.dataset.toggle);
                if (replyForm.style.display === "none") {
                    replyForm.style.display = "block";
                } else {
                    replyForm.style.display = "none";
                }
            });
        });
    </script>
@endsection

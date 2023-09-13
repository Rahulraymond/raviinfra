@extends('layouts.main')
@section('title', 'Vijayapura | Progress')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .home-demo .item {
            background: #ff3f4d;
        }

        .home-demo h2 {
            color: #FFF;
            text-align: center;
            padding: 5rem 0;
            margin: 0;
            font-style: italic;
            font-weight: 300;
        }

        .owl-item>div {
            cursor: pointer;
            margin: 6% 8%;
            transition: margin 0.4s ease;
        }

        .owl-item.center>div {
            cursor: auto;
            margin: 0;
        }

        .owl-item:not(.center)>div:hover {
            opacity: .75;
        }
    </style>
@endpush
@section('content')
    <section class="page-title page-title-layout5 bg-overlay bg-parallax text-center" id="progress">
        <div class="bg-img"><img
                src="https://ushpl.in/vijayapura/assets/img/VijayapuraProgress-Banner.png"
                alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 class="pagetitle__heading mb-0">Passage towards<br /><strong>SUCCESS</strong></h1>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->


    <section class="progress-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <span class="heading__subtitle">Project Progress</span>
                        <h2 class="heading__title p-title">Vijayapura-Sankeshwar section</h2>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <div class="year-select">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <form action="#progress" method="get">
                                <select onchange="this.form.submit()" name="year" class="form-control">
                                    <option value="">--Select Year--</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year }}"
                                            {{ $year == request('year') ? 'selected' : '' }}>
                                            {{ $year }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion myProgress" id="accordionExample">
                @php
                    $image_mimes_array = ['jpeg', 'jpg', 'png', 'gif'];
                    $video_mimes_array = ['mp4', '3gp', 'mov', 'wmv', 'mov'];
                @endphp
                @foreach ($responses as $months)
                    @foreach ($months as $key => $month)
                        <div class="card" id="progress">
                            <div class={{ $loop->first ? 'card-header' : 'card-header collapsed' }} data-toggle="collapse"
                                data-target="#m{{ $key }}" aria-expanded="{{ $loop->first ? true : false }}">
                                <span class="title">{{ $key }}</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="m{{ $key }}" class={{ $loop->first ? 'collapse show' : 'collapse' }}
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    @foreach ($month as $key => $week)
                                        <div class="weekly-section container">

                                            <h4 class="week-title ">{{ $key }}</h4>
                                            <div class="owl-carousel owl-theme">
                                                @if (is_array($week))
                                                    @foreach ($week as $image => $images)
                                                        @if (is_array($images))
                                                            @foreach ($images as $media_path => $caption)
                                                                @php
                                                                    $data = explode('.', $media_path);
                                                                @endphp
                                                                <div>
                                                                    @if (in_array($data[1], $image_mimes_array))
                                                                        <img title="Image/Photo"
                                                                            class="caption_image img-fluid"
                                                                            data-id="{{ $caption }}"
                                                                            style="width:320px;height:217px;"
                                                                            data-image="{{ \Storage::url($media_path) }}"
                                                                            src="{{ \Storage::url($media_path) }}" />
                                                                    @elseif (in_array($data[1], $video_mimes_array))
                                                                        <video class="caption_video" onclick="this. play()"
                                                                            style="width:320px;height:217px;" controls
                                                                            data-id="{{ $caption }}"
                                                                            data-video="{{ \Storage::url($media_path) }}"
                                                                            title="Video">
                                                                            <source src="{{ \Storage::url($media_path) }}"
                                                                                type="video/mp4">
                                                                            <source src="{{ \Storage::url($media_path) }}"
                                                                                type="video/ogg">
                                                                            Your browser does not support the video tag.
                                                                        </video>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                            @if (isset($week['desc']))
                                                <p>
                                                    <span>
                                                        <h4 class="week-title">Description of {{ $key }}</h4>
                                                    </span>{{ isset($week['desc']) ? $week['desc'] : '' }}
                                                </p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    <!-- Caption modal -->
    <div class="modal fade" id="imageCaptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h6 class="modal-title week-title">Progress With Caption</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img class="img-responsive" style="text-align: center;" id="progress_image">
                    <div id="caption_data_image"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Caption modal -->
    <div class="modal fade modal-dialog{transform:none !important;}" id="captionVideoModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h6 class="modal-title week-title">Progress With Caption</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div id="video_sampe"></div>
                    <div id="caption_data_video"></div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('sliders')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        var $owl = $('.owl-carousel');

        $owl.children().each(function(index) {
            //============ NB: .attr() instead of .data()
            $(this).attr('data-position', index);
        });

        // ==========owlCarousel initializing 
        $owl.owlCarousel({
            center: true,
            items: 3,
            margin: 10,
            loop: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });

        // ============= click on item
        $(document).on('click', '.owl-item>div', function() {
            var $speed = 300; // in ms
            $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.caption_image', function() {

                // =========Stop looping when click on item of carousel.
                $('.owl-carousel').trigger('stop.owl.autoplay');

                // ============= get the data attribute id
                let caption = $(this).attr("data-id");

                // ============= get the data attribute media_path
                let media_path = $(this).attr("data-image");
                console.log(media_path);
                // ========set caption to modal
                $("#caption_data_image").text(caption);

                // ======setting the src attribute of image of modal
                $("#progress_image").attr("src", media_path);

                // =========show modal after set text to modal
                $('#imageCaptionModal').modal('show');

            });

            $(document).on('click', '.caption_video', function() {

                // =========Stop looping when click on item of carousel.
                $('.owl-carousel').trigger('stop.owl.autoplay');

                // ============= get the data attribute id
                let caption = $(this).attr("data-id");

                // ============= get the data attribute media_path
                let media_path = $(this).attr("data-video");

                // ========set caption to modal
                $("#caption_data_video").text(caption);

                // ======setting the src attribute of image of modal
                let htmlString =
                    '<video class="caption_video" controls style="width:320px;height:217px;"><source src="' +
                    media_path +
                    '" class="video_src" type="video/ogg">Your browser does not support the video tag.</video>';
                $("#video_sampe").html(htmlString);

                // =========show modal after set text to modal
                $('#captionVideoModal').modal('show');

            });
        });
    </script>
@endpush

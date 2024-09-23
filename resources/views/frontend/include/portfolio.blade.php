<!-- Portfolio -->
<section id="portfolio" class="blackish margin">
    <div class=" text-center pb-5 margin">
        <h3 class="text-header headline">Portfolio</h3>
    </div>
    <div class="container">
        <div class="container text-center margin">
            <!-- 1st Row -->
            <div class="row">
                @forelse($portfolios as $item) 
                <div class="d-flex flex-0 col-xl-4 col-lg-3 col-md-6 col-sm-8 col-12 mb-4 hover-effect">
                    <div class="card card-hover">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                             data-mdb-ripple-color="light">
                            <img src="{{asset($item->portfolio_image)}}" class="w-100 hover-zoom port-image"
                                 alt="pos-project"/>
                            <a href="">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2"></span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title mb-3 text-decoration-none">
                                {{$item->portfolio_title}}
                            </h5>
{{--                            <p>short description</p>--}}

                            <a href="{{$item->portfolio_link}}" target="_blank"
                               class="text-reset text-decoration-none">
                                <button class="btn btn-success">{{$item->portfolio_btn_text}}</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

</section>
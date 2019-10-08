@include('client.header')
<!-- content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                    @if(count($jobRequests) >0 )
                        @foreach($jobRequests as $item)
                        <div class="info-box bg-blue hover-zoom-effect " style="direction: ltr">
                            <div class="icon">

                            </div>
                            <h4>
                            Your Job Request at  {{$item->created_at}} <br> status is  <span style="color: black"> {{$item->status}}</span>
                            </h4>
                        </div>
                            @endforeach
                        @endif
                       {{--for each for all requests --}}

                            <div class="content">
                                <div class="text">  </div>
                                <div class="number"></div>
                            </div>
                        </div>
                       {{----}}
                    </div>

                </div>

          </div>
</section>


<!-- #END# content -->
@include('AdminPanel.layouts.footer')

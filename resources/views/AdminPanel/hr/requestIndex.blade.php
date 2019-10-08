@include('AdminPanel.layouts.header')
<!-- content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        @if(count($requests) > 0)
                        @foreach($requests as $item)
                        <div class="info-box bg-blue hover-zoom-effect " style="direction: ltr">
                            <div class="icon">
                            </div>
                            <p >
                                name:  {{$item->client->name}}<br>
                                email: {{$item->client->email}}<br>
                                specialization : {{$item->specialization}} <br>
                                salary : {{$item->desired_salary}}
                                {{--<button onclick="showConfirmMessage('{{ route('reject-request' , [$item->id]) }}')" class="btn btn-xs btn-danger waves-effect" data-toggle="tooltip" data-placement="top" data-original-title="reject ">--}}
                                    {{--<i class="material-icons">delete_forever</i>--}}
                                {{--</button>--}}
                                <a href="{{route('reject-request' , [$item->id]) }}" class="btn  btn-danger">
                                    reject
                                </a>

                                <a href="{{route('hr-accept-request' , [$item->id]) }}" class="btn  btn-info">
                                    accept
                                </a>
                            </p>

                        </div>
                        @endforeach
                        @endif
                        {{--for each for all requests --}}
                        {{----}}
                    </div>

                </div>

            </div>
</section>


<!-- #END# content -->
@include('AdminPanel.layouts.footer')

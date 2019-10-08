@include('AdminPanel.layouts.header')
<!-- content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="info-box bg-blue hover-zoom-effect ">
                            <div class="icon">
                                <i class="material-icons">attach_money</i>
                            </div>

                        </div>
                       {{--for each for all requests --}}
                        <div class="info-box bg-blue hover-zoom-effect ">
                            <div class="icon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="content">
                                <div class="text">عدد  الالبومات الخاصة  </div>
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

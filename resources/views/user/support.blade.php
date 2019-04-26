@extends('layouts.dash2')

@section('content')

    <!-- start with the real content -->
    <div id="real">
      <!-- start content here -->
      <div class="wrap card" id="support">
        <!-- CONTENT -->
        <section class="app-content">
          <div class="row">
            <div class="col-md-2">
              <div class="app-action-panel" id="support-action-panel">
                <div class="action-panel-toggle" data-toggle="class" data-target="#support-action-panel" data-class="open">
                  <i class="fa fa-chevron-right"></i>
                  <i class="fa fa-chevron-left"></i>
                </div><!-- .app-action-panel -->

                <div class="app-actions-list scrollable-container">

                  <div class="list-group">
                    <a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-envelope"></i>me@gmail.com</a>
                    <a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-phone"></i>1451 1251 444</a>
                    <a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-eye"></i>Mon-Fri: 8:00 - 18:00</a>
                    <a href="javascript:void(0)" class="text-color list-group-item"><i class="m-r-sm fa fa-eye"></i>Sat-Sun: 10:00 - 15:00</a>
                  </div><!-- .list-group -->

                  <hr class="m-0 m-b-md" style="border-color: #ddd;">
                  <div class="list-group">
                    <a class="list-group-item" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                      <i class="fa m-r-sm fa-edit"></i>Submit Ticket
                    </a>
                  </div><!-- .list-group -->
                </div><!-- .app-actions-list -->
              </div><!-- .app-action-panel -->
            </div><!-- END column -->

            <div class="col-md-10 ">
              <div class="panel-group accordion card" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading-1">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                      <h4 class="panel-title">What are the benefits of our service?</h4>
                      <i class="fa acc-switch"></i>
                    </a>
                  </div>
                  <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                    <div class="panel-body">
                      <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading-2">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                      <h4 class="panel-title">How much should I pay you each month?</h4>
                      <i class="fa acc-switch"></i>
                    </a>
                  </div>
                  <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                    <div class="panel-body">
                      <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading-3">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                      <h4 class="panel-title">Can I pay using PayPal?</h4>
                      <i class="fa acc-switch"></i>
                    </a>
                  </div>
                  <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
                    <div class="panel-body">
                      <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading-4">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                      <h4 class="panel-title">I Didn't Find Any Help!</h4>
                      <i class="fa acc-switch"></i>
                    </a>
                  </div>
                  <div id="collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-4">
                    <div class="panel-body">
                      <div class="col-md-8">
                        <form action="">
                          <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                          </div>
                          <div class="form-group">
                            <label for="subject">Comment</label>
                            <textarea name="comment" class="form-control" rows="4"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Reach Out">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-sm-6 ">
                  <div class="card p-md text-center _bg_white">
                    <p class="text-primary fz-lg"><i class="fa fa-file-code"></i></p>
                    <h4 class="text-primary">Clean Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, repellendus.</p>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="card p-md text-center">
                    <p class="text-primary fz-lg"><i class="fa fa-heart"></i></p>
                    <h4 class="text-primary">Made With Love</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, repellendus.</p>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="card p-md text-center">
                    <p class="text-primary fz-lg"><i class="fa fa-file"></i></p>
                    <h4 class="text-primary">Demo Pages</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, repellendus.</p>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="card p-md text-center">
                    <p class="text-primary fz-lg"><i class="fa fa-exclamation-circle"></i></p>
                    <h4 class="text-primary">Easy To Use</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, repellendus.</p>
                  </div>
                </div>
              </div>
            </div><!-- END column -->
          </div>
        </section><!-- .app-content -->
      </div><!-- .wrap -->
      <!-- end content -->
    </div>
    <!-- end the real content -->

@endsection
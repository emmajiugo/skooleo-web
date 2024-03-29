@extends('layouts.dash')

@section('content')

    <!-- start with the real content -->
    <div id="real">
      <!-- start content here -->
      <div id="invoice" class="wrap card">
      	<section class="app-content">
      		<div class="container-fluid">
      			<div class="panel panel-default">
      				<div class="panel-heading bg-white">
                        <h4 class="panel-title">
                            INVOICE #{{ $invoice->invoice_reference }}
                            {!! $invoice->status=='UNPAID' ? '<button class="btn btn-danger btn-sm">'.$invoice->status.'</button>':'<button class="btn btn-success btn-sm">'.$invoice->status.'</button>' !!}

                            <a href="{{ route('user.invoice') }}" class="btn btn-link float-right">
                                <i class="fa fa-angle-double-left"></i> Back
                            </a>
                        </h4>
      				</div>

      				<div class="panel-body">
      					<div class="row">
      						<div class="col-md-8 col-sm-12">
      							<h4 class="fw-600">{{ $school->schoolname }}</h4>
      							<span>{{ $school->schooladdress }}</span><br>
                                <span><b>School Email:</b> {{ $school->schoolemail }}</span><br>
                                <span><b>School Phone:</b> {{ $school->schoolphone }}</span>
      						</div>
      						<div class="col-md-4 col-sm-12">
      							<small class="text-right float-right">
                                    <b>Created:</b> {{ date("jS F, Y", strtotime($invoice->created_at)) }}<br>
                                </small>
                                <br>

      							<h4 class="fw-600 text-right details">Student Details:</h4>
      							<div class="clearfix">
      								<span class="pull-left"><b>Student Name:</b></span>
      								<span class="pull-right">{{ $invoice->studentname }}</span>
      							</div>
      							<div class="clearfix">
      								<span class="pull-left"><b>Student Class:</b></span>
      								<span class="pull-right">{{ $invoice->class }}</span>
      							</div>
      							<div class="clearfix">
      								<span class="pull-left"><b>Term:</b></span>
      								<span class="pull-right">{{ $invoice->term }}</span>
      							</div>
      							<div class="clearfix">
      								<span class="pull-left"><b>Session:</b></span>
      								<span class="pull-right">{{ $invoice->session }}</span>
                                </div>
                                <div class="clearfix">
                                    <span class="pull-left"><b>Fee Type:</b></span>
                                    <span class="pull-right">{{ $invoice->feetype_name }}</span>
                                </div>
      						</div>
      					</div>

      					<div class="table-responsive m-h-lg">
      						<table class="table">
                                <tr><th>#</th><th>Description</th><th>Amount</th></tr>
                                @foreach ($feesbreakdown as $item)
                                    <tr><td>#</td><td>{{ $item->description }}</td><td>&#8358;{{ $item->amount }}</td></tr>
                                @endforeach
      						</table>
      					</div>

      					<div class="row">
      						<div class="col-sm-6 col-sm-push-6">
      							<span><b>Sub-Total:</b> &#8358;{{ $feesum }}</span><br>
      							<span><b>Fee:</b> &#8358;{{ $transaction_fee }}</span><br>
                                <span><b>Grand Total:</b></span> <span class="text-primary">&#8358;{{ $feesum + $transaction_fee }}</span>
                                <br><br>
      							<div class="m-t-lg">
                                    <form action="{{ route('user.invoice.payment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="type" value="single">
                                        <input type="hidden" name="invoice_id" value="{{ $invoice->id }}">

                                        @if ($invoice->status=='UNPAID')
                                            <button type="submit" id="pay-now" class="btn btn-md btn-primary m-r-lg"><i class="fa fa-credit-card"></i> Pay Now</button>
                                            <img src="{{ asset('user_assets/img/loader1.gif') }}" class="withdraw-loader" alt="Loader">
                                        @endif
                                        <a href="{{ route('user.dashboard') }}" class="btn btn-md btn-secondary"><i class="fa fa-plus"></i> Add Another Student</a>
                                    </form>
      							</div>
      						</div>
      					</div>
      				</div><!-- .panel-body -->
      			</div>
      		</div><!-- .container-fluid -->
      	</section><!-- #dash-content -->
      </div><!-- .wrap -->
      <!-- end content -->
    </div>
    <!-- end the real content -->

@endsection

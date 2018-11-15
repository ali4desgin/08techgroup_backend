@extends("BackEnd.Layout.Dashboard.master")

@section("content")
	<h1 class="heading-text-center">{{ $customer->first_name . " " . $customer->middel_name . " " . $customer->last_name }}</h1>
	<div class="row">
		<!-- <div class="col-md-4">
			<div class="jumbotron">
			  	<div clas="">
			  	  	<h5 class="heading-text-center"><i class="fa fa-bell"></i> الاشعارات الاخيرة</h5>
					<ul class="list-group">
					     <li class="list-group-item">عملية دفع</li>
					     <li class="list-group-item">اشعار طلب سحب</li>
					     <li class="list-group-item">رسالة من مستخدم</li>

					</ul>
			  	</div>
			</div>
		</div> -->
		
		<div class="col-md-12">
			<ul class="list-group">
				@if(!empty($payments))
					
					@foreach($payments as $payment)
						<div class="row text-center">
			     			<div class="form-group">
								<li class="list-group-item">
									<div class="row">
										<div class="col-md-4"></div>
										<div class="col-md-3"></div>
										<div class="col-md-1">
											
											@if($payment['payment_type']==1)
												<span class="btn btn-danger btn-sm">خصم</span>
											@elseif($payment['payment_type']==2)
												<span class="btn btn-info btn-sm">مطلوبة للسحب</span>
											@elseif($payment['payment_type']==3)
												<span class="btn btn-warning btn-sm">شراء باقة</span>
											@else
												<span class="btn btn-success btn-sm">ارباح</span>
											@endif
											
										</div>
										<div class="col-md-2">
											<span class="gre_block">{{ $payment->payment_value }} USD</span></div>
										<div class="col-md-2">{{ $payment->created_at }}</div>
									</div>
								</li>
							</div>
						</div>
				 	@endforeach
					
					
					<div class="text-center">
						{{ $payments->links() }}
					</div>
				 @else
				 	<div class="alert alert-info text-center">
				 		<i class="fa fa-bell-slash"></i> لاتوجد اشعارات حاليا
				 	</div>
				 @endif
			</ul>
		</div>
	</div>
	
@endsection
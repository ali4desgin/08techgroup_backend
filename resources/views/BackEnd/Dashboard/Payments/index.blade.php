@extends("BackEnd.Layout.Dashboard.master")

@section("content")
	<h1 class="heading-text-center"></h1>
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
					
					
					
					<table class="table text-center table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>اسم العميل</th>
								<th>الباقة</th>
								<th>الحالة</th>
								<th>القيمة</th>
								<th>التاريخ</th>
							</tr>
						</thead>
						<tbody>
							
							@foreach($payments as $payment)
					
							<?php
								$customer = 
								\App\Customer::
								where("id",$payment['customer_id'])->first();
								$package = 
								\App\Package::
								where("id",$customer['package_id'])->first();
								
								?>
						
								<tr>
									<td>{{ $payment['id'] }}</td>
									<td><a href="{{ url('adminpanel/customer/view/'.$customer->id) }}">{{ $customer->email }}</a></td>
									<td>
										@if(!empty($package))
										<a href="{{ url('adminpanel/package/view/'.$package->id) }}">{{ $package->ar_title }}</a>
											
										@else
											لم يتم الاشتراك في اي باقة 
										
										@endif
										
									</td>
									<td>
										
										@if($payment['payment_type'] == '1')
											<a href="" class="btn btn-primary btn-sm"><i class="fa fa-remove"></i> Complete</a>
										@elseif($payment['payment_type'] =='2')
										<a href="" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> Complete</a>
										@elseif($payment['payment_type'] =='3')
										<a href="" class="btn btn-primary btn-sm"><i class="fa fa-remove"></i> Complete</a>
										@else
										<a href="" class="btn btn-primary btn-sm"><i class="fa fa-remove"></i> Complete</a>
										
										@endif
									</td>
									<td>{{ $payment['payment_value'] }} USD</td>
									<td>{{ $payment['created_at'] }}</td>
								</tr>
						 	@endforeach
						</tbody>
						</table>
					
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
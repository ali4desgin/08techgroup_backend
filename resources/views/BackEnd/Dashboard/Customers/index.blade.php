@extends("BackEnd.Layout.Dashboard.master")


@section("content")


	@if(!empty($customers))
		<h2 class="heading-text-center"><i class="fa fa-users"></i> 
				ادارة المستخدمين	
		</h2>
		
		<div class="tbl_area">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							العملاء المسجلين
							{{ $stats['cus_count'] }}
						</div>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							العملاء المسجلين
							{{ $stats['cus_count'] }}
						</div>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							العملاء المسجلين
							{{ $stats['cus_count'] }}
						</div>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							العملاء المسجلين
							{{ $stats['cus_count'] }}
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="tbl_area">
		<form method="get">
		<div class="row">
			
			<div class="col-md-6">
				
				<div class="form-group">
					<input type="text" class="form-control " 
					placeholder="ابحث في قائمة العملاء"  value="{{ $search_text }}" name="search_keyword">
				</div>
	
			</div>
			
			<div class="col-md-4">
					<div class="form-group">
						<select class="form-control" name="orderBy">
							<option>ترتيب .... حسب</option>
							<optgroup label="الارباح">
								<option>اكثر الاعضاء ارباح</option>
								<option>اقل الاعضاء ارباح</option>
						
							</optgroup>
							<optgroup label="زمني">
								<option>المسجلين حديثا </option>
								<option>المسجلين اولا</option>
							</optgroup>
							
							<optgroup label="الباقات">
								<option>الفضية</option>
								<option>الذهبية</option>
						
							</optgroup>
								
						</select>
					</div>
			</div>
			<div class="col-md-2">
				<button class="btn btn-default btn-block" type="submit">
					<i class="fa fa-search"></i> بحث
				</button>
			</div>
			
		</div>
		</form>
		
		@if(count($customers) > 0)
		<table class="table table-bordered text-center table-hover">
			<thead>
			<tr>
				<th><i class="fa fa-sort-numeric-down"></i> #</td>
				<th><i class="fa fa-user"></i> اسم المستخدم</th>
				<th><i class="fa fa-envelope"></i> البريد الاكتروني</th>
				<th><i class="fa fa-phone-square"></i> الهاتف</th>
				<th><i class="fa fa-globe-asia"></i> الدولة</th>
				<th><i class="fa fa-tags"></i> الباقة</th>
				<th><i class="fa fa-bars"></i> ادارة</th>
			</tr>
			</thead>
			<tbody>
		@foreach($customers as $customer)
			<tr>
				<td>{{ $customer->id }}</td>
				<td>{{ $customer->first_name . ' ' . $customer->middel_name . ' ' . $customer->last_name  }}</td>
				<td>{{ $customer->email }}</td>
				<td>{{ $customer->phone }}</td>
				<td>{{ $customer->country }}</td>
				<td>الفضية</td>
				<td>
					<a href="{{ url( '/adminpanel/customer/payments/' . $customer->id ) }}" class="btn btn-success btn-sm">
						<i class="fa fa-landmark"></i> سجلات الدفع
					</a>
					<a href="{{ url( '/adminpanel/customer/edit/' . $customer->id ) }}" class="btn btn-warning btn-sm">
						<i class="fa fa-user-edit"></i> تعديل
					</a>
					<a href="{{ url( '/adminpanel/customer/view/' . $customer->id ) }}" class="btn btn-info btn-sm">
						<i class="fa fa-eye"></i> عرض
					</a>
					<a href="{{ url( '/adminpanel/customer/delete/' . $customer->id ) }}" class="btn btn-danger btn-sm confirm">
						<i class="fas fa-trash"></i> حذف
					</a>
			</td>
				
			</tr>
		@endforeach
			</tbody>
		</table>
		@else
			<div class="alert alert-warning text-center"> {{ $empty_error_text }}</div>
		@endif
		</div>
		<div class="text-center">
				{{ $customers->links() }}
		</div>
	@endif
	
	
@endsection
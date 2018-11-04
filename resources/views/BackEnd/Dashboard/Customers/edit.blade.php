@extends("BackEnd.Layout.Dashboard.master")


@section("content")
	<div class="">
		<h1 class="heading-text-center"><i class="fa fa-user-edit"></i>  </h1>
		@if($pop['editcomplete'] == true)
			<div class="alert alert-success lead text-center"> <i class="fa fa-thumbs-up"></i> تم تعديل البيانات</div>
		@endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<form method="post">
			@csrf
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" value="{{ $customer->first_name }}"
						 class="form-control input-lg" name="first_name" placeholder="الاسم الاول"
						  required>
					 </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" value="{{ $customer->middel_name }}"
						 	class="form-control input-lg" name="middel_name" placeholder="الاسم الاوسط" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						<input type="text" value="{{ $customer->last_name }}"
						 class="form-control input-lg" name="last_name" placeholder=" الاسم الاخير" required>
					 </div>
					</div>
				</div>
				
		
			<div class="form-group">
				<input type="text" class="form-control input-lg" value="{{ $customer->email }}"
				 placeholder=" البريد الالكتروني" disabled >
			</div>
			
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" value="{{ $customer->phone }}"
						 	class="form-control input-lg" name="phone" required placeholder=" رقم الهاتف">
					 	</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" value="{{ $customer->country }}"
						 	class="form-control input-lg" name="country" required placeholder=" الدولة ">
					 	</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<select class="form-control input-lg" name="gender">
								<option value="male"
								@if($customer->gender=="male")
								{{ "selected" }}
								@endif
								>ذكر</option>
								<option value="female" 
								@if($customer->gender=="female")
								{{ "selected" }}
								@endif
								>انثى</option>
							</select>
						</div>
					</div>
				</div>
				
			
			<div class="form-group">
				<button class="btn btn-primary btn-block btn-lg" type="submit"><i
					 class="fa fa-save"></i> حفظ</button>
			</div>
			
		</form>
	</div>
@endsection
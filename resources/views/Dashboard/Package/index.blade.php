@extends("Layout.Dashboard.master")


@section("content")

            <div class="text-center mar-bottm15">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">انشاء باقة  جديدة</button>
            </div>
            
                
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="error">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <?php

                    if(!empty($packages)){
                    foreach( array_chunk($packages, 3) as $packags){
                        echo '<div class=\'row\'>';
                            foreach($packags as $package){
                                ?>

                            <div class="col-md-4 package">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="btm_border">
                                        {{ $package['ar_title'] }}
                                            <span class="pull-left price green">{{ $package['price'] }}$</span>
                                        
                                        </div>
                                        <div class="ltr">{{ $package['en_title'] }}</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btm_border">{{ $package['ar_note'] }}</div>
                                        <div  class="ltr">{{ $package['en_note'] }}</div>
                                    </div>
                                    <div class="panel-footer">
										<div class="form-group">
                                        <a href="{{ url('edit_package/' . $package['id']) }}"
										 class="btn btn-primary btn-sm">
										 <i class="fa fa-edit"></i> تعديل </a>
                                        <a href="{{ url('view_package/' . $package['id']) }}"
										 class="btn btn-info btn-sm">
										 <i class="fa fa-info-circle"></i> التفاصيل </a>
										 @if(!$package['has_today_profit'])
 										<a 
 										href="#" 
 										 class="addDailyProfitButtonInPackesIndexView
										 	 btn btn-success btn-sm" data-id="{{ $package['id'] }}" data-title="{{ $package['ar_title'] }}" data-price="{{ $package['price'] }}">
 										 <i class="fa fa-plus"></i>  ارباح اليوم </a>
										 @else
										 	<?php
												$profit = $package['today_profit'];
												if($profit->type=="1"){
													$mode = "%";
												}else{
													$mode = "$";
												}
													echo "<button 
															class=\"btn btn-default
														 btn-sm\">
														 	ارباح اليوم 
															".$profit->profit. $mode.  
															"</button>";
											?>
										 @endif
									</div>
									<div class="form-group">
										
                                        <a 
										href="{{ url('package_features/' . $package['id']) }}"
										 class="btn btn-warning btn-sm">
										 <i class="fa fa-bars"></i> المميزات </a>
                                        <a href="{{url('/adminpanel/package/delete/'.
										$package['id'] ) }}" 
										 class="btn btn-danger btn-sm confirm">
										 <i class="fas fa-remove"></i> حذف </a>
									</div>
                                    </div>
                                </div>
                            </div>
                                <?php
                            }

                        echo '</div>';
                    }
                    }else{
                        ?>
                            <div class="alert alert-warning text-center">لا توجد باقات حاليا بالموقع</div>

                        <?php
                    }   
                    ?>

           



            <!-- Create new Package -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> انشاء باقة جديدة</h4>
                </div>
                <form method="post" action="packages">
                    @csrf
                <div class="modal-body">
                    
                        <div class="form-group">
                            <input type="text" name="ar_title"  placeholder="العنوان بالعربي" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="ar_note"  placeholder="الوصف باللغة العربية"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="en_title" placeholder="العنوان بالانجليزي" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="en_note" placeholder="الوصف باللغة الانجليزية"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" name="price" placeholder="السعر" class="form-control"/>
                        </div>
                        
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-primary">انشاء</button>
                   
                </div>
                </form>
                </div>
            </div>
            </div>
			
			

            <!-- edit package dialy profit -->
            <div class="modal fade" id="addDailyProfitModelInPackesIndexView"   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> 
						تاريخ اليوم {{ $today }}  </h4>
                </div>
                <form method="post" action="{{ url('adminpanel/package/add_daily_profit') }}">
                    @csrf
					<input type="hidden" value="" id="package_id" name="package_id">
					<input type="hidden" value="{{ $today }}"  name="day">
                <div class="modal-body">
                    
                        <div class="form-group">
                            <input type="text" name="title" id="package_title"
							  placeholder="العنوان " class="form-control" disabled/>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="mode" id="profit_mode">
								<option value="1">نسبة</option>
								<option value="2">قيمة</option>
							</select>
                        </div>
                        <div class="form-group">
                            <input type="text" min="0" max="100" name="value" id="profit_value"
							  placeholder=" بالنسبة المئوية من قيمة الاشتراك   " class="form-control" required/>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-primary confirm">تطبيق الارباح </button>
                   
                </div>
                </form>
                </div>
            </div>
            </div>
@endsection
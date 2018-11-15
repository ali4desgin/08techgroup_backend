
<?php
$header_json = json_decode(file_get_contents("json/header.json"),true);
$footer_json = json_decode(file_get_contents("json/footer.json"),true);
// $footer_json = json_decode(file_get_contents("json/footer.json"),true);
$paypal_json = json_decode(file_get_contents("json/gateways/PayPal.json"),true);
$paypal = $paypal_json['development'];
?>
@extends("FrontEnd.Layout.Payment.master")


@section("content")
<div class="row">
                    



                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="fa fa-paypal text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">PayPal</div>
                                            <div class="stat-text">
												12.3$<p>
													<div>
					<!--PayPal Form-->
					<form action="{{ $paypal['paypal_url'] }}" method="POST">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="business" value="{{ $paypal['email'] }}">
                        <INPUT TYPE="hidden" name="charset" value="utf-8">
                        <input type="hidden" name="item_name" value="Make Payment">
                        <input type="hidden" name="item_number" value="201">
                        <input type="hidden" name="amount" value="12.3"> 
                        <input type="hidden" name="notify_url" value="{{ $paypal['notify_url'] }}" >
                        <input type="hidden" name="return" value="{{ $paypal['return_url'] }}">
                        <input type="hidden" name="cancel_return" value="{{ $paypal['cancel_url'] }}">
                        <input type="hidden" name="custom" value="">
                  		<button type="submit" class="btn btn-success 
						btn-block">checkout</button>
                      </form>
					 	<!--PayPal Form-->
											  		</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    
                    
</div>

@endsection
@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Order Detail (Your UI)</h2>


     <!-- DataTales Example -->
     <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">

          <table class="table table-bordered"  width="100%" cellspacing="0">
            <tr>
              <h5 style="color: #8B475D" class="text-center">WOW BAKERY</h5>
              <p class="text-center">Corner of 32nd,80th
                    Mandalay, Myanmar<br>Tel:09950741528</p>
            </tr>

           <thead >
                        <tr>
                            <td colspan="3">Casher : {{Auth::user()->name}}
                            {{-- <?php echo ":".$_SESSION['loginuser']['name']?> --}}</td>
                            <td colspan="3">Order Date : {{$order->orderdate=date('Y-m-d')}}{{-- <?php $d=date('Y-m-d');
                                        echo ":".$d ?> --}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">Voucher No : {{$order->voucherno}}</td>
                            <td colspan="3">Order Time : {{$order->orderdate=date('h-m-s')}}
                            </td>
                        </tr>
                    </thead>
            

            <thead>

              

              	<tr>
					<th>No</th>
			
					<th>Name</th>

					<th>Price</th>
					<th>Discount</th>
					<th>Qualtity</th>
					<th>Total</th>
				</tr>

            </thead>
                  <tbody>
                  	@php
						$i=1;
					@endphp
					@foreach($order->items as $item)

					<tr>
						<td>{{$i++}}</td>

						<td>{{$item->name}}
							

						</td>
						
						<td>{{$item->price}}</td>
						<td>{{$item->discount}}</td>
						
						<td>{{$item->pivot->qty}}</td>
						<td>
							{{$item->pivot->qty*$item->price}}
						{{-- @if($item->discount){
							{{$item->pivot->qty*$item->discount}}
						}@else
						{
							{{$item->pivot->qty*$item->price}}
						}

						@endif --}}


						</td>

						{{-- if ($row->discount) {
            $total+=($row->discount * $row->qty);
                    
            }else{
            $total+=($row->price * $row->qty);
            } --}}
					</tr>
						@endforeach
					

                    </tbody>
                           

                    <tfoot>
                      <tr>
                        <td colspan="5" class="text-right">Total</td>
						<td>{{$order->total}}</td>
                       </tr>
                  </tfoot>
                  
                  
                </table>

              </div>
            </div>
	</div>

@endsection
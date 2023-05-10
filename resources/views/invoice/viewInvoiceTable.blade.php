@extends('master.masters')
@section('con')

<div class="container jumbotron  ">
	<div class="row">
		<h2 class="text-center">Bootstrap styling for Datatable</h2>
	</div>
    
        <div class="row">
		
            <div class="col-md-12">
                     
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="80%" >
    				<thead>
						<tr>
							<th style="width:5%">Invoice</th>
							<th style="width:5%">Ref</th>
							<th style="width:15%">Customer</th>
							<th style="width:15%">Email</th>
							<th style="width:5%">cust Order Ref</th>
							<th style="width:10%">Order Date</th>
                                <th style="width:10%">Required By</th>
                                 <th style="width:15%">Delevary To</th>
								 <th style="width:5%">Order total</th>
								 <th style="width:5%">Due</th>
								 
						</tr>
					</thead>

					

					<tbody>
						@foreach($invoicesView as $invoiceView)
						<tr>
							<td>{{$invoiceView->item_code}}</td>
							<td>auto</td>
							<td>{{$invoiceView->Customer_Name}}</td>
							<td>{{$invoiceView->email}}</td>
							<td></td>
							<td>{{$invoiceView->delevary_time}}</td>
							<td>{{$invoiceView->delevary_time}}</td>
							<td>{{$invoiceView->Customer_Name}}</td>
							<td>{{$invoiceView->total_price}}</td>
              <td>{{$invoiceView->total_price}}</td>
              
                          <td>
                            <button class="btn btn-danger btn-xs"><a href="{{ route ('showInvoice', $invoiceView) }}">view<a><button>
                           
                           </td>
        
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a href="{{route('showInvoice',$invoiceView->id)}}"></a></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						
                            
                          @endforeach
                            
                            
                            
					</tbody>
				</table>

	
	</div>
	</div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading"></h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
          <div class="card">
              <div class="card-body">
                <div class="container .modal-lg mb-5 mt-3">
                  <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                      <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID:</strong></p>
                    </div>
                    <div class="col-xl-3 float-end">
                      <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                          class="fas fa-print text-primary"></i> Print</a>
                      <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                          class="far fa-file-pdf text-danger"></i> Export</a>
                    </div>
                    <hr>
                  </div>

                  <div class="container">
                    <div class="col-md-12">
                      <div class="text-center">
                        <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                        <p class="pt-0">MDBootstrap.com</p>
                      </div>

                    </div>


                    <div class="row">
                      <div class="col-xl-8">
                        <ul class="list-unstyled">
                          <li class="text-muted">To: <span style="color:#5d9fc5 ;">John Lorem</span></li>
                          <li class="text-muted">Street, City</li>
                          <li class="text-muted">State, Country</li>
                          <li class="text-muted"><i class="fas fa-phone"></i> 123-456-789</li>
                        </ul>
                      </div>
                      <div class="col-xl-4">
                        <p class="text-muted">Invoice</p>
                        <ul class="list-unstyled">
                          <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                              class="fw-bold">ID:</span>#123-456</li>
                          <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                              class="fw-bold">Creation Date: </span>Jun 23,2021</li>
                          <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                              class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                              Unpaid</span></li>
                        </ul>
                      </div>
                    </div>

                    <div class="row my-2 mx-1 justify-content-center">
                      <table class="table table-striped table-borderless">
                        <thead style="background-color:#84B0CA ;" class="text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Pro Package</td>
                            <td>4</td>
                            <td>$200</td>
                            <td>$800</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Web hosting</td>
                            <td>1</td>
                            <td>$10</td>
                            <td>$10</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Consulting</td>
                            <td>1 year</td>
                            <td>$300</td>
                            <td>$300</td>
                          </tr>
                        </tbody>

                      </table>
                    </div>
                    <div class="row">
                      <div class="col-xl-8">
                        <p class="ms-3">Add additional notes and payment information</p>

                      </div>
                      <div class="col-xl-3">
                        <ul class="list-unstyled">
                          <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>$1110</li>
                          <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>$111</li>
                        </ul>
                        <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                            style="font-size: 25px;">$1221</span></p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-xl-10">
                        <p>Thank you for your purchase</p>
                      </div>
                      <div class="col-xl-2">
                        <button type="button" class="btn btn-primary text-capitalize"
                          style="background-color:#60bdf3 ;">Pay Now</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 

@endsection
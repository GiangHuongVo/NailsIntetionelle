@extends('layout')
@section('title', 'Special Page')
@section('content')
    <div class="container-fluid col-12 d-flex bg-secondary-subtle rounded">       
        <div class="container-fluid d-flex mb-3 p-0 gap-2">
            <div class="container-fluid p-0 d-flex flex-column col-4 mb-3">
                <div class="container-fluid p-3 d-flex flex-column col-12 shadow mb-2 bg-body rounded">                   
                    <div class="col-12 p-0">
                        <img  src="assets/images/special1.jpg" class="col-12 img-fluid rounded" alt="hinhanh1"/>
                    </div>                  
                </div>
                <div class="container-fluid d-flex flex-column col-12 shadow p-3 mb-2 bg-body rounded">                    
                    <div>
                        <h3>Discount</h3>
                        <p>We do have special discounts for special occasion and groups, Please ask our representatives for more details</p>
                    </div>                                      
                </div>  
                <div class="container-fluid p-3 d-flex flex-column col-12 shadow mb-2 bg-body rounded">
                    <h3>Our professional technicians</h3>
                    <div class="col-12 p-0">
                        <img  src="assets/images/special2.jpg" class="col-12 img-fluid rounded" alt="hinhanh1"/>
                    </div>                  
                </div>
                              
            </div>
            <div class="container-fluid d-flex flex-column col-8 mb-3 p-0 ">
                <div class="container-fluid d-flex flex-column col-12 shadow p-3 mb-2 bg-body rounded">
                
                </div>               
            </div>
        </div>    
    </div>
@endsection
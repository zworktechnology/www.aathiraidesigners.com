<form autocomplete="off" method="POST" action="{{ route('measurement.store') }}" enctype="multipart/form-data">
@csrf
   <div class="card">
      <div class="card-body">
         <div class="form-group-item border-0 mb-0">
            <div class="row align-item-center">

                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="form-group">
                        <label >Measurement <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control " name="measurement" id="measurement" required>
                     </div>
                  </div>
            </div>
            <div class="text-end" style="margin-top:3%">
                           <input type="submit" class="btn btn-primary" /> </div>
         </div>
      </div>
   </div>

</form>
<div class="modal-dialog modal-dialog-centered modal-md">
   <div class="modal-content">

      <div class="modal-header border-0 pb-0">
         <div class="form-header modal-header-title text-start mb-0">
            <h6 class="mb-0">Update Attendance</h6>
         </div>
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
         </button>
      </div>
      @if ($Attendance_datas['checkin_time'] != '')
      <form autocomplete="off" method="POST"  action="{{ route('admin_attendance.admin_edit', ['attendance_id' => $Attendance_datas['attendance_id']]) }}"
                 enctype="multipart/form-data">
                @csrf
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-6 col-md-12" >
                <div class="form-group">
                   <label>Checkin-Time <span class="text-danger">*</span></label>
                   <input type="time" class="form-control"  name="checkin_time" id="checkin_time" value="{{ $Attendance_datas['checkin_time'] }}">
                </div>
             </div>
             <div class="col-lg-6 col-md-12" >
                <div class="form-group">
                   <label>Checkout-Time <span class="text-danger">*</span></label>
                   <input type="time" class="form-control" name="checkout_time" id="checkout_time" value="{{ $Attendance_datas['checkout_time'] }}">
                </div>
             </div>
        </div>
      </div>

      <div class="modal-footer">
         <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Update</button>
         <button type="button" class="btn btn-cancel btn-danger" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
      </div>
      </form>
      @endif

   </div>
</div>


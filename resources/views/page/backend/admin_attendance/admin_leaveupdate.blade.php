<div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content modal-filled bg-danger">
         <div class="modal-body">
            <div class="form-header">
               <h6 class="text-white">Update Leave</h6>
               <p class="text-white">Are you sure want to Update?</p>
            </div>
            <div class="modal-btn delete-action">
               <div class="row">
                  
                  <form autocomplete="off" method="POST" action="{{ route('admin_attendance.admin_leaveupdate', [$Attendance_datas ['id']]) }}">
                     @method('PUT')
                     @csrf

                     <div class="col-6">
                        <button type="submit" class="btn btn-primary paid-continue-btn">Yes, Leave</button>
                     </div>
                  </form>
               
                  <div class="col-6">
                     <a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
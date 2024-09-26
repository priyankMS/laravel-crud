<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
    
      </div>
      <div class="modal-body">
            <form  id="edit-form" method="post" class="mx-1 mx-md-4">
                 @csrf
                         <input type="hidden" name="_method" value="PUT" />
                
                         <input type="hidden" name="user_id" id="user_id" />
                 <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="text" name="name" id="form3Example1c"   class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                    <span class="text-danger">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </span>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="form3Example3c"   class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                    <span class="text-danger">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </span>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" name="fpassword" id="form3Example4c"  class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                     <span class="text-danger">
                        @error('fpassword')
                        {{ $message }}
                        @enderror
                    </span>
                  </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary">Save changes</button>
                </div>   
            </form>
    </div>
  </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>User List</title>
    <link href="{{ asset('vendor/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
<a href="{{route('frm')}}" class="btn btn-primary btn-lg" style="border-radius: 25px; transition: all 0.3s;">
    Add Data
</a>    <h2 class="mb-4">User List</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->password }}</td>
                    <td>
                      <a class="btn px-3 btn-sm btn-success"
                            data-toggle="modal"
                            data-name="{{ $value->name }}"
                            data-email="{{ $value->email }}"
                            data-password="{{ $value->password }}" 
                            data-id="{{ $value->id }}"
                            onclick="populateMode(this)"
                            data-target="#exampleModal">Edit</a>
                           
                        <a class="btn px-1 btn-sm btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary">
  Launch demo modal
</button> -->

<!-- Modal -->
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
      <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        
     function populateMode(button){
        const name = button.getAttribute('data-name');
        const email = button.getAttribute('data-email');
        const password = button.getAttribute('data-password');
        const id = button.getAttribute('data-id');

        document.getElementById('form3Example1c').value = name;
        document.getElementById('form3Example3c').value = email;
        document.getElementById('form3Example4c').value = password;
        document.getElementById('user_id').value = id; // Set the user ID

        // Update the form action with the user ID
      const form = document.getElementById('edit-form');
    form.action = `{{ url('/register/update') }}/${id}`;
    }
    </script>

    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    </script>
</body>
</html>

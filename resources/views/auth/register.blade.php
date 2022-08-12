<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">




<h2>Register Page</h2>

@if($errors->any())
<div>
    <div>Something went wromg</div>

    <ul>
        @foreach ($errors->all() as $error )
         <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/register" method="POST">
    @csrf
    <div>
       <label for="name">Name</label>
       <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
    </div>

    <div>
        <label for="text">text</label>
        <input type="text" id="text" name="text" value="{{ old('text') }}" >
     </div>

     <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"  >
     </div>

     <div>
        <label for="password_confirmation">password_confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation" >
     </div>
     <div>
        <button>Submit</button>
     </div>
</form>


<h2 class="text-center" style="color: #0B9050">Register</h2>


<div class="container-md card border-light shadow p-3 rounded">
    <form class="needs-validation" novalidate>
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
    <label for="first_name">First Name</label>
    <div class="valid-feedback">
        Looks good!
      </div>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="middle_name" placeholder="Middle Name">
    <label for="middle-name">Middle Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
    <label for="last_name">Last Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nida" placeholder="NIDA">
    <label for="nida">NIDA</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="phone_number" placeholder="Phone number">
    <label for="phone_number">Phone number</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="second_phone_number" placeholder="Second phone number">
    <label for="second_phone_number">Second phone number</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="email" placeholder="Email">
    <label for="email">Email</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="password" placeholder="Password">
    <label for="password">Password</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="confirm_password" placeholder="Confirm Password">
    <label for="confirm_password">Confirm Password</label>
  </div>

  <div class="mb-3">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="gender" value="1">
    <label class="form-check-label" for="male">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="gender" value="2">
    <label class="form-check-label" for="female">Female</label>
  </div>
</div>
<div class="text-center">
    <button type="button" class="btn btn-success btn-lg">Register</button>
</div>
    </form>
</div>

<form class="row g-3 needs-validation" novalidate>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">State</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



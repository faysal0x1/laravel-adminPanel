



<x-guest-layout>

    <div class="card">
        <div class="card-body">
            <div class="border p-4 rounded">
                <div class="text-center">
                    <h3 class="">Sign Up</h3>
                    <p>Already have an account? <a href="{{ route('login') }}">Sign in
                            here</a>
                    </p>
                </div>
                <div class="login-separater text-center mb-4"> <span>SIGN UP WITH EMAIL</span>
                    <hr />
                </div>
                <div class="form-body">
                        <form method="POST" action="{{ route('register') }}" class="row g-3">
                            @csrf

                        <div class="col-sm-12">
                            <label for="inputFirstName" class="form-label">Name</label>
                            <input type="email" class="form-control" id="inputFirstName" placeholder="Jhon" name="name">
                        </div>

                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="inputEmailAddress"
                                placeholder="example@user.com" name="email">
                        </div>
                        <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control border-end-0" id="inputChoosePassword"
                                    value="12345678" placeholder="Enter Password" name="password"> <a href="javascript:;"
                                    class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                            </div>
                        </div>
                         <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control border-end-0" id="inputChoosePassword"
                                    value="12345678" placeholder="Enter Password" name="password_confirmation"> <a href="javascript:;"
                                    class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">I read
                                    and agree to Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign
                                    up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-guest-layout>

<x-guest-layout>
    {{-- <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div> --}}

    <div class="authentication-reset-password d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-12 mx-auto">
                <div class="card">
                    <div class="row g-0">
                        <div class="border-end">
                            <div class="card-body">
                                <div class="p-5">
                                    <div class="text-start">
                                        <img src="{{ asset('backend/images/logo-img.png') }}" width="180"
                                            alt="">
                                    </div>
                                    <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                    <p class="text-muted">We received your reset password request. Please enter your
                                        new password!</p>
                                    <form action="{{ route('password.store') }}" method="POST">
                                        @csrf

                                        <!-- Password Reset Token -->
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                        <div class="mb-3 mt-5">
                                            <label class="form-label" value="__('Email')">Email</label>
                                            <input type="text" class="form-control" placeholder="Enter new password"
                                                name="email" value="{{ old('email', $request->email) }}" required
                                                autofocus autocomplete="username" disabled />
                                        </div>



                                        <div class="mb-3 mt-5">
                                            <label class="form-label">New Password</label>
                                            <input type="password" class="form-control" placeholder="Enter new password"
                                                name="password" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Confirm password"
                                                name="password_confirmation" />
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                            <a href="{{ route('login') }}" class="btn btn-light"><i
                                                    class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- </form> --}}
</x-guest-layout>

<div class="row g-0 flex-fill">
    <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-lg-5">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="/tabler/static/logo.png" height="36" alt=""></a>
            </div>
            <h2 class="h3 text-center mb-3">
                Login to your account
            </h2>
            
            @if (session('invalid-status'))
                <div class="alert alert-danger m-0 mb-2">
                    {{ session('invalid-status') }}
                </div>
            @endif

            <form wire:submit="authenticate"  autocomplete="off" novalidate>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="your@email.com" autocomplete="off">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            <a href="./forgot-password.html">I forgot password</a>
                        </span>
                    </label>
                    <div 
                        class="input-group input-group-flat" 
                        x-data="{
                            show_pass: false,
                        }"
                    >
                        <input wire:model="password" :type="show_pass ? 'text' : 'password'" class="form-control @error('password') is-invalid @enderror" placeholder="Your password"  autocomplete="off">
                        <span class="input-group-text ps-1">
                            <a href="#" @click="show_pass = !show_pass" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                <svg x-show="!show_pass" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                <svg x-show="show_pass" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /><path d="M3 3l18 18" /></svg>
                            </a>
                        </span>
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Remember me on this device</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100" wire:loading.delay.class="btn-loading">Sign in</button>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(/tabler/static/unsplash-abstracj.jpg)"></div>
    </div>
</div>
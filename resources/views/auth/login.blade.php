


<x-frontend.master> 
   

    <main>
        <div class="card bg-light" style="margin: 5% 35%; border-radius: 1rem;">
            <div class="text-center my-4">
                <h5 style="font-size: 30px;">LOGIN</h5>
            </div>
            <form class="mx-4 mb-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-outline-light border-info" style="width: 100%;">Sign in</button>
                </div>
            </form>

            <div class="mb-3">
                <a class="btn mb-2 mx-2 text-primary" href="">Forgot your password?</a>
                <p class="mx-3">Don't have an account yet?<a class="text-primary" href="{{ route('register') }}">Register now</a></p>
            </div>


        </div>
    </main>

 </x-frontend.master> 


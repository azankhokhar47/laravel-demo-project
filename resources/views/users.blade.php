<div class="container">
    <div class="row">
        <div class="col-4">

            <h1>ADD New User</h1>
             {{-- <ul>
            @foreach ($errors->all() as $error)
                <li>{{$errors}}</li>
            @endforeach
             </ul> --}}
            <form action="{{ route('addUser') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="username" value="{{old('username')}}" class="form-control @error('username') is-invalid  @enderror" placeholder="Enter your name">
                    <span class="text-danger">
                        @error('username')
                            {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="useremail" class="form-control @error('useremail') is-invalid  @enderror" placeholder="Enter your email">
                     <span class="text-danger">
                        @error('useremail')
                            {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="userage" class="form-control @error('userage') is-invalid  @enderror" placeholder="Enter your age">
                    <span class="text-danger">
                        @error('userage')
                            {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label class="form-label">City</label>

                    <select name="usercity" class="form-control">
                        <option value="">Select City</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Multan">Multan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Save User
                </button>

            </form>

        </div>
    </div>

</div>
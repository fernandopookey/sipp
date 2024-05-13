<div class="col-xl-12">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('updateUsers', $users->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="full_name" value="{{ old('full_name', $users->full_name) }}">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user_name" value="{{ old('user_name', $users->user_name) }}">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIP</label>
                            <input type="number" class="form-control" name="nip" value="{{ old('nip', $users->nip) }}">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email', $users->email) }}">
                        </div>
                    </div>
                    {{-- <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div> --}}
                </div>
                <div class="row justify-content-between mx-1">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('users') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

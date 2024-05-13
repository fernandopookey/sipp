<div class="col-xl-12">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('storeUsers') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="full_name">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user_name">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIP</label>
                            <input type="number" class="form-control" name="nip">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Role</label>
                            <select name="role" class="form-control">
                                <option value="SA">Super Admin</option>
                                <option value="ADMIN">Admin</option>
                                <option value="USER">Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

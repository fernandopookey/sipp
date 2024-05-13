<div class="col-xl-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('createUsers') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>NIP</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @forelse ($users as $item)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->user_name }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <div class="d-flex">
                                    <a href="{{ route('editUsers', $item->id) }}" class="btn btn-warning mx-1 btn-sm">Edit</a>
                                    <form action="{{ route('deleteUser', $item->id) }}" onclick="return confirm('Hapus Data User ?')" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mx-1 btn-sm">Delete</button>
                                    </form>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    @empty
                        <h3>No Data</h3>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

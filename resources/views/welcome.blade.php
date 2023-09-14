<x-App>
<div class="container mt-5">
        <h1 class="text-center mt-3">Data Mahasiswa</h1>
        <div class="card">
            <div class="card-body">
                <table class="table"> 
                @section('judul')
	            Tambah Mahasiswa
                @endsection
                    <thead>
                        <tr> 
                            <th>NO</th>
                            <th>NPM</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> 
                            <td>1</td>
                            <td>21312061</td>
                            <td>Dandi Setiawan</td>
                            <td>Lampung</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-App>
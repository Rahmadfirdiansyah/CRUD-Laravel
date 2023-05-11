
@extends('layout.tamplate')
        <!-- START DATA -->
@section('konten')

        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('mahasiswa/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstitem()?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>
                                <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('yakin menghapus data ini?')" action="{{ url('mahasiswa/'.$item->nim) }}" class='d-inline' method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" name="sumbit" class="btn btn-danger btn-sm">Del</button>    
                                </form>
                                
                            </td>
                        </tr>    
                        @endforeach

                    </tbody>
                </table>
               {{ $data->links() }}
          </div>
          <!-- AKHIR DATA -->
@endsection
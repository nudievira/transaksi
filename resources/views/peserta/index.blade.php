<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Data Peserta</h1>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary sm-btn float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        tambah peserta
                      </button>
                      </div>
                </div>
                
                <table class="table table-hover">
                    <tr>
                        <th>ID Peserta</th>
                        <th>Nama Sekolah</th>
                        <th>Nama Gugus</th>
                        <th>Nama Koordinator</th>
                        <th>Kontak person</th>
                    </tr>
                @foreach($data_peserta as $peserta)
                <tr>
                    <td>{{ $peserta->id_peserta }}</td>
                    <td>{{ $peserta->nama_sekolah }}</td>
                    <td>{{ $peserta->nama_gugus }}</td>
                    <td>{{ $peserta->nama_koordinator }}</td>
                    <td>{{ $peserta->kontak_person }}</td>
                </tr>
                    
                @endforeach
                </table>
        
            </div>
        </div>
        
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>


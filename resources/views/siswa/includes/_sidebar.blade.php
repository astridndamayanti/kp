    <div class="container crtr">
      <div class="row">

        <div class="col-sm-3 mt-2 mb-2">
          <div class="card cd dp-n" style="max-height: 325px;">
            <div class="card-body">
              <img
                src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/project_completed_w0oq.svg"
                alt="" class="card-img">
              <h5 class="card-title judul2">Mendatang</h5>
              <p class="card-text paragraf1">Tidak ada tugas yang perlu segera diselesaikan.</p>
              <a href="#" class="card-link float-sm-right judul2">Lihat Semua</a>
            </div>
          </div>
        </div>

        <div class="col-sm-8 offset-sm-1 crd">
          <!-- ----- -->
          @foreach($materi as $ma)
         <div>
          <div class="card mt-2 mb-2 cd">
            <div class="card-header bg-transparent">
              <h5 class="mb-0 judul2">{{ $mapel }}</h5>
              <p class="paragraf1">{{ $ma->created_at }}</p>
            </div>
            <div class="card-body">
              <p class="card-text paragraf1">{{ $ma->catatan }}
              </p>
              <a href="{{ asset('data_file') }}/{{ $ma->file }}" class="text-decoration-none text-dark" download>
                <div class="card mt-2 fl" style="max-width: 300px;">
                  <div class="row no-gutters">
                    <div class="col-sm-4 card-header text-center">
                      <i class="far fa-file-word fa-3x" style="color: #007bff;"></i>
                    </div>
                    <div class="col-sm-8">
                      <div class="card-body">
                        <p class="card-text paragraf2 text-center">{{ $ma->file }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="card-header bg-transparent"></div>
            <div class="card-body">
              <!-- collapse bagikan komentar -->
              <a class="text-decoration-none" data-toggle="collapse" href="#bagikomentar" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Bagikan komentar kelas...
              </a>
              <!-- collapse bagikan komentar -->
              <div class="collapse" id="bagikomentar">
                <form action="">
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group float-sm-right">
                    <button type="button" class="btn btn-sm btn-dark" data-toggle="collapse"
                      href="#bagikomentar">Batal</button>
                    <button type="submit" class="btn btn-sm btn-info">Posting</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card-header bg-transparent"></div>
            <div class="card-body">
              <!-- collapse lihat komentar kelas -->
              <a class="text-decoration-none" data-toggle="collapse" href="#lihatkomentar" role="button"
                aria-expanded="false" aria-controls="collapseExample">Komentar kelas</a>
              <!-- collapse lihat komentar kelas -->
              <div class="collapse" id="lihatkomentar">
                <div class="row no-gutters hd">
                  <div class="col-sm-1 mr-2 justify-content-between">
<!--                     <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=50 height=50> -->
                    <div class="btn-group float-right mt-3 option2">
                      <a class="text-dark text-decoration-none" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <button class="dropdown-item" type="button" data-toggle="collapse" href="#editkomentar"><i
                            class="fas fa-edit fa-sm"></i> Edit</button>
                        <button class="dropdown-item" type="button"><i class="far fa-trash-alt fa-sm"></i>
                          Hapus</button>
                      </div>
                    </div>
                  </div>
<!--                   <div class="col-sm-9">
                    <p class="font-weight-normal mb-0 judul2">Astrid Novika Damayanti <small
                        class="font-weight-lighter">3
                        Oktober 2019</small></p>
                    <p class="font-weight-lighter paragraf1"><small>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Placeat
                        harum ad repellat, quidem eos officia voluptate aut unde corporis dignissimos eum a
                        praesentium
                        dolores exercitationem ipsum tempore, fuga fugiat totam?</small></p>
                  </div> -->
                  <div class="col-sm-1">
                    <div class="btn-group float-right option1">
                      <a class="text-dark text-decoration-none" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-ellipsis-h fa-lg dh"></i>
                      </a>
                      <div class="dh">
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                          <button class="dropdown-item" type="button" data-toggle="collapse" href="#editkomentar"><i
                              class="fas fa-edit fa-sm"></i> Edit</button>
                          <button class="dropdown-item" type="button"><i class="far fa-trash-alt fa-sm"></i>
                            Hapus</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="editkomentar">
                  <form action="">
                    <div class="form-group">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group float-sm-right">
                      <button type="button" class="btn btn-sm btn-dark" data-toggle="collapse"
                        href="#editkomentar">Batal</button>
                      <button type="submit" class="btn btn-sm btn-info">Posting</button>
                    </div>
                  </form>
                </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
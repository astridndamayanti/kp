
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
        <!-- ----- -->
        <div class="col-sm-8 offset-sm-1 cdr">
          <div class="card mt-2 mb-2 cd">
            <div class="card-body">
              <a class="btn btn-primary" data-toggle="collapse" href="#CollapseBagiSesuatu" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Bagikan Sesuatu
              </a>
              <!-- collapse -->
              <div class="collapse" id="CollapseBagiSesuatu">
                <form action="/guruuu/{{ $m->slug }}/upload" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="mapel_id" value="{{ $mapel->id }}">
                  <input type="hidden" name="rombel_id" value="{{ $mapel->rombel_id }}">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="col-form-label col-form-label-sm" >Catatan</label>
                    <textarea name="catatan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <!-- ----------- -->
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <div class="d-flex justify-content-between">
                        <div>
                          <!-- Modal file -->
                          <a class="text-decoration-none text-dark" href="" data-toggle="modal"
                            data-target="#ModalFile">
                            <i class="fas fa-file fa-lg mr-auto"></i>
                          </a>
                          <!-- Modal file -->
                          <div class="modal fade" id="ModalFile" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Tambahkan File</h5>
                                  <button type="submit" value="upload" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="custom-file">
                                      <!-- <input type="file" name="file" class="custom-file-input" id="customFile" multiple> -->
                                      <input type="file" id="input-country" class="form-control form-control-alternative" name="file">
                                    </div>   
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-info">Tambahkan File</button>
                                </div>
                              </div>
                            </div>
                          </div>
                
                          <!-- Modal youtube-->
                          <a class="text-decoration-none text-danger" href="" data-toggle="modal"
                            data-target="#ModalYoutube"><i class="fab fa-youtube fa-lg mr-auto"></i>
                          </a>
                          <!-- Modal youtube-->
                          <div class="modal fade" id="ModalYoutube" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Sisipkan Video</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                      <div class="col">
                                        <input type="text" class="form-control input">
                                      </div>
                                      <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                      </div>
                                    </div>
                                    <span>Masukan penelusuran pada kotak di atas untuk menemukan video.</span>
                                    <div class="container">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="button" class="btn btn-info">Tambahkan</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Modal link-->
                          <a class="text-decoration-none text-dark" href="" data-toggle="modal"
                            data-target="#ModalLink"><i class="fas fa-link fa-lg mr-auto"></i>
                          </a>
                          <!-- Modal link-->
                          <div class="modal fade" id="ModalLink" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Tambahkan Link</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                      <div class="col">
                                        <input type="text" class="form-control rounded-pill input">
                                      </div>
                                      <div class="col-auto">
                                        <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="button" class="btn btn-info">Tambahkan Link</button>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div>
                          <button type="button" class="btn btn-sm btn-dark mr-auto" data-toggle="collapse"
                            href="#CollapseBagiSesuatu" role="button" aria-expanded="false"
                            aria-controls="collapseExample">Batal</button>
                          <button type="submit" value="upload" class="btn btn-sm btn-info">Posting</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- collapse -->
          </div>
          
          @foreach($materi as $ma)
         <div>
          <div class="card mt-2 mb-2 cd">
            <div class="card-header bg-transparent">
              <h5 class="mb-0 judul2">{{ $rombel }}</h5>
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
                  
                  
                <form action="/guruuu/{{ $m->slug }}/komen_materi" method="POST">
                  {{ csrf_field() }}
                  @if($materii)
                  <input type="hidden" name="materi_id" value="{{ $materii->id }}">
                  @endif
                  <div class="form-group">
                    <textarea class="form-control" name="post" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                  <!-- <div class="col-sm-1 mr-2 justify-content-between">
                    <!-- <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=50 height=50> -->
                    <div class="btn-group float-right mt-3 option2">
                      <a class="text-dark text-decoration-none" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"> -->
<!--                         <button class="dropdown-item" type="button" data-toggle="collapse" href="#editkomentar"><i
                            class="fas fa-edit fa-sm"></i> Edit</button> -->
                        <button class="dropdown-item" type="button"><i class="far fa-trash-alt fa-sm"></i>
                          Hapus</button>
                      </div>
                    </div>
                  </div>
                  
                  @foreach($komen_materi as $k)
                  <div class="col-sm-9">
                    <p class="font-weight-normal mb-0 judul2">{{ auth()->user()->name }}<small
                        class="font-weight-lighter">{{ $k->created_at }}</small></p>
                    <p class="font-weight-lighter paragraf1"><small>{{ $k->post }}</small></p>
                  </div>
                  @endforeach
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
    </div>


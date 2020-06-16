@extends('template/sidebar')
@section('menu')

<div class="main-panel">
			<div class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="card card-transparent">
							<div class="card-header">
								<h4 class="card-title text-center">
									Kirimkan Lokasi Penyebaran
								</h4>
								<p class="card-category text-center">
                                    Klik Tombol Berikut <br>
                                     <a ><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambahkan</button></a>
                                     <a href="https://news.google.com/covid19/map?hl=id&mid=/m/01vfwd&gl=ID&ceid=ID:id"><button  class="btn btn-primary">Lihat Maps</button></a>
								</p>
							</div>
							<div class="card-body">
								<div class="col-md-10 ml-auto mr-auto">
									<div class="mapcontainer">
										<div id="map-example" class="vmap" style="height: 400px"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>


            {{-- modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                  </div>
                </div>
              </div>
@endsection

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="patientModals" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="patientForm" name="patientForm" class="form-horizontal">
                    <!-- hidden method -->
                    <div class="method"> </div>
                    <input type="hidden" name="patient_id" id="patient_id">
                    <!-- hidden method -->
                            <div class="row justify-content-center ">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="name"> Tanggal Registrasi </label>
                                        <input type="text" class="form-control" id="tgl_daftar" name="tgl_daftar" value="{{ date('Y-d-m')}}"
                                              readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="squareSelect">Status Pasien</label>
                                        <select class="form-control input-square" id="status_pasien" name="status_pasien">
                                            <option value="">Pilih</option>
                                            <option value="BPJS">BPJS</option>
                                            <option value="Umum">UMUM</option>
                                            <option value="UPPTK">UPPTK</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label for="name"> NO BPJS </label>
                                        <input type="text" id="no_bpjs" class="form-control" name="no_bpjs" value=""
                                           required>
                                    </div>
                                    <div class="form-group" >
                                        <label for="name"> NORM </label>
                                        <input type="text" id="no_rekamedis" class="form-control" name="no_rekamedis" value=""
                                           >
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> NIK </label>
                                        <select class="form-control" id="no_ktp" name="no_ktp" style="width: 100%" onchange="autofill()">
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Nama </label>
                                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value=""
                                             maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                            <input type="text" class="form-control " id="alamat" name="alamat">

                                    </div>

                                </div>
                                <div class="col-md-5 ">
                                    <div class="form-group">
                                        <label>Desa</label>
                                            <input type="text" class="form-control " id="desa" name="desa">

                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control datetime" id="tanggal_lahir" name="tanggal_lahir">

                                    </div>
                                    <div class="form-check" id="jenis_kelamin">
                                        <label>Gender</label><br>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="jenis_kelamin" value="L" >
                                            <span class="form-radio-sign">Laki-Laki</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="jenis_kelamin" value="P">
                                            <span class="form-radio-sign">Prempuan</span>
                                        </label>
                                    </div>
                                    <div class="form-group ">
                                        <label for="phone"> Phone </label>
                                        <input type="text" class="form-control" id="telpon" name="telpon" value=""
                                            placeholder="Maksimal 12 karakter" maxlength="12" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Pendidikan">Pendidikan</label>
                                        <div class="select2-input">
                                            <select class="form-control select2" id="pendidikan"  name="pendidikan"
                                            class="form-control valid" aria-required="true"
                                            aria-invalid="false" style="width:100%">
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="SMA">SMA</option>
                                            <option value="Akademi">Akademi</option>
                                            <option value="Sarjana">Sarjana</option>
                                            <option value="-">Lainnya</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="provinsi">Agama</label>
                                        <div class="select2-input">
                                            <select class="form-control select2" id="agama"  name="agama"
                                            class="form-control valid" aria-required="true"
                                            aria-invalid="false" style="width:100%">

                                            <option value="-" disabled="disabled" selected="">Pilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="-">Lainnya</option>

                                        </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="squareSelect">ID RFID Read </label>
                                        <div class="row">
                                            <div class="col-9">
                                                <input id="readRFID" type="text" class="form-control form-control-sm" placeholder="" >
                                            </div>
                                            <div class="col-3">
                                                <button type="button" onclick="copy()" class="btn-sm btn-icon btn-round btn-warning">
                                                    <i class="fa fa-copy"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" name="id_card" id="id_card">
                                    <div class="form-group">
                                        <label for="squareSelect">ID KTP</label>
                                        <input class="form-control" type="text" id="ktp_id" name="ktp_id">
                                        {{-- <select class="form-control input-square" id="ktp_id" name="idktp">
                                        </select> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="squareSelect">ID KARTU</label>
                                        <input class="form-control" type="text" id="card_id" name="card_id">
                                        {{-- <select class="form-control input-square" id="card_id" name="idkartu">
                                        </select> --}}
                                    </div>

                                </div>
                            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="createBtn" value="create-user">Tambah </button>
                <button type="submit" class="btn btn-success" id="updateBtn" value="update-user">Ubah </button>
                </form>
            </div>
        </div>
    </div>
</div>

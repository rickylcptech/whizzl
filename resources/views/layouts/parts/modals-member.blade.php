<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="memberModals" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="memberForm" name="memberForm" class="form-horizontal">
                    <!-- hidden method -->
                    <div class="method"> </div>
                    <input type="hidden" name="member_id" id="member_id">
                    <!-- hidden method -->
                            <div class="row justify-content-center ">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="name"> Tanggal Registrasi </label>
                                        <input type="text" class="form-control" id="register_at" name="register_at" value="{{ date('Y-d-m')}}"
                                             required disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="squareSelect">ID Card</label>
                                        <select class="form-control input-square" id="idcard" name="idcard">
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label for="name"> NORM </label>
                                        <input type="text" id="norm" class="form-control" name="norm" value=""
                                            placeholder="Masimal 30 karakter" maxlength="10" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> NIK </label>
                                        <input type="text" class="form-control" id="nik" name="nik" value=""
                                            placeholder="Masimal 30 karakter" maxlength="10" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Nama </label>
                                        <input type="text" class="form-control" id="name" name="name" value=""
                                            placeholder="Masimal 30 karakter" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>

                                            <input type="text" class="form-control" id="pob" name="pob">

                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>

                                            <input type="text" class="form-control datetime" id="dob" name="dob">

                                    </div>
                                    {{--  <div class="form-group ">
                                        <label>Pilih jenis kelamin</label>
                                        <div class="select2-input">
                                            <select class="form-control select2" id="gender"  name="gender"
                                            class="form-control valid" aria-required="true"
                                            aria-invalid="false" style="width:100%">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>  --}}
                                    <div class="form-check">
                                        <label>Gender</label><br>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="gender" value="L" >
                                            <span class="form-radio-sign">Laki-Laki</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="gender" value="P">
                                            <span class="form-radio-sign">Prempuan</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label>Gender</label><br>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="bpjs" value="Y" >
                                            <span class="form-radio-sign">BPJS</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="bpjs" value="T">
                                            <span class="form-radio-sign">UMUM</span>
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-5 ">
                                    <div class="form-group d-flex justify-content-center">
                                        <div class="input-file input-file-image">
                                            <img class="img-upload-preview img-circle mx-auto" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                                            <input type="file" class="form-control form-control-file" id="avatar" name="avatar" accept="image/*" >
                                            <label for="avatar" class=" btn-sm label-input-file btn-primary btn-round">
                                                <span class="btn-label">
                                                    <i class="fa fa-file-image"></i>
                                                </span>
                                                Upload a Image
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="phone"> Phone </label>
                                        <input type="text" class="form-control" id="phone" name="phone" value=""
                                            placeholder="Maksimal 12 karakter" maxlength="12" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="provinsi">Agama</label>
                                        <div class="select2-input">
                                            <select class="form-control select2" id="religion"  name="religion"
                                            class="form-control valid" aria-required="true"
                                            aria-invalid="false" style="width:100%">
                                            <option value="">Pilih Agama</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="KRISTEN">KRISTEN</option>
                                            <option value="KATOLIK">KATOLIK</option>
                                            <option value="HINDU">HINDU</option>
                                            <option value="BUDHA">BUDHA</option>
                                        </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <div class="select2-input">
                                        <select class="form-control select2" id="provinsi" name="provinsi"
                                            class="form-control valid" aria-required="true"
                                            aria-invalid="false" style="width:100%">
                                            <option value="">Pilih Provinsi</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota">Kota / Kabupaten</label>
                                        <select class="form-control select2" id="kota" name="kota"
                                            class="form-control valid" aria-required="true"
                                            aria-invalid="false" style="width: 100%">
                                            <option value="">Pilih Kota</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select class="form-control select2" id="kecamatan"
                                            name="kecamatan" class="form-control" style="width: 100%">
                                            <option value="">Pilih Kecamatan
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label for="kelurahan">Kelurahan / Desa</label>
                                        <select class="form-control select2" id="kelurahan"
                                            name="kelurahan" class="form-control" style="width: 100%">
                                            <option value="">Pilih Kelurahan / Desa
                                            </option>

                                        </select>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label for="alamat">Alamat <i style="font-size: 10pt">(Nama
                                                Jalan Dan Nomor Rumah)</i></label>

                                            <div class="form-group">

                                                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                            </div>
                                    </div>
                                </div>
                            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" id="createBtn" value="create-user">Create
                    User
                </button>
                <button type="submit" class="btn btn-primary" id="updateBtn" value="update-user">Update
                    User
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

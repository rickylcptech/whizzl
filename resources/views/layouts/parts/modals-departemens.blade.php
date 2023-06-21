<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="departmentsModals" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="departmentsForm" name="departmentsForm" class="form-horizontal">
                    <!-- hidden method -->
                    <div class="method"> </div>
                    <input type="hidden" name="departments_id" id="departments_id">
                    <!-- hidden method -->
                    <div class="row justify-content-center ">
                        <div class="col-md-10">

                            <div class="form-check text-center" id="poliOrLoket">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="poliOrLoket" value="POLI" >
                                    <span class="form-radio-sign">POLI</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="poliOrLoket" value="LOKET">
                                    <span class="form-radio-sign">LOKET</span>
                                </label>
                            </div>
{{--
                            <div class="form-group">
                                <label for="name"> Name </label>
                                <input type="text" id="name" class="form-control" name="name"
                                    placeholder="Masimal 30 karakter" maxlength="20" required>
                                    <small id="emailHelp" class="form-text text-muted">Untuk Poli samakan dengan nama poli.</small>
                            </div>  --}}

                            <div id="formPoli">
                                <div class="form-group">
                                    <label for="provinsi">Poli</label>
                                    <div class="select2-input">
                                        <select class="form-control select2" id="poli_id" name="poli_id"
                                            class="form-control valid" aria-required="true" aria-invalid="false"
                                            style="width:100%">
                                            <option value="">Pilih Poli</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label for="provinsi">Dokter</label>
                                <div class="select2-input" style="width:100%">
                                    <select class="form-control select2" id="doctor_id" name="doctor_id"
                                        class="form-control valid" aria-required="true" aria-invalid="false"
                                        style="width:100%">
                                        <option value="">Pilih Nama Dokter</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                            {{-- <div class="form-group">
                                <label for="letter"> Letter </label>
                                <input type="text" class="form-control" id="letter" name="letter"
                                    placeholder="Masimal 30 karakter" maxlength="10" required>
                            </div> --}}
                            <div class="form-group">
                                <label for="start"> Start </label>
                                <input type="number" class="form-control" id="start" name="start"
                                    placeholder="Masimal 30 karakter" maxlength="30" value="0">
                            </div>
                            <div class="form-group">
                                <label for="start"> Status </label>
                                <select class="form-control" id="open" name="open">
                                    <option value="1">BUKA</option>
                                    <option value="0">TUTUP</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="createBtn" value="create-user">Tambah</button>
                <button type="submit" class="btn btn-primary" id="updateBtn" value="update-user">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="usersModals" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="userForm" name="userForm" class="form-horizontal">
                    <!-- hidden method -->
                    <div class="method"> </div>
                    <input type="hidden" name="user_id" id="user_id">
                    <!-- hidden method -->
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"> Nama </label>
                                <input type="text" class="form-control" id="name" name="name" value=""
                                    placeholder="Masimal 30 karakter" maxlength="30" required>
                            </div>
                            <div class="form-group ">
                                <label for="email"> Email </label>
                                <input type="email" class="form-control" id="email" name="email" value="" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group " id="roles">
                                <label for="roles">Roles</label>
                                <br>
                                <input type="radio" name="roles" id="ADMIN" value="ADMIN">
                                <label for="ADMIN">Administrator</label>
                                <input type="radio" name="roles" id="STAFF" value="STAFF">
                                <label for="STAFF">Staff</label>
                            </div>
                            <div id="form-departements">
                                <div class="select2-input">
                                    <small id="emailHelp2" class="form-text text-muted"> Akses Departement</small>
                                    <select class="form-control select2" id="departements" name="departements[]"
                                        multiple="multiple" class="form-control valid" aria-required="true"
                                        aria-invalid="false" style="width:100%; font-size:23;">
                                        <option disabled>Pilih Departemen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for=""> Password </label>
                                <input type="password" class="form-control" id="password" name="password" value=""
                                    placeholder="Minimal 5 karakter" maxlength="20" autocomplete="off">
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

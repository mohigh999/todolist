<div class="container text-center marg-contain">
    <div class="row">
        <div class="col-12 d-flex justify-content end">
            <a class="backoffice" href="#"><span>TEST</span></a>
        </div>
        <div class="col-12 form-style">
            <form>
                <fieldset>
                    <a class="lien-select-form lien-select-form_click" href="#repe">EDIT</a>
                    <div class="row">
                        <div class="col-xl-3 text-center">
                            <label for="nom_repe"><span>Nom</span><span class="required">*</span><br><input type="text" class="input-form input-field" name="nom_repe" id="" value=""></label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="detail_repe"><span>Detail</span><br><textarea class="input-form textarea-field" name="detail_repe" id="" ></textarea></label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="repe_jour"><span>Jour</span><span class="required">*</span><br>
                                <select name="repe_jour" id="jour">
                                </select>
                            </label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="types_repe"><span>Type</span><span class="required">*</span><br>
                                <select id="types" name="types_repe" class="input-form select-field">
                                </select>
                            </label>
                        </div>
                        <input type="hidden" name="id" value="">
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12 text-center">
                            <label for="tache_edit"><input id="sub-btn" type="submit" value="submit" name="tache_edit"></label>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php require('header.php') ?>

     <div class="container">
        <div class="jumbotron">
            <h2>Add a new Unit</h2><br>
            <form>

                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Unit Code</label>
                    <div class="col-sm-5">
                    <input type="type" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Enter Unit Code." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Unit Name</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Enter Unit Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                    <div class="col-sm-5">
                    <button type="submit" class="btn btn-success" onclick="add_unit()">Add Unit</button>
                    </div>
                </div>

            </form>
        </div>
     </div>



    <!-- Campus and Semester Assignment  -->
        <div class="container" id="unit-list">
            <div class="jumbotron">
                <h2>Campus and Semester Assignment</h2><br><br>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#it1110">
                                IT1110 Python OOPS: Object Oriented Programming</a>
                            </h4>
                        </div>

                        <div id="it1110" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row"><div class="col-lg-5"><label><input type="checkbox" id="it1110_pan" value="pandora"  onclick="enable_semester('it1110_pan')">Avail this course to Pandora Campus</label></div></div>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_pan_sem_1" value="sem1" disabled>Semester 1</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_pan_sem_2" value="sem2" disabled>Semester 2</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_pan_sem_win" value="winter" disabled>Winter School</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_pan_sem_spr" value="spring" disabled>Spring School</label></div>
                                </div>
                                <div class="row"><div class="col-lg-5"><label><input type="checkbox" value="" id="it1110_riv" value="rivendell"  onclick="enable_semester('it1110_riv')" >Avail this course to Rivaldell Campus</label></div></div>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_riv_sem_1" value="" disabled>Semester 1</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_riv_sem_2" value="" disabled>Semester 2</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_riv_sem_win" value="" disabled>Winter School</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_riv_sem_spr" value="" disabled>Spring School</label></div>
                                </div>
                                <div class="row"><div class="col-lg-5"><label><input type="checkbox" value="" id="it1110_nev" onclick="enable_semester('it1110_nev')">Avail this course to Neverland Campus</label></div></div>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_nev_sem_1" value="" disabled>Semester 1</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_nev_sem_2" value="" disabled>Semester 2</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_nev_sem_win" value="" disabled>Winter School</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="it1110_nev_sem_spr" value="" disabled>Spring School</label></div>
                                </div>

                                <br><br>
                                <center><button type="button" class="btn btn-success" onclick="assign_campus_semester()">Save Changes</button></center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Bgmt1110">
                            Bgmt1110 Project Management</a>
                        </h4>
                    </div>

                    <div id="Bgmt1110" class="panel-collapse collapse">
                        <div class="panel-body">
                        <div class="row"><div class="col-lg-5"><label><input type="checkbox" id="bgmt1110_pan" value="pandora"  onclick="enable_semester('bgmt1110_pan')">Avail this course to Pandora Campus</label></div></div>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_pan_sem_1" value="sem1" disabled>Semester 1</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_pan_sem_2" value="sem2" disabled>Semester 2</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_pan_sem_win" value="winter" disabled>Winter School</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_pan_sem_spr" value="spring" disabled>Spring School</label></div>
                                </div>
                                <div class="row"><div class="col-lg-5"><label><input type="checkbox" value="" id="bgmt1110_riv" value="rivendell"  onclick="enable_semester('bgmt1110_riv')" >Avail this course to Rivaldell Campus</label></div></div>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_riv_sem_1" value="" disabled>Semester 1</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_riv_sem_2" value="" disabled>Semester 2</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_riv_sem_win" value="" disabled>Winter School</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_riv_sem_spr" value="" disabled>Spring School</label></div>
                                </div>
                                <div class="row"><div class="col-lg-5"><label><input type="checkbox" value="" id="bgmt1110_nev" onclick="enable_semester('bgmt1110_nev')">Avail this course to Neverland Campus</label></div></div>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_nev_sem_1" value="" disabled>Semester 1</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_nev_sem_2" value="" disabled>Semester 2</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_nev_sem_win" value="" disabled>Winter School</label></div>
                                    <div class="col-lg-2"><label><input type="checkbox" id="bgmt1110_nev_sem_spr" value="" disabled>Spring School</label></div>
                                </div>
                                <br><br>
                                <center><button type="button" class="btn btn-success" onclick="assign_campus_semester()">Save Changes</button><center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Campus and Semester Assignment  -->

<?php require('footer.php') ?>

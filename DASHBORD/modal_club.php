<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Etrer le club</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="form-club" method="post" action="./insert_club.php">

                    <div>
                        <label for=" name">name :</label>
                        <input id="name" name="name" type="text" placeholder="Name" maxlength="" />
                    </div>

                    <div>
                        <label for="ImageURL">ImageURL :</label>
                        <input id="ImageURL" name="ImageURL" type="text" placeholder="ImageURL" maxlength="" />
                    </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>

        </div>
    </div>
</div>
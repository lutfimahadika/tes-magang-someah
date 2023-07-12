<form action="{{ url('tasks/create', @$tasks->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="modal fade" id="ModalApprovement" tabindex="-1" aria-labelledby="ModalApprovementLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="ModalApprovementLabel">approvement</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-5">
                    <select name="status" id="status" class="form-control">
                        <option @selected(old('status') == '') value="">- Choose Status -</option>
                        <option @selected(old('status', @$tasks->status) == 'Approved') value="Approved">Approved</option>
                    <option @selected(old('status', @$tasks->status) == 'Rejected') value="Rejected">Rejected</option>
                    <option @selected(old('status', @$tasks->status) == 'Finished') value="Finished">Finished</option>
                    </select>
            </div>
        </div>
        <div class="modal-footer">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</form>
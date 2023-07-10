<form action="{{ url('tasks/create', @$tasks->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create New Task</h4>                   
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row mb-3">
                            <label for="tasks_name" class="col-sm-2 col-form-label">Task Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tasks_name" name="tasks_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="attachment" class="col-sm-2 col-form-label">Attachment</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</form>
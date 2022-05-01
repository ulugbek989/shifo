<div class="modal fade" id="doc{{$us->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4"><img width="120" src="/images/{{$us->avatar}}" ></div>
                        <div class="col-md-4">
                            <h4>{{$us->name}}</h4>
                            <h4>Surnames</h4>
                        </div>
                        <div class="col-md-4">
                            <h4>Year</h4>
                            <h4>Address</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">first</div>
                        <div class="col-md-4">second</div>
                        <div class="col-md-4">third</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



<div class="modal fade right" id="exampleModalPreview{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
        <div class="modal-content-full-width modal-content ">
            <div class=" modal-header-full-width   modal-header text-center">
                <h5 class="modal-title w-100" id="exampleModalPreviewLabel">Material Design  Full Screen Modal</h5>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

{{$post->id}}
            </div>
            <div class="modal-footer-full-width  modal-footer">
                <button type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-md btn-rounded">Save changes</button>
            </div>
        </div>
    </div>
</div>

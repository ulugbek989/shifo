<div>

    <textarea type="text" cols="50" rows="5" class="w-full rounded border shadow p-2 mr-8 my-8"
              placeholder="Commentni kiritish"  name="ctn"  wire:model="title"></textarea>
    @if($errors->has('title')) <p>{{$errors->first('title')}}</p>@endif
    <br>
    <button wire:click="save()"  class="btn btn-success">Save</button>
</div>

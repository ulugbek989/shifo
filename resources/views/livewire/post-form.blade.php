<div>
    <label>Title</label>
    <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2"
           placeholder="title"   wire:model="title">
    @if($errors->has('content')) <p>{{$errors->first('title')}}</p>@endif
    <br>
    <label>Description</label>
    <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2"
           placeholder="content"   wire:model="content">
    @if($errors->has('content')) <p>{{$errors->first('content')}}</p>@endif
    <br>

    <button wire:click="save"  class="btn btn-success">Save</button>
</div>

<div class="form-group">
    <select class="form-control" id = "list_entry" name="category" required="">
        <option value="">Select</option>
        @foreach(\App\Helpers\Helper::getCategory() as $datas)
            <option value="{{$datas->category}}">{{$datas->category}}</option>
        @endforeach
    </select>
</div>

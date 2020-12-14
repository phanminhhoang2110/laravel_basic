{{--Goi ra ten cua 1 route nào dó--}}
<form action="{{route('baiviet.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">Tiêu đề</label>
        <input type="text" name="title"/>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <br/>
    <div>
        <label for="noidung">Nội dung</label>
        <textarea cols="20" rows="5" name="noidung"></textarea>
        {{--Sử dụng để báo lỗi được trả về bởi rule trong request--}}
        @error('noidung')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div>
        <button type="submit">Đăng bài</button>
    </div>
</form>

@extends('admin.layouts.app')

@section('content')
<a class="backtop" href="{{url('admin/top')}}">{{ __('←戻る') }}</a>
<h1>バナー管理</h1>

<div>
    <table class="bannerlist">
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td><img src="{{$banner->image}}"width="150"height="120" alt="商品画像"></td>
            
                <td><input type="file" class="form-control" id="image" name="image" accept="image/png, image/jpeg, image/jpg" value="/EducasionSystem/public/storage/image/{{$banner->image}}"></td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>    
@endsection

@extends('admin.layouts.app')

@section('content')
<a class="backtop" href="{{url('admin/top')}}">{{ __('←戻る') }}</a>
<h1>バナー管理</h1>
<form action="{{route('admin.create')}}" method="post" enctype="multipart/form-data"  >
        @csrf
    <div>
        <table class="bannerlist">
            <tbody class="bannerbody">
            @foreach($banners as $banner)
                <tr>
                
                    <td>
                        <img src="{{asset($banner->image)}}"width="150"height="90" alt="バナー画像">
                    </td>
            
                    <td id="imagefile">
                        <label for="imagefile" >
                            
                            <input type="file" class="form-control" id="image"disabled>
                        </label>
                    </td>
                
                    <td>
                        <form action="{{route('admin.destroy',$banner->id)}}" method="post" >
                            @csrf
                            <input data-banner_id="{{$banner->id}}"type="submit" class="delete" name="delete" value="―">
                        </form> 
                    </td>
                       
                </tr>
            @endforeach  
                <tr class="plus-area">   
                    <td>
                        <div class="sample">Please register...</div>
                    <td>
                        <input type="file" class="form-control" id="image" name="image[]" multipleaccept="image/png, image/jpeg, image/jpg" value="{{old('image')}}">
                    </td>
                    <td>
                        <button type="button" class="del" id="del" name="formdel" value="削除"><span="mozi">{{__('－')}}</span></button>
                    </td>
                </tr>
                
            </tbody>   
                      
        </table>
        
         
        <button type="button" class="plus" ><span="mozi">{{__('＋')}}</span></button>
    </div>
    <div>
        @if($errors->has('image'))
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach    
        @endif
        <button type="submit" class="touroku">{{__('登録')}}</button>
    </div>
</form>
@endsection

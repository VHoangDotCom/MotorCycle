@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>@lang('admin.banners.ban_manage')</h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>@lang('admin.banners.edit')</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="{{ route('admin.banner.update', $ban->ban_id) }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              @method('put')
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.banners.ban_image')</label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="file" id="last-name" required="required" name="ban_image" class="form-control" value="{{ $ban->ban_image }}">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">@lang('admin.banners.ban_name') <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" name="ban_name" class="form-control" value="{{ $ban->ban_name }}">
                </div>
              </div>
              <div class="item form-group text-center justify-content-center">
                @if ($ban->ban_image == null)
                <img class="img-thumbnail" style="width: 100px; height:100px;" src="https://logos.textgiraffe.com/logos/logo-name/Cate-designstyle-smoothie-m.png" alt="">
                @else
                <img class="img-thumbnail" style="width: 100px; height:100px;" src="images/banners/{{ $ban->ban_image }}" alt="">
                @endif
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button id="submit" type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $("button#submit").click(function(){
      var submit = $("input#last-name").val();
      var first_name = $("input#first-name").val();
      var flag = true
      if(submit ==''){
        $("input#last-name").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
        alert("B???n ch??a th??m file")
        flag = false
      }else{
        $("input#last-name").css({"background" : "rgb(100 216 90 / 30%)", "border" : "2px solid rgb(147 161 146 / 30%)"});
      }

      if(first_name ==''){
        $("input#first-name").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
        alert("B???n ch??a nh???p t??n Banner")
        flag = false
      }else{
        $("input#first-name").css({"background" : "rgb(100 216 90 / 30%)", "border" : "2px solid rgb(147 161 146 / 30%)"});
      }
      
      if(flag == true){
        alert("Th??m Th??nh C??ng")
        return true
      }
      return false
    })
  })
</script>
@endsection
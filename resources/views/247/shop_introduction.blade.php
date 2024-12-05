@extends($theme.'.shop_layout')
@push('style')
<link href="{{asset('css/guest/introduction/introduction.css')}}" rel="stylesheet" type="text/css"/>
<style>
p{
    
    margin-bottom: 0.6em !important; 
    font-size: 15px !important;
}
</style>
@endpush
@section("content")
<div class="introduction">    
    <div class="section">
        <div class="container">
            <div class="col-inner">
                <div style="text-align: center;">
                    <img style="max-height: 100px;padding: 5px;" src="{{ asset('documents/website') }}/{{ $logo->image }}" alt="">
                </div>
               <div style="max-width: 800px; margin: auto; text-align: justify;">
                <p>Bản thân từng là sinh viên y và trải qua 3 năm nội trú, các admin thấu hiểu con đường học tập của các bạn. </p>

                <p>Ước mơ về những thế hệ sinh viên y ra trường nắm được chắc các kiến thức bệnh học Nội Ngoại Sản Nhi trong trường y dựa trên kiến thức cơ sở Giải phẫu, Sinh Lý, Hóa Sinh, Sinh di truyền, và làm tiền đề bước vào kì thi nội trú các trường y trên cả nước.</p> 
                <p>Hy vọng đem đến cho các bạn những hành trang tốt đẹp nhất ! </p>
                <p></p>
                <p>Good luck ^^ </p>

               </div>
                </div>
            </div>
        </div>
</div>
@endsection
@push('scripts')
<script>
$("#introduction-nav_item").toggleClass("active");
</script>
@endpush

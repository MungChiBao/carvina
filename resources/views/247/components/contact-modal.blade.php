<style>
    .btn-register {
        background: #F38C1E;
    }

    .btn-register:hover {
        background: #c9741a;
        color: #fff;
    }

    .menu_active_top {
        background: #F38C1E !important;
        border-radius: 20px !important;
    }

    .close-button {
        float: right;
        width: 1.5rem;
        font-size: 1.2em;
        line-height: 1;
        padding: 0 .2em .15em;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: var(--clr-neutral);
        color: var(--clr-dark);
        transition: color 0.12s ease-in-out;
    }

    .close-button:hover {
        color: var(--clr-main);
    }

    .show-modal {
        opacity: 1;
        visibility: visible;
        transform: scale(1.0);
        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }

    .modal {
        visibility: hidden;
        opacity: 0;
        position: fixed;
        width: 100%;
        z-index: 100;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(77, 77, 77, .7);
        transition: all 0.4s;
        height: 100vh;
    }

    .modal:target {
        visibility: visible;
        opacity: 1;
        overflow: hidden !important;
    }

    .modal__content {
        border-radius: 4px;
        position: relative;
        width: 500px;
        max-width: 90%;
        background: #fff;
        padding: 1em 2em;
    }

    .modal__footer {
        text-align: right;
    }

    .modal__footer a {
        color: #585858;
    }

    .modal__footer i {
        color: #d02d2c;
    }

    .modal__close {
        position: absolute;
        top: 5px;
        right: 5px;
        color: #585858;
        text-decoration: none;
        font-size: 30px;
        padding: 0 10px;
    }



    .input-group{
        display: block;
    }

    .m-md-2{
        margin-bottom: 20px !important;
    }
</style>
<div id="register-modal" class="modal" >
    <div class="modal__content">
        <h3 class="text-center">NHẬN TƯ VẤN</h3>
        <p class="text-center">Chúng tôi sẽ liên hệ với bạn sớm nhất có thể</p>
        <form action="{{ url('lien-he.html') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name='email'>

            
            <div class="input-group mb-2">
                <input type="text" class="form-control m-md-2 " placeholder="" aria-label="Product"
                    name="title" value="Tư vấn sản phẩm {{ $product->name }}">
            </div>

            <div class="input-group mb-2">
                <input type="text" class="form-control m-md-2 " placeholder="Họ và tên" aria-label="Username"
                    name="name" required>
            </div>
            <div class="input-group mb-2">
                <input type="number" class="form-control m-md-2" placeholder="Số điện thoại" aria-label="phone"
                    aria-describedby="basic-addon1" name="phone" required>
            </div>
            <div class="input-group mb-2">
                <textarea type="text" class="form-control m-md-2" aria-label="content" placeholder="Ghi chú thêm..." name="content"></textarea>
            </div>
            <div class="input-group mb-2 text-center">
                <button style="background-color: #c1001e; color:#fff" type="submit"
                    class="btn-register btn text-uppercase fw-bold px-5 fs-4 w-100">Gửi đi</button>
            </div>
        </form>

        <a href="#" class="modal__close">&times;</a>
    </div>
</div>
<style>
    footer{
        /* position: absolute;
        z-index: 999;
        bottom: 0; */
        background-image: linear-gradient(160deg,#c5f9d7,#f7d486);
        width: 100%;
        display: flex;
        justify-content: space-around;
    }
    #div{
        margin: 1em;
        width: 30%;
        float: left;
    }
    /* #div2{
        display: flex;
        align-items: center;
    } */
    #div3{
        width: 50%;
    }
    #div3>img{
        padding: 0.7em;
    }
</style>
<footer>
    <div id="div">
        <div id="div2">
            <!-- <img id="ic" src="<?php echo base_url(); ?>images/hinh/Capture-removebg-preview.png"/> -->
            <h3>Hệ thống đặt vé xe online - KT</h3>
        </div>
        <p><svg style="margin-right: 0.7em;" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </svg>Địa chỉ: Đại học Công nghệ Tp.HCM</p>
    </div>
    <div id="div3">
        <div>
            <h3>Liên hệ với chúng tôi</h3>
        </div>
        <img src="<?php echo base_url(); ?>images/icons8-facebook-48.png" />
        <img src="<?php echo base_url(); ?>images/icons8-instagram-48.png" />
        <img src="<?php echo base_url(); ?>images/icons8-zalo-48.png" />
    </div>
</footer>
</html>
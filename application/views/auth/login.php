<main class="container-fluid main">
    <div class="row">
        <div class="col-lg-12 backgroundBanner">
            <layoutLeft class="layout-left">
                <header class="text-center">
                    <img src="<?=base_url('assets/img/logo-depok.png')?>" alt="" class="logo">
                    <!-- <h1>SIWIKODE</h1> -->
                    <!-- <h4>Sistem Informasi Wisata Kota Depok</h4> -->
                </header>
            </layoutLeft> 

            <layoutRight class="layout-right" >
                <form id="formLogin" action="<?=base_url('auth')?>" method="POST" class="formLogin form-horizontal mt-5">
          
                    <h2 class="text-center mb-5"><i class="fas fa-location-arrow mr-3" style="font-size: 35px;"></i>SIWIKODE</h2>
                    <?= $this->session->userdata('message')?>
                    <?= $this->session->unset_userdata('message') ?>
                    
                    <containerInput class="container-input">
                        <div class="form-group">
                            <!-- <label for="email" class="ourLabel">Email</label>  -->
                            <input id="email" name="email" type="email" class="form-control ourInput" value="<?=set_value('email')?>" placeholder="Email">
                            <?=  form_error('email', '<small class="text-danger">', '</small>')?>
                        </div>
                        <!------------------>
                        <div class="form-group">
                            <!-- <label for="password" class="ourLabel">Password</label>  -->
                            <div class="password">
                                <input id="passwordLogin" name="password" type="password" class="form-control ourInput" placeholder="Password">
                                <checkbox class="checkbox">
                                    <input type="checkbox" id="showLogin">
                                    <i class="fas fa-eye mata" id="mataLogin"></i> 
                                    <i class="fas fa-eye-slash buta" id="butaLogin"></i>
                                </checkbox>
                            </div>
                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <!------------------>
                        <label for="repeat_password" class="ourLabel" hidden>Repeat Password</label> 
                        <input id="repeatPasswordLogin" name="repeat_password" type="password" class="form-control ourInput" hidden>
                        <!------------------>
                        <input type="submit" class="form-control kirim" value="Sign In">
                        <p>don't have account? <a class="linkSignUp" href="<?=base_url('auth/registration')?>">Sign Up</a></p>
                    </containerInput>
                </form>
            </layoutRight> 
        </div> 
    </div> 
</main>
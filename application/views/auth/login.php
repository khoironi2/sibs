<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            Masuk Disini
                        </div>
                        <div class="login-form">
                            <form action="<?= base_url('auth/loginForm'); ?>" method="post">
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="au-input au-input--full" type="text" name="password" placeholder="password">
                                </div>
                                <button class="au-btn au-btn--block btn-dark m-b-20" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
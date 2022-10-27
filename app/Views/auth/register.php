<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
</head>
<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4 offset-4">
                <h4>Sign Up</h4>
                <br>
                <br>
                <br>

                <?php
                    if(!empty(session()->getFlashdata('success'))){
                        ?>
                        <div class="alert alert-success">
                            <?= 
                                session()->getFlashdata('success');
                            ?>
                        </div>
                        <?php
                    } else if(!empty(session()->getFlashdata('fail'))){
                        ?>
                        <div class="alert alert-danger">
                            <?= 
                                session()->getFlashdata('fail');
                            ?>
                        </div>
                        <?php
                    } 
                ?>

                <form action="<?= site_url('registerUser') ?>" 
                      class="form mb-3"
                      method="post">
                    <?= csrf_field(); ?>
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" 
                               class="form-control"
                               name="name"
                               value="<?= set_value('name') ?>"
                               placeholder="Name Here"
                               aria-label="Username"
                               aria-describedby="basic-addon1">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'name') : '' ?>
                        </span>
                    </div>

                    <div class="input-group mb-3">
                        <label for="">E-mail</label>
                        <input type="text" 
                               class="form-control"
                               name="email"
                               value="<?= set_value('email') ?>"
                               placeholder="Email Here"
                               aria-label="Username"
                               aria-describedby="basic-addon1">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'email') : '' ?>
                        </span>
                    </div>

                    <div class="form-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                        <input type="password" 
                                class="form-control"
                                name="password"
                                value="<?= set_value('password') ?>"
                                placeholder="Password Here"
                                aria-label="Username"
                                aria-describedby="basic-addon1">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'password') : '' ?>
                        </span>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                        <input type="password" 
                                class="form-control"
                                name="passwordConf"
                                value="<?= set_value('passwordConf') ?>"
                                placeholder="Confirm Password Here"
                                aria-label="Username"
                                aria-describedby="basic-addon1">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_form_errors($validation, 'passwordConf') : '' ?>
                        </span>
                    </div>

                    <div class="col-12">
                        <input type="submit" 
                               class="btn btn-primary"
                               value="Sign Up">
                    </div>
                </form>

                <a href="<?= site_url('auth') ?>">
                    I already have an account, login
                </a>

            </div>
        </div>
    </div>    


    <script src="<?= base_url('assets/bootstrap.bundle.min.css') ?>"></script>
</body>
</html>
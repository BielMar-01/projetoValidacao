<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Cadastro de Clientes</title>

    <style>
        body{
            padding: 20px;
        }
    </style>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2" >
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input type="text" id="nome" class="form-control <?php echo e($errors->has('nome') ? 'is-invalid' : ''); ?>" name="nome" placeholder="Nome do Cliente">
                                <?php if($errors->has('nome')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('nome')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" class="form-control <?php echo e($errors->has('idade') ? 'is-invalid' : ''); ?>" name="idade" placeholder="Idade do Cliente">
                                <?php if($errors->has('idade')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('idade')); ?>

                                    </div>
                                <?php endif; ?> 
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input type="text" id="endereco" class="form-control <?php echo e($errors->has('endereco') ? 'is-invalid' : ''); ?>" name="endereco" placeholder="Endereco do Cliente">
                                <?php if($errors->has('endereco')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('endereco')); ?>

                                    </div>
                                <?php endif; ?> 
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input type="text" id="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" name="email" placeholder="E-mail do Cliente">
                                <?php if($errors->has('email')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('email')); ?>

                                    </div>
                                <?php endif; ?> 
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                            <button class="btn btn-danger btn-sm" type="cancel">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main> 
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html><?php /**PATH /home/gabriel/code/validacao/resources/views/novocliente.blade.php ENDPATH**/ ?>
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
                                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome do Cliente"> 
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" class="form-control" name="idade" placeholder="Idade do Cliente"> 
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereco do Cliente"> 
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="E-mail do Cliente"> 
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                            <button class="btn btn-danger btn-sm" type="cancel">Cancelar</button>
                        </form>
                    </div>
                    <?php if($errors->any()): ?>
                        <div class="card-footer">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo e($error); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html><?php /**PATH /home/gabriel/code/validacao/resources/views/novocliente.blade.php ENDPATH**/ ?>
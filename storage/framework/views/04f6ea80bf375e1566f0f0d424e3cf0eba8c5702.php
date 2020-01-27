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
                        <table class="table table-bordered table-hover" id="tabelaprodutos">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Idade</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($c->id); ?></td>
                                        <td><?php echo e($c->nome); ?></td>
                                        <td><?php echo e($c->endereco); ?></td>
                                        <td><?php echo e($c->idade); ?></td>
                                        <td><?php echo e($c->email); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html><?php /**PATH /home/gabriel/code/validacao/resources/views/clientes.blade.php ENDPATH**/ ?>
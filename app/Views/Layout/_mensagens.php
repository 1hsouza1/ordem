<?php if (session()->has('sucesso')): ?>


<div class="alert alert-success alert-dimissible fade show" role="alert">
    <strong>Tudo certo!</strong> <?php echo session('sucesso'); ?>
    <button type="button" class="close" data-dimiss="alert" aria-label="Close"></button>
    <span aria-hidden="true">&times;</span>

</div>


<?php endif; ?>

<?php if (session()->has('info')): ?>


<div class="alert alert-success alert-dimissible fade show" role="alert">
    <strong>Informação!</strong> <?php echo session('info'); ?>
    <button type="button" class="close" data-dimiss="alert" aria-label="Close"></button>
    <span aria-hidden="true">&times;</span>

</div>


<?php endif; ?>

<?php if (session()->has('atencao')): ?>


<div class="alert alert-success alert-dimissible fade show" role="alert">
    <strong>Atenção!</strong> <?php echo session('atencao'); ?>
    <button type="button" class="close" data-dimiss="alert" aria-label="Close"></button>
    <span aria-hidden="true">&times;</span>
</div>


<?php endif; ?>



<?php if (session()->has('erros_model')): ?>

<ul>

    <?php foreach($erros_model as $erro): ?>

    <li class="text-danger"></li>

    <?php endforeach; ?>

</ul>


<?php endif; ?>


<?php if (session()->has('error')): ?>


    <div class="alert alert-danger alert-dimissible fade show" role="alert">
        <strong>Error</strong> <?php echo session('error'); ?>
        <button type="button" class="close" data-dimiss="alert" aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>
    </div>


<?php endif; ?>
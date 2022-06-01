<h1>Imóveis</h1>
<hr>
<div>
    <table style="top:40px;">
        <thead>
            <tr>
                <th>Login</th>
                <th>Permissão</th>
                <th><a href="cadImovel.php">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php

            require_once '../controller/ImovelController.php';

            
            $imoveis = call_user_func(array('ImovelController','listar'));
            if (isset($imoveis))
            {
                foreach ($imoveis as $imovel) 
                {
                    ?>
                        <tr>
                            <!-- Como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                            <td><?php echo $imovel->getId(); ?></td>
                            <td><?php echo $imovel->getDescricao(); ?></td>
                            <td><?php echo "<img class='fotoCasa' src='" . $imovel->getFoto() . "'>" ?></td>
                            <td><?php echo $imovel->getValor(); ?></td>
                            <td><?php echo $imovel->getTipo(); ?></td>
                            <td>
                                <a href="">Editar</a>
                                <a href="">Excluir</a>
                            </td>
                        </tr>
                    <?php
                }
            } else
             {
                ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado</td>
                    </tr>
                <?php  
            }
            ?>
            </tbody>
        </table>
    </div>
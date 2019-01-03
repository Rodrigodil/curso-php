<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 30/12/2018
 * Time: 17:39
 */

$hierarquia = array(

    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //Termino: Gerente de Vendas
                )
            ),
            //Termino: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de pagamentos
                        )
                    ),
                    //Termino: Gerente de contas a pagar
                    //Inicio: Gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Inicio: Supervisor de suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                            //Termino: Supervisor de Suprimentos
                        )
                    )
                    //Termino: Gerente de compras

                )
            )
            //Termino: Diretor Financeiro

        )
    )

);

function exibe($cargos) {

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);
        }

    }

    $html .= '</ul>';

    return $html;

}
echo exibe($hierarquia);
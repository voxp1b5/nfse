<?php

namespace PhpNFe\NFSe\Builder;

use PhpNFe\Tools\Builder\Builder;

/**
 * Informacoes de identificacao do RPS.
 * Class IdentificacaoRPS.
 */
class IdeRPS extends Builder
{
    /**
     * Numero do RPS.
     *
     * @var string
     */
    public $numeroRPS;

    /**
     * Serie do RPS.
     *
     * @var string
     */
    public $serieRPS;

    /**
     * Tipo do RPS.
     * 1 - RPS
     * 2 - Nota fiscal conjugada (mista)
     * 3 - Cupom.
     * @var string
     */
    public $tipoRPS;

    /**
     * Status do RPS.
     * N – Normal;
     * C – Cancelada;
     * E – Extraviada.
     *
     * @var string
     */
    public $statusRPS;

    /**
     * Data da Emissao do RPS.
     *
     * @var string
     */
    public $dataEmissao;

    /**
     * Natureza de Operacao do RPS.
     *
     * 101 ISS devido para o Município prestador
     * 111 ISS devido para um Município que não é o do prestador
     * 121 ISS Fixo (Soc. Profissionais)
     * 201 ISS retido pelo tomador/intermediário
     * 301 Operação imune, isenta ou não tributada.
     */
    public $naturezaOperacao;
}
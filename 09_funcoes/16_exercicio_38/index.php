<?php

    function itensSuper($itens) {
        return implode(", ", $itens);
    }

    $itens = ['arroz', 'feijao', 'batata', 'macarrao'];
    echo itensSuper($itens);
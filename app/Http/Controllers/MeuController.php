<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    public function pinturaPiramide($h, $ab, $tipoTinta){

        $a1 = sqrt(($h*$h)+($ab*$ab)); //a1
        $Af = 4*$ab*$ab; //área do fundo (Área da base)
        $Al = (2*$ab*$a1)/2; //área lateral (Área do triangulo)
        $At = 4*$Al+$Af; //área total
        $V = ($Af*$h)/3; //volume total
        $litros = $At/4.76; //Litros de tinta para pintar a pirâmide por dentro
        $latas = ceil($litros/18); //Latas de tinta para pintar a pirâmide por dentro
        $preco = 0; //Valor total de acordo com o tipo de tinta 
        switch ($tipoTinta){
            case 1:
                $preco = $latas * 127.90;
            break;
            case 2:
                $preco = $latas * 258.98;
            break;
            case 3:
                $preco = $latas * 344.34;
            break;
        }
        return "
        <!DOCTYPE html>
        <html>
        <head>
        <title>Calculo Pintura Pirâmide</title>
        </head>
        <body>

        <a href='http://localhost:8000/'>Voltar ao Menu</a> </br></br>

        <h3>Resultado</h3>
        ab: ".$ab."<br>".
               "h: ".$h."<br>".
               "a1: ".$a1."<br>".
               "Área Triângulo: ".$Al."<br>".
               "Área Base: ".$Af."<br>".
               "Área Total: ".$At."<br>".
               "Tipo de Tinta: ".$tipoTinta."<br>".
               "Litros: ".$litros."<br>".
               "Latas: ".$latas."<br>".
               "Preço: ".$preco."<br>".
               "Volume: ".$V."
        </body>
        </html>";

    }

}

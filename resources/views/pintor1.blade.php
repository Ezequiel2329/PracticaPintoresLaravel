@extends('layouts.master')
@section('title')

@section('navbar')
@parent
@stop

@section('header')
<h1>Rembrandt Harmenszoon van Rijn</h1>
@stop

@section('content')
    <h3>Biografia</h3>
    <p>Rembrandt Harmenszoon van Rijn, más conocido simplemente como Rembrandt, fue un pintor y grabador neerlandés. 
    La historia del arte lo considera uno de los mayores maestros barrocos de la pintura y el grabado, siendo con seguridad el artista más 
    importante de la historia de los Países Bajos.​ Su aportación a la pintura coincide con lo que los historiadores han dado en llamar la edad 
    de oro neerlandesa, el considerado momento cumbre de su cultura, ciencia, comercio, poderío e influencia política. Habiendo alcanzado el éxito 
    en la juventud, sus últimos años estuvieron marcados por la tragedia personal y la ruina económica. Sus dibujos y pinturas siempre fueron muy 
    populares, gozando también de gran predicamento entre los artistas y durante veinte años se convirtió en el maestro de prácticamente todos 
    los pintores neerlandeses.​ Entre los mayores logros creativos de Rembrandt están los magistrales retratos que realizó para sus contemporáneos, 
    sus autorretratos y sus ilustraciones de escenas bíblicas.En sus autorretratos, especialmente, se observa siempre la mirada humilde y 
    sincera de un artista que trazó en ellos su propia biografía.​</p>

    <h4>Cuadros</h4>
    <img src="images/p1c1.jpg" id="p1c1">
        <p id="contenidoPin">
            A Young Scholar and his Tutor<br>
            Workshop of Rembrandt Harmensz. van Rijn about 1629 - 1630<br>
            From the collection of The J. Paul Getty Museum</p>

    <img src="images/p1c2.jpg" id="p1c2">
        <p id="contenidoPin">
            The Concord of the State<br>
            Rembrandt van Rijn 1637 - 1645<br>
            From the collection of Museum Boijmans Van Beuningen</p>

    <img src="images/p1c3.jpg" id="p1c3">
        <p id="contenidoPin">
            The Betrothal<br>
            Rembrandt (circle of) About 1640<br>
            From the collection of Walker Art Gallery, Liverpool</p>
        
    <img src="images/p1c4.jpg" id="p1c4">
        <p id="contenidoPin">
            A painter in his studio<br>
            Rembrandt Harmensz van Rijn (Anonymous pupil of) 1600 - 1700<br>
            From the collection of The Kremer Collection</p>

    <img src="images/p1c5.jpg" id="p1c5">
        <p id="contenidoPin">The baptism of the eunuch (Copia de una pintura perdida)<br>
            Rembrandt Harmensz van Rijn 1631 - 1631<br>
            From the collection of The Kremer Collection</p>
@stop

@section('footer')
@parent
@stop
<?php
/**
 * Carateristica significa asilar, separar o sacar
 * nos ayuda a pensar en el resultado final ante de la programacion
 * 
 * 
 */
interface StoreInterface
{
    /**
     * solo declaramos lo que queremos
     * lo que queremos como resultado final
     * aquel archivo o clase que implemente esta interfaz
     * esta en la obligacion de ejecutar este metodo
     */
    public function get();
    /**
     * aislamos el resultado final
     */
}
<?php

require_once __DIR__ . '/ReviewState.php';

/**
 * Class State
 * базовый класс состояний документов
 */
abstract class State
{
    /**
     * @var ADocument
     */
    protected ADocument $doc;

    /**
     * State constructor.
     * @param ADocument $doc
     *
     * ссылка на объект документа: состояние знает, какому объекту принадлежит
     */
    public function __construct(ADocument $doc)
    {
        $this->doc = $doc;
    }

    /**
     * @param $oldState
     *
     * реализация некой логики при смене состояния
     */
    public function onEnterState(State $oldState): void
    {
        echo $oldState->getStateInfo() . ' -> ' . $this->getStateInfo() . "\n";
    }

    /**
     * методы действий с пустой реализацией созданы неабстрактными для того,
     * чтобы в потомках можно было реализовать только необходимые для данного состояния
     */
    public function verify(): void{}
    public function approve(): void{}
    public function deny(): void{}

}
<?php

/**
 * Class IDocument
 *
 */
abstract class ADocument
{
    /**
     * @var State
     */
    private ?State $state = null;

    /**
     * @return mixed
     */
    abstract public function getSum();

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    /**
     * @param State $state
     */
    public function changeState(State $state): void
    {
        $oldState = $this->state;
        $this->state = $state;
        $this->state->onEnterState($oldState);
    }

    /**
     *
     */
    public function verify(): void
    {
        $this->state->verify();
    }

    /**
     *
     */
    public function approve(): void
    {
        $this->state->approve();
    }

    /**
     *
     */
    public function deny(): void
    {
        $this->state->deny();
    }
}
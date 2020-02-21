<?php


class DraftState extends State
{
    /**
     *
     */
    public function verify(): void
    {
        $this->doc->changeState(new ReviewState($this->doc));
    }

    /**
     * @return string
     */
    public function getStateInfo(): string
    {
        return 'draft document';
    }

    public function onEnterState($oldState): void
    {
        if ($this->doc->getSum() > 0) {
            $this->verify();
        }
    }
}
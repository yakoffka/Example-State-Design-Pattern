<?php

require_once __DIR__ . '/../states/DraftState.php';

/**
 * Class Invoice
 */
class Invoice extends ADocument
{
    private int $sum;
    private string $partner;

    public function __construct(int $sum, string $partner)
    {
        $this->sum = $sum;
        $this->partner = $partner;
        $this->changeState(new DraftState($this));
    }


    /**
     * @return int
     */
    public function getSum(): int
    {
        return $this->sum;
    }

    /**
     * @return string
     */
    public function getPartner(): string
    {
        return $this->partner;
    }

    /**
     * @return string
     */
    public function getDocumentInfo(): string
    {
        return 'partner: ' . $this->getPartner()
            . ' | sum: ' . $this->getSum()
            . ' | state: ' . $this->getState()->getStateInfo()
            . ";\n\n";
    }
}
<?php

namespace klsheng\myinvois\ubl;

use klsheng\myinvois\ubl\constant\InvoiceTypeCodes;

class CreditNote extends Invoice
{
    public $xmlTagName = 'Invoice'; //'CreditNote'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::CREDIT_NOTE;

    /**
     * @return CreditNoteLine[]
     */
    public function getCreditNoteLines()
    {
        return $this->invoiceLines;
    }

    /**
     * @param CreditNoteLine[] $creditNoteLines
     * @return CreditNote
     */
    public function setCreditNoteLines($creditNoteLines)
    {
        $this->invoiceLines = $creditNoteLines;
        return $this;
    }
}

<?php

namespace klsheng\myinvois\ubl;

use klsheng\myinvois\ubl\constant\InvoiceTypeCodes;

class SelfBilledInvoice extends Invoice
{
    public $xmlTagName = 'Invoice'; //'SelfBilledInvoice'; // MyInvois System re-use back same tag name
    protected $invoiceTypeCode = InvoiceTypeCodes::SELF_BILLED_INVOICE;
}

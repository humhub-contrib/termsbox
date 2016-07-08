<?php
namespace termsbox\acceptance;


use termsbox\AcceptanceTester;

class TermsboxCest
{
    
    public function testTermsbox(AcceptanceTester $I)
    {
        $I->amAdmin();
        $I->wantToTest('the creation of news');
    }
   
}
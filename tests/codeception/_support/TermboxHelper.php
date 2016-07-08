<?php

namespace termsbox;

use Codeception\Module;
use Yii;

/**
 * This helper is used to populate the database with needed fixtures before any tests are run.
 * In this example, the database is populated with the demo login user, which is used in acceptance
 * and functional tests.  All fixtures will be loaded before the suite is started and unloaded after it
 * completes.
 */
class TermboxHelper extends Module
{

    public function seeBreakingNews()
    {
        $this->assertTrue(Yii::$app->getModule('termbox')->showTermsbox());
    }
    
    public function dontSeeBreakingNews()
    {
        $this->assertFalse(Yii::$app->getModule('breakingnews')->showTermsbox());
    }
    
}

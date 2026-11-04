<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../classes/Stagiaire.php';

class StagiaireTest extends TestCase {
    public function testMoyenne() {
        $s = new Stagiaire();
        $this->assertEquals(15, $s->getMoyenne(10, 20));
    }
    public function testAdmis() {
        $s = new Stagiaire();
        $this->assertTrue($s->estAdmis(12));
    }
}
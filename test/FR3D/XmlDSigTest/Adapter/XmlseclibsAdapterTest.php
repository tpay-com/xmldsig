<?php

namespace FR3D\XmlDSigTest\Adapter;

use FR3D\XmlDSig\Adapter\XmlseclibsAdapter;

/**
 * Test suite for Xmlseclibs adapter
 */
class XmlseclibsAdapterTest extends CommonTestCase
{
    protected function setUp()
    {
        $this->adapter = new XmlseclibsAdapter();
    }
}

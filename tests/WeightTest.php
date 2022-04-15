<?php

use Mht\PHPPackage\PHPPackageClass;

it('can test', function () {
    $pounds = PHPPackageClass::kilograms(100)->toPound();
    expect($pounds)->toEqual(220.46);
});

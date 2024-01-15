<?php

use Whitecube\Foobar\Tests\Fixtures\FakeObject;

test('sample dummy test', function () {
    expect(true)->toBeTrue();
});

test('failing dummy test', function () {
    // Comment the following line or implement the missing method in the FakeObject class in order to get the tests executed:
    new FakeObject;
    expect(true)->toBeTrue();
});

test('another dummy test', function () {
    expect(true)->toBeTrue();
});

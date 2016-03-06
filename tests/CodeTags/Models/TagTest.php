<?php

namespace CodePress\CodeTags\tests\Models;

use CodePress\CodeTags\Models\Tag;
use CodePress\CodeTags\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase{
    public function setUp(){
        parent::setUp();
        $this->migrate();
    }

    public function test_tag_persisted(){
        $tag = Tag::create(['name'=>'first']);
        $this->assertFileEquals('first', $tag->name);

        $tag = Tag::all()->first();
        $this->assertEquals('first', $tag->name);
    }
}
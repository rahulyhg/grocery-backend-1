<?php
namespace DbAPI\V1\Rpc\Question;

class QuestionControllerFactory
{
    public function __invoke($controllers)
    {
        return new QuestionController();
    }
}

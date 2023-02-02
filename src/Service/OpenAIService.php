<?php

namespace App\Service;
use Orhanerday\OpenAi\OpenAi;
class OpenAIService
{   private $open_ai;
    public function __construct()
    {   
        $open_ai_key =$_ENV['OPENAI_API_KEY'];
        
        $this->open_ai = new OpenAi($open_ai_key);
    }    
    public function getMessage($text): string
    {
        $complete = $this->open_ai->completion([
            'model' => 'text-davinci-003',
            'prompt' => $text,
            'temperature' => 0.9,
            'max_tokens' => 1000,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
        ]);
        $result = json_decode($complete, true);
        return $result['choices'][0]['text'];
    }
}

<?php
/**
* @author chicpro <chicpro@gmail.com>
* @copyright (c) chicpro
* @link https://ncube.net
*/

namespace chicpro\KAKAO;

class TRANSLATE
{
    protected $host;
    protected $appKey;

    protected $query;
    protected $sourceLanguage;
    protected $targetLanguage;

    public function __construct(string $appKey = '')
    {
        $this->host   = 'https://kapi.kakao.com/v1/translation/translate';
        $this->appKey = $appKey;
    }

    public function setHost(string $host)
    {
        $this->host = $host;
    }

    public function setAppKey(string $appKey)
    {
        $this->appKey = $appKey;
    }

    public function setQuery(string $query)
    {
        $this->query = $query;
    }

    public function setSourceLanguage(string $source)
    {
        $this->sourceLanguage = $source;
    }

    public function setTargetLanguage(string $target)
    {
        $this->targetLanguage = $target;
    }

    public function sendRequest()
    {
        $headers = array(
            'Authorization: KakaoAK ' . $this->appKey
        );

        $postData = [
            'src_lang'    => $this->sourceLanguage,
            'target_lang' => $this->targetLanguage,
            'query'       => $this->query
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $this->host);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

        $json = curl_exec($ch);

        if ($errno = curl_errno($ch)) {
            $result = new \stdClass;
            $result->errno = $errno;
            $result->error = 'Curl error: ' . curl_error($ch);
        } else {
            $response = json_decode($json);
            $result = $response;
        }

        return $result;
    }
}